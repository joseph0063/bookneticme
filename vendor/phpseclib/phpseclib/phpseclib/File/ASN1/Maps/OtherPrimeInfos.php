<?php

/**
 * OtherPrimeInfos
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
 * OtherPrimeInfos
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class OtherPrimeInfos
{
    // version must be multi if otherPrimeInfos present
    const MAP = ['type' => ASN1::TYPE_SEQUENCE, 'min' => 1, 'max' => -1, 'children' => OtherPrimeInfo::MAP];
}
