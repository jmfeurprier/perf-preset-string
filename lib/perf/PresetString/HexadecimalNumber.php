<?php

namespace perf\PresetString;

/**
 * This class allows to handle and validate strings representing a hexadecimal number.
 *
 */
class HexadecimalNumber extends PresetStringBase
{

    const REGEX = '/^[\da-f]+$/Di';

    /**
     * Validates specified hexadecimal number string.
     *
     * @param string $string String to validate.
     * @param {string:mixed} $parameters
     * @return bool true if specified hexadecimal number string is valid, false otherwise.
     */
    public static function validate($string, array $parameters = array())
    {
        return (1 === preg_match(self::REGEX, $string));
    }
}
