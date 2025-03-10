<?php

/**
 * PrivateKeyInfo
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
 * PrivateKeyInfo
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class PrivateKeyInfo
{
    const MAP = ['type' => ASN1::TYPE_SEQUENCE, 'children' => ['version' => ['type' => ASN1::TYPE_INTEGER, 'mapping' => ['v1']], 'privateKeyAlgorithm' => AlgorithmIdentifier::MAP, 'privateKey' => PrivateKey::MAP, 'attributes' => ['constant' => 0, 'optional' => \true, 'implicit' => \true] + Attributes::MAP]];
}
