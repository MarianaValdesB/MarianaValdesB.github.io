<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The description of differences between original and replayed agent output.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.TestRunDifference</code>
 */
class TestRunDifference extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of diff.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TestRunDifference.DiffType type = 1;</code>
     */
    protected $type = 0;
    /**
     * A human readable description of the diff, showing the actual output vs
     * expected output.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           The type of diff.
     *     @type string $description
     *           A human readable description of the diff, showing the actual output vs
     *           expected output.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of diff.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TestRunDifference.DiffType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of diff.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TestRunDifference.DiffType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\Cx\V3\TestRunDifference\DiffType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * A human readable description of the diff, showing the actual output vs
     * expected output.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A human readable description of the diff, showing the actual output vs
     * expected output.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

