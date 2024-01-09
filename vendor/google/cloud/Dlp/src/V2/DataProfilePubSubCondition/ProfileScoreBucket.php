<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\DataProfilePubSubCondition;

use UnexpectedValueException;

/**
 * Various score levels for resources.
 *
 * Protobuf type <code>google.privacy.dlp.v2.DataProfilePubSubCondition.ProfileScoreBucket</code>
 */
class ProfileScoreBucket
{
    /**
     * Unused.
     *
     * Generated from protobuf enum <code>PROFILE_SCORE_BUCKET_UNSPECIFIED = 0;</code>
     */
    const PROFILE_SCORE_BUCKET_UNSPECIFIED = 0;
    /**
     * High risk/sensitivity detected.
     *
     * Generated from protobuf enum <code>HIGH = 1;</code>
     */
    const HIGH = 1;
    /**
     * Medium or high risk/sensitivity detected.
     *
     * Generated from protobuf enum <code>MEDIUM_OR_HIGH = 2;</code>
     */
    const MEDIUM_OR_HIGH = 2;

    private static $valueToName = [
        self::PROFILE_SCORE_BUCKET_UNSPECIFIED => 'PROFILE_SCORE_BUCKET_UNSPECIFIED',
        self::HIGH => 'HIGH',
        self::MEDIUM_OR_HIGH => 'MEDIUM_OR_HIGH',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProfileScoreBucket::class, \Google\Cloud\Dlp\V2\DataProfilePubSubCondition_ProfileScoreBucket::class);
