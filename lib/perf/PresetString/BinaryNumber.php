<?php

namespace perf\PresetString;

/**
 * This class allows to handle and validate strings representing a binary number.
 *
 */
class BinaryNumber extends PresetStringBase
{

    const REGEX = '/^[01]+$/D';

    /**
     * Validates specified binary number string.
     *
     * @param string $string String to validate.
     * @param {string:mixed} $parameters
     * @return bool true if specified binary number string is valid, false otherwise.
     */
    public static function validate($string, array $parameters = array())
    {
        return (1 === preg_match(self::REGEX, $string));
    }
}
