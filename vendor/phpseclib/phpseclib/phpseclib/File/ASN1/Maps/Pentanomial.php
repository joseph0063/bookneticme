<?php

/**
 * Pentanomial
 *
 * PHP version 5
 *
 * @category  File
 * @package   ASN1
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */
namespace BookneticVendor\phpseclib3\File\ASN1\Maps;

use BookneticVendor\phpseclib3\File\ASN1;
/**
 * Pentanomial
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class Pentanomial
{
    const MAP = ['type' => ASN1::TYPE_SEQUENCE, 'children' => [
        'k1' => ['type' => ASN1::TYPE_INTEGER],
        // k1 > 0
        'k2' => ['type' => ASN1::TYPE_INTEGER],
        // k2 > k1
        'k3' => ['type' => ASN1::TYPE_INTEGER],
    ]];
}
