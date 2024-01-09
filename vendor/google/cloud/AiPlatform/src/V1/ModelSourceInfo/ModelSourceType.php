<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model.proto

namespace Google\Cloud\AIPlatform\V1\ModelSourceInfo;

use UnexpectedValueException;

/**
 * Source of the model.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.ModelSourceInfo.ModelSourceType</code>
 */
class ModelSourceType
{
    /**
     * Should not be used.
     *
     * Generated from protobuf enum <code>MODEL_SOURCE_TYPE_UNSPECIFIED = 0;</code>
     */
    const MODEL_SOURCE_TYPE_UNSPECIFIED = 0;
    /**
     * The Model is uploaded by automl training pipeline.
     *
     * Generated from protobuf enum <code>AUTOML = 1;</code>
     */
    const AUTOML = 1;
    /**
     * The Model is uploaded by user or custom training pipeline.
     *
     * Generated from protobuf enum <code>CUSTOM = 2;</code>
     */
    const CUSTOM = 2;
    /**
     * The Model is registered and sync'ed from BigQuery ML.
     *
     * Generated from protobuf enum <code>BQML = 3;</code>
     */
    const BQML = 3;
    /**
     * The Model is saved or tuned from Model Garden.
     *
     * Generated from protobuf enum <code>MODEL_GARDEN = 4;</code>
     */
    const MODEL_GARDEN = 4;
    /**
     * The Model is saved or tuned from Genie.
     *
     * Generated from protobuf enum <code>GENIE = 5;</code>
     */
    const GENIE = 5;
    /**
     * The Model is uploaded by text embedding finetuning pipeline.
     *
     * Generated from protobuf enum <code>CUSTOM_TEXT_EMBEDDING = 6;</code>
     */
    const CUSTOM_TEXT_EMBEDDING = 6;

    private static $valueToName = [
        self::MODEL_SOURCE_TYPE_UNSPECIFIED => 'MODEL_SOURCE_TYPE_UNSPECIFIED',
        self::AUTOML => 'AUTOML',
        self::CUSTOM => 'CUSTOM',
        self::BQML => 'BQML',
        self::MODEL_GARDEN => 'MODEL_GARDEN',
        self::GENIE => 'GENIE',
        self::CUSTOM_TEXT_EMBEDDING => 'CUSTOM_TEXT_EMBEDDING',
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

