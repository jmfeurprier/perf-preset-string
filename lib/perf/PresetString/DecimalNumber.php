<?php

namespace perf\PresetString;

/**
 * This class allows to handle and validate strings representing a decimal number.
 *
 */
class DecimalNumber extends PresetStringBase
{

    const REGEX = '/^[0-9]+$/D';

    /**
     * Validates specified decimal number string.
     *
     * @param string $string String to validate.
     * @param {string:mixed} $parameters
     * @return bool true if specified decimal number string is valid, false otherwise.
     */
    public static function validate($string, array $parameters = array())
    {
        return (1 === preg_match(self::REGEX, $string));
    }
}
