<?php

namespace perf\PresetString;

/**
 * This class allows to handle and validate strings representing a standardized time (HH:MM:SS).
 *
 */
class Time extends PresetStringBase
{

    const REGEX = '/^([01]\d|2[0-3]):([0-5]\d):([0-5]\d)$/D';

    /**
     * Validates specified time string (HH:MM:SS).
     *
     * @param string $string
     * @param {string:mixed} $parameters
     * @return bool true if specified time string is valid, false otherwise.
     */
    public static function validate($string, array $parameters = array())
    {
        return (1 === preg_match(self::REGEX, $string));
    }
}
