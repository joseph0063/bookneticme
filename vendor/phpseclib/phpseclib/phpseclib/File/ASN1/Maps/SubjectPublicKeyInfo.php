<?php

/**
 * SubjectPublicKeyInfo
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
 * SubjectPublicKeyInfo
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class SubjectPublicKeyInfo
{
    const MAP = ['type' => ASN1::TYPE_SEQUENCE, 'children' => ['algorithm' => AlgorithmIdentifier::MAP, 'subjectPublicKey' => ['type' => ASN1::TYPE_BIT_STRING]]];
}
