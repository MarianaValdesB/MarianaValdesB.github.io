<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Source message describes a specific vm migration Source resource. It contains
 * the source environment information.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.Source</code>
 */
class Source extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The Source name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. The create time timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The update time timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * The labels of the source.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * User-provided description of the source.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     */
    private $description = '';
    protected $source_details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VMMigration\V1\VmwareSourceDetails $vmware
     *           Vmware type source details.
     *     @type \Google\Cloud\VMMigration\V1\AwsSourceDetails $aws
     *           AWS type source details.
     *     @type string $name
     *           Output only. The Source name.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The create time timestamp.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The update time timestamp.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels of the source.
     *     @type string $description
     *           User-provided description of the source.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * Vmware type source details.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.VmwareSourceDetails vmware = 10;</code>
     * @return \Google\Cloud\VMMigration\V1\VmwareSourceDetails|null
     */
    public function getVmware()
    {
        return $this->readOneof(10);
    }

    public function hasVmware()
    {
        return $this->hasOneof(10);
    }

    /**
     * Vmware type source details.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.VmwareSourceDetails vmware = 10;</code>
     * @param \Google\Cloud\VMMigration\V1\VmwareSourceDetails $var
     * @return $this
     */
    public function setVmware($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\VmwareSourceDetails::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * AWS type source details.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.AwsSourceDetails aws = 12;</code>
     * @return \Google\Cloud\VMMigration\V1\AwsSourceDetails|null
     */
    public function getAws()
    {
        return $this->readOneof(12);
    }

    public function hasAws()
    {
        return $this->hasOneof(12);
    }

    /**
     * AWS type source details.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.AwsSourceDetails aws = 12;</code>
     * @param \Google\Cloud\VMMigration\V1\AwsSourceDetails $var
     * @return $this
     */
    public function setAws($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\AwsSourceDetails::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Output only. The Source name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The Source name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The create time timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The create time timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The update time timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The update time timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The labels of the source.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels of the source.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * User-provided description of the source.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * User-provided description of the source.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSourceDetails()
    {
        return $this->whichOneof("source_details");
    }

}
