<?php

namespace BookneticVendor\Google\AuthHandler;

use BookneticVendor\Google\Auth\CredentialsLoader;
use BookneticVendor\Google\Auth\HttpHandler\HttpHandlerFactory;
use BookneticVendor\Google\Auth\FetchAuthTokenCache;
use BookneticVendor\Google\Auth\Subscriber\AuthTokenSubscriber;
use BookneticVendor\Google\Auth\Subscriber\ScopedAccessTokenSubscriber;
use BookneticVendor\Google\Auth\Subscriber\SimpleSubscriber;
use BookneticVendor\GuzzleHttp\Client;
use BookneticVendor\GuzzleHttp\ClientInterface;
use BookneticVendor\Psr\Cache\CacheItemPoolInterface;
/**
*
*/
class Guzzle5AuthHandler
{
    protected $cache;
    protected $cacheConfig;
    public function __construct(CacheItemPoolInterface $cache = null, array $cacheConfig = [])
    {
        $this->cache = $cache;
        $this->cacheConfig = $cacheConfig;
    }
    public function attachCredentials(ClientInterface $http, CredentialsLoader $credentials, callable $tokenCallback = null)
    {
        // use the provided cache
        if ($this->cache) {
            $credentials = new FetchAuthTokenCache($credentials, $this->cacheConfig, $this->cache);
        }
        return $this->attachCredentialsCache($http, $credentials, $tokenCallback);
    }
    public function attachCredentialsCache(ClientInterface $http, FetchAuthTokenCache $credentials, callable $tokenCallback = null)
    {
        // if we end up needing to make an HTTP request to retrieve credentials, we
        // can use our existing one, but we need to throw exceptions so the error
        // bubbles up.
        $authHttp = $this->createAuthHttp($http);
        $authHttpHandler = HttpHandlerFactory::build($authHttp);
        $subscriber = new AuthTokenSubscriber($credentials, $authHttpHandler, $tokenCallback);
        $http->setDefaultOption('auth', 'google_auth');
        $http->getEmitter()->attach($subscriber);
        return $http;
    }
    public function attachToken(ClientInterface $http, array $token, array $scopes)
    {
        $tokenFunc = function ($scopes) use($token) {
            return $token['access_token'];
        };
        $subscriber = new ScopedAccessTokenSubscriber($tokenFunc, $scopes, $this->cacheConfig, $this->cache);
        $http->setDefaultOption('auth', 'scoped');
        $http->getEmitter()->attach($subscriber);
        return $http;
    }
    public function attachKey(ClientInterface $http, $key)
    {
        $subscriber = new SimpleSubscriber(['key' => $key]);
        $http->setDefaultOption('auth', 'simple');
        $http->getEmitter()->attach($subscriber);
        return $http;
    }
    private function createAuthHttp(ClientInterface $http)
    {
        return new Client(['base_url' => $http->getBaseUrl(), 'defaults' => ['exceptions' => \true, 'verify' => $http->getDefaultOption('verify'), 'proxy' => $http->getDefaultOption('proxy')]]);
    }
}
