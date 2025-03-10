<?php

/**
 * netscape_cert_type
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
 * netscape_cert_type
 *
 * mapping is from <http://www.mozilla.org/projects/security/pki/nss/tech-notes/tn3.html>
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class netscape_cert_type
{
    const MAP = ['type' => ASN1::TYPE_BIT_STRING, 'mapping' => ['SSLClient', 'SSLServer', 'Email', 'ObjectSigning', 'Reserved', 'SSLCA', 'EmailCA', 'ObjectSigningCA']];
}
