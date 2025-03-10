<?php

namespace BookneticVendor\Gettext\Generators;

use BookneticVendor\Gettext\Translations;
use BookneticVendor\Gettext\Utils\DictionaryTrait;
use BookneticVendor\Gettext\Utils\CsvTrait;
class CsvDictionary extends Generator implements GeneratorInterface
{
    use DictionaryTrait;
    use CsvTrait;
    public static $options = ['includeHeaders' => \false, 'delimiter' => ",", 'enclosure' => '"', 'escape_char' => "\\"];
    /**
     * {@parentDoc}.
     */
    public static function toString(Translations $translations, array $options = [])
    {
        $options += static::$options;
        $handle = \fopen('php://memory', 'w');
        foreach (static::toArray($translations, $options['includeHeaders']) as $original => $translation) {
            static::fputcsv($handle, [$original, $translation], $options);
        }
        \rewind($handle);
        $csv = \stream_get_contents($handle);
        \fclose($handle);
        return $csv;
    }
}
