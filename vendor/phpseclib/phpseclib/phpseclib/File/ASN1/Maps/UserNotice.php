<?php

/**
 * UserNotice
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
 * UserNotice
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
abstract class UserNotice
{
    const MAP = ['type' => ASN1::TYPE_SEQUENCE, 'children' => ['noticeRef' => ['optional' => \true, 'implicit' => \true] + NoticeReference::MAP, 'explicitText' => ['optional' => \true, 'implicit' => \true] + DisplayText::MAP]];
}
