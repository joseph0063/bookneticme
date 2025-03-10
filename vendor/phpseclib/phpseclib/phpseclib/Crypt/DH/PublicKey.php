<?php

/**
 * DH Public Key
 *
 * @category  Crypt
 * @package   DH
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */
namespace BookneticVendor\phpseclib3\Crypt\DH;

use BookneticVendor\phpseclib3\Crypt\Common;
use BookneticVendor\phpseclib3\Crypt\DH;
/**
 * DH Public Key
 *
 * @package DH
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
class PublicKey extends DH
{
    use Common\Traits\Fingerprint;
    /**
     * Returns the public key
     *
     * @param string $type
     * @param array $options optional
     * @return string
     */
    public function toString($type, array $options = [])
    {
        $type = self::validatePlugin('Keys', $type, 'savePublicKey');
        return $type::savePublicKey($this->prime, $this->base, $this->publicKey, $options);
    }
    /**
     * Returns the public key as a BigInteger
     *
     * @return \phpseclib3\Math\BigInteger
     */
    public function toBigInteger()
    {
        return $this->publicKey;
    }
}
