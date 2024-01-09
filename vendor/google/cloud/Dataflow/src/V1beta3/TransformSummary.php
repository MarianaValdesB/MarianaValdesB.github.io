<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/jobs.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Description of the type, names/ids, and input/outputs for a transform.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.TransformSummary</code>
 */
class TransformSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of transform.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.KindType kind = 1;</code>
     */
    private $kind = 0;
    /**
     * SDK generated id of this transform instance.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     */
    private $id = '';
    /**
     * User provided name for this transform instance.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    private $name = '';
    /**
     * Transform-specific display data.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.DisplayData display_data = 4;</code>
     */
    private $display_data;
    /**
     * User  names for all collection outputs to this transform.
     *
     * Generated from protobuf field <code>repeated string output_collection_name = 5;</code>
     */
    private $output_collection_name;
    /**
     * User names for all collection inputs to this transform.
     *
     * Generated from protobuf field <code>repeated string input_collection_name = 6;</code>
     */
    private $input_collection_name;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kind
     *           Type of transform.
     *     @type string $id
     *           SDK generated id of this transform instance.
     *     @type string $name
     *           User provided name for this transform instance.
     *     @type array<\Google\Cloud\Dataflow\V1beta3\DisplayData>|\Google\Protobuf\Internal\RepeatedField $display_data
     *           Transform-specific display data.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $output_collection_name
     *           User  names for all collection outputs to this transform.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $input_collection_name
     *           User names for all collection inputs to this transform.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of transform.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.KindType kind = 1;</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Type of transform.
     *
     * Generated from protobuf field <code>.google.dataflow.v1beta3.KindType kind = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataflow\V1beta3\KindType::class);
        $this->kind = $var;

        return $this;
    }

    /**
     * SDK generated id of this transform instance.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * SDK generated id of this transform instance.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * User provided name for this transform instance.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * User provided name for this transform instance.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Transform-specific display data.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.DisplayData display_data = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDisplayData()
    {
        return $this->display_data;
    }

    /**
     * Transform-specific display data.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.DisplayData display_data = 4;</code>
     * @param array<\Google\Cloud\Dataflow\V1beta3\DisplayData>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDisplayData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\DisplayData::class);
        $this->display_data = $arr;

        return $this;
    }

    /**
     * User  names for all collection outputs to this transform.
     *
     * Generated from protobuf field <code>repeated string output_collection_name = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputCollectionName()
    {
        return $this->output_collection_name;
    }

    /**
     * User  names for all collection outputs to this transform.
     *
     * Generated from protobuf field <code>repeated string output_collection_name = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputCollectionName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->output_collection_name = $arr;

        return $this;
    }

    /**
     * User names for all collection inputs to this transform.
     *
     * Generated from protobuf field <code>repeated string input_collection_name = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputCollectionName()
    {
        return $this->input_collection_name;
    }

    /**
     * User names for all collection inputs to this transform.
     *
     * Generated from protobuf field <code>repeated string input_collection_name = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputCollectionName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->input_collection_name = $arr;

        return $this;
    }

}
