<?php

namespace perf\PresetString;

/**
 * This class allows to handle and validate strings representing an octal number.
 *
 */
class OctalNumber extends PresetStringBase
{

    const REGEX = '/^[0-7]+$/D';

    /**
     * Validates specified octal number string.
     *
     * @param string $string String to validate.
     * @param {string:mixed} $parameters
     * @return bool true if specified octal number string is valid, false otherwise.
     */
    public static function validate($string)
    {
        return (1 === preg_match(self::REGEX, $string));
    }
}
