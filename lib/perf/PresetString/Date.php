<?php

namespace perf\PresetString;

/**
 * This class allows to handle and validate strings representing a standardized date (YYYY-MM-DD).
 *
 */
class Date extends PresetStringBase
{

    const REGEX = '/^(\d+)-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/D';

    /**
     * Validates specified date string (YYYY-MM-DD).
     *
     * @param string $string String to validate.
     * @param {string:mixed} $parameters
     * @return bool true if specified date string is valid, false otherwise.
     */
    public static function validate($string, array $parameters = array())
    {
        $matches = null;

        return ((1 === preg_match(self::REGEX, $string, $matches)) &&
                checkdate($matches[2], $matches[3], $matches[1]));
    }
}
