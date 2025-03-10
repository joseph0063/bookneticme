<?php

/**
 * RC2CBCParameter
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
 * RC2CBCParameter
 *
 * from https://tools.ietf.org/html/rfc2898#appendix-A.3
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class RC2CBCParameter
{
    const MAP = ['type' => ASN1::TYPE_SEQUENCE, 'children' => ['rc2ParametersVersion' => ['type' => ASN1::TYPE_INTEGER, 'optional' => \true], 'iv' => ['type' => ASN1::TYPE_OCTET_STRING]]];
}
