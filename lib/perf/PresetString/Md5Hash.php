<?php

namespace perf\PresetString;

/**
 * This class allows to handle and validate strings representing a MD5 hash.
 *
 */
class Md5Hash extends PresetStringBase
{

    const REGEX = '/^[\da-fA-F]{32}$/D';

    /**
     * Validates specified MD5 hash string.
     *
     * @param string $string String to validate.
     * @param {string:mixed} $parameters
     * @return bool true if specified MD5 hash string is valid, false otherwise.
     */
    public static function validate($string, array $parameters = array())
    {
        return (1 === preg_match(self::REGEX, $string));
    }
}
