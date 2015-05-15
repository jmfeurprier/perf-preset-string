<?php

namespace perf\PresetString;

/**
 * This class allows to handle and validate strings representing a SHA1 hash.
 *
 */
class Sha1Hash extends PresetStringBase
{

    const REGEX = '/^[0-9a-fA-F]{40}$/D';

    /**
     * Validates specified SHA1 hash string.
     *
     * @param string $string String to validate.
     * @param {string:mixed} $parameters
     * @return bool true if specified SHA1 hash string is valid, false otherwise.
     */
    public static function validate($string, array $parameters = array())
    {
        return (1 === preg_match(self::REGEX, $string));
    }
}
