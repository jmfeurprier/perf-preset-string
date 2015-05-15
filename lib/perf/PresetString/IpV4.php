<?php

namespace perf\PresetString;

/**
 * This class allows to handle and validate strings representing a IPv4 address.
 *
 */
class IpV4 extends PresetStringBase
{

    /**
     * Validates specified IPv4 string.
     *
     * @param string $string String to validate.
     * @param {string:mixed} $parameters
     * @return bool true if specified IPv4 string is valid, false otherwise.
     */
    public static function validate($string, array $parameters = array())
    {
        return (long2ip(ip2long($string)) === $string);
    }
}
