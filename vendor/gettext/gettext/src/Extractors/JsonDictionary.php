<?php

namespace BookneticVendor\Gettext\Extractors;

use BookneticVendor\Gettext\Translations;
use BookneticVendor\Gettext\Utils\DictionaryTrait;
/**
 * Class to get gettext strings from plain json.
 */
class JsonDictionary extends Extractor implements ExtractorInterface
{
    use DictionaryTrait;
    /**
     * {@inheritdoc}
     */
    public static function fromString($string, Translations $translations, array $options = [])
    {
        $messages = \json_decode($string, \true);
        if (\is_array($messages)) {
            static::fromArray($messages, $translations);
        }
    }
}
