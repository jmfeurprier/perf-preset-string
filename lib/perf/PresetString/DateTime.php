<?php

namespace perf\PresetString;

/**
 * This class allows to handle and validate strings representing standardized date and time (YYYY-MM-DD HH:MM:SS).
 *
 */
class DateTime extends PresetStringBase
{

    const REGEX = '/^(\d+)-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]) ([01][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/D';

    /**
     * Validates specified date-time string (YYYY-MM-DD HH:MM:SS).
     *
     * @param string $string String to validate.
     * @param {string:mixed} $parameters
     * @return bool true if specified date-time string is valid, false otherwise.
     */
    public static function validate($string, array $parameters = array())
    {
        $matches = null;

        return ((1 === preg_match(self::REGEX, $string, $matches)) &&
                checkdate($matches[2], $matches[3], $matches[1]));
    }
}
