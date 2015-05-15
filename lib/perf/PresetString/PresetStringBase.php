<?php

namespace perf\PresetString;

/**
 * This abstract class and its children allow to handle and validate strings with a pre-defined format
 *   (like e-mail address, hexadecimal number, etc).
 *
 */
abstract class PresetStringBase
{

    /**
     * String representation of the current instance.
     *
     * @var string
     */
    private $string;

    /**
     * Constructor. Will throw an exception if provided string is not valid.
     *
     * @param string|object $string String to be used as a candidate to build a perf String object.
     * @param {string:mixed} $parameters
     * @return void
     * @throws \InvalidArgumentException
     */
    public function __construct($string, array $parameters = array())
    {
        $string = $this->castAsString($string);

        if (!static::validate($string, $parameters)) {
            throw new \InvalidArgumentException('Invalid string format.');
        }

        $this->string = $string;
    }

    /**
     *
     *
     * @param string|object $string
     * @return string
     * @throws \InvalidArgumentException
     */
    private function castAsString($string)
    {
        if (is_string($string)) {
            return $string;
        }

        if (is_object($string)) {
            if (method_exists($string, '__toString')) {
                return (string) $string;
            }
        }

        throw new \InvalidArgumentException('Invalid string type.');
    }

    /**
     * This is where the string format-specific validation has to be done.
     * This method must be overridden in every subclass.
     *
     * @param string $string
     * @param {string:mixed} $parameters
     * @return bool true if provided string matches the expected format.
     */
    public static function validate($string, array $parameters = array())
    {
        throw new \RuntimeException('Not implemented.');
    }

    /**
     * PHP magic method allowing to convert the current instance into a string.
     *
     * @return string String representation of the current instance.
     */
    public function __toString()
    {
        return $this->string;
    }
}
