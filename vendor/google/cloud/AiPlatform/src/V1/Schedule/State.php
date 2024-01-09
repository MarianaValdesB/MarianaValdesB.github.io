<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/schedule.proto

namespace Google\Cloud\AIPlatform\V1\Schedule;

use UnexpectedValueException;

/**
 * Possible state of the schedule.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.Schedule.State</code>
 */
class State
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The Schedule is active. Runs are being scheduled on the user-specified
     * timespec.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * The schedule is paused. No new runs will be created until the schedule
     * is resumed. Already started runs will be allowed to complete.
     *
     * Generated from protobuf enum <code>PAUSED = 2;</code>
     */
    const PAUSED = 2;
    /**
     * The Schedule is completed. No new runs will be scheduled. Already started
     * runs will be allowed to complete. Schedules in completed state cannot be
     * paused or resumed.
     *
     * Generated from protobuf enum <code>COMPLETED = 3;</code>
     */
    const COMPLETED = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::PAUSED => 'PAUSED',
        self::COMPLETED => 'COMPLETED',
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

