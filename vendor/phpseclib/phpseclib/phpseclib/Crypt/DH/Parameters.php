<?php

/**
 * DH Parameters
 *
 * @category  Crypt
 * @package   DH
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */
namespace BookneticVendor\phpseclib3\Crypt\DH;

use BookneticVendor\phpseclib3\Crypt\DH;
/**
 * DH Parameters
 *
 * @package DH
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
class Parameters extends DH
{
    /**
     * Returns the parameters
     *
     * @param string $type
     * @param array $options optional
     * @return string
     */
    public function toString($type = 'PKCS1', array $options = [])
    {
        $type = self::validatePlugin('Keys', 'PKCS1', 'saveParameters');
        return $type::saveParameters($this->prime, $this->base, $options);
    }
}
