<?php

/**
 * PublicKeyInfo
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
 * PublicKeyInfo
 *
 * this format is not formally defined anywhere but is none-the-less the form you
 * get when you do "openssl rsa -in private.pem -outform PEM -pubout"
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class PublicKeyInfo
{
    const MAP = ['type' => ASN1::TYPE_SEQUENCE, 'children' => ['publicKeyAlgorithm' => AlgorithmIdentifier::MAP, 'publicKey' => ['type' => ASN1::TYPE_BIT_STRING]]];
}
