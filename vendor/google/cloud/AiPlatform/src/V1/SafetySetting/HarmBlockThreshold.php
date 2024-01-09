<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/content.proto

namespace Google\Cloud\AIPlatform\V1\SafetySetting;

use UnexpectedValueException;

/**
 * Probability based thresholds levels for blocking.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.SafetySetting.HarmBlockThreshold</code>
 */
class HarmBlockThreshold
{
    /**
     * Unspecified harm block threshold.
     *
     * Generated from protobuf enum <code>HARM_BLOCK_THRESHOLD_UNSPECIFIED = 0;</code>
     */
    const HARM_BLOCK_THRESHOLD_UNSPECIFIED = 0;
    /**
     * Block low threshold and above (i.e. block more).
     *
     * Generated from protobuf enum <code>BLOCK_LOW_AND_ABOVE = 1;</code>
     */
    const BLOCK_LOW_AND_ABOVE = 1;
    /**
     * Block medium threshold and above.
     *
     * Generated from protobuf enum <code>BLOCK_MEDIUM_AND_ABOVE = 2;</code>
     */
    const BLOCK_MEDIUM_AND_ABOVE = 2;
    /**
     * Block only high threshold (i.e. block less).
     *
     * Generated from protobuf enum <code>BLOCK_ONLY_HIGH = 3;</code>
     */
    const BLOCK_ONLY_HIGH = 3;
    /**
     * Block none.
     *
     * Generated from protobuf enum <code>BLOCK_NONE = 4;</code>
     */
    const BLOCK_NONE = 4;

    private static $valueToName = [
        self::HARM_BLOCK_THRESHOLD_UNSPECIFIED => 'HARM_BLOCK_THRESHOLD_UNSPECIFIED',
        self::BLOCK_LOW_AND_ABOVE => 'BLOCK_LOW_AND_ABOVE',
        self::BLOCK_MEDIUM_AND_ABOVE => 'BLOCK_MEDIUM_AND_ABOVE',
        self::BLOCK_ONLY_HIGH => 'BLOCK_ONLY_HIGH',
        self::BLOCK_NONE => 'BLOCK_NONE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

