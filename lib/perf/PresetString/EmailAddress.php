<?php

namespace perf\PresetString;

/**
 * This class allows to handle and validate strings representing an e-mail address.
 *
 */
class EmailAddress extends PresetStringBase
{

    const REGEX = '/^[a-z\'\d]+([._-][a-z\'\d]+)*@([a-z\d]+([._-][a-z\d]+))+$/Di';

    /**
     * Validates specified e-mail address string.
     *
     * @param string $string String to validate.
     * @param {string:mixed} $parameters
     * @return bool true if specified e-mail address string is valid, false otherwise.
     */
    public static function validate($string, array $parameters = array())
    {
        return (1 === preg_match(self::REGEX, $string));
    }
}
