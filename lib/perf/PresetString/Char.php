<?php

namespace perf\PresetString;

/**
 * This class allows to handle and validate strings representing a single character ("char").
 *
 */
class Char extends PresetStringBase
{

    const ENCODING_DEFAULT = 'UTF-8';

    /**
     * Constructor. Will throw an exception if provided string is not valid.
     *
     * @param string|object $string String to be used as a candidate to build a perf String object.
     * @param string $encoding
     * @return void
     * @throws \InvalidArgumentException
     */
    public function __construct($string, $encoding = self::ENCODING_DEFAULT)
    {
        $parameters = array(
            'encoding' => $encoding,
        );

        parent::__construct($string, $parameters);
    }

    /**
     * Validates specified char string.
     *
     * @param string $string String to validate.
     * @param {string:mixed} $parameters
     * @return bool true if specified char string is valid, false otherwise.
     */
    public static function validate($string, array $parameters = array())
    {
        return (1 === mb_strlen($string, $parameters['encoding']));
    }
}
