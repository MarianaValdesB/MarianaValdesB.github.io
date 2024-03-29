<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/lineage/v1/lineage.proto

namespace Google\Cloud\DataCatalog\Lineage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A lineage run represents an execution of a process that creates
 * lineage events.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.lineage.v1.Run</code>
 */
class Run extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the run. Format:
     * `projects/{project}/locations/{location}/processes/{process}/runs/{run}`.
     * Can be specified or auto-assigned.
     * {run} must be not longer than 200 characters and only
     * contain characters in a set: `a-zA-Z0-9_-:.`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * Optional. A human-readable name you can set to display in a user interface.
     * Must be not longer than 1024 characters and only contain UTF-8 letters
     * or numbers, spaces or characters like `_-:&.`
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_name = '';
    /**
     * Optional. The attributes of the run. Should only be used for the purpose of
     * non-semantic management (classifying, describing or labeling the run).
     * Up to 100 attributes are allowed.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> attributes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $attributes;
    /**
     * Required. The timestamp of the start of the run.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $start_time = null;
    /**
     * Optional. The timestamp of the end of the run.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $end_time = null;
    /**
     * Required. The state of the run.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.lineage.v1.Run.State state = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The resource name of the run. Format:
     *           `projects/{project}/locations/{location}/processes/{process}/runs/{run}`.
     *           Can be specified or auto-assigned.
     *           {run} must be not longer than 200 characters and only
     *           contain characters in a set: `a-zA-Z0-9_-:.`
     *     @type string $display_name
     *           Optional. A human-readable name you can set to display in a user interface.
     *           Must be not longer than 1024 characters and only contain UTF-8 letters
     *           or numbers, spaces or characters like `_-:&.`
     *     @type array|\Google\Protobuf\Internal\MapField $attributes
     *           Optional. The attributes of the run. Should only be used for the purpose of
     *           non-semantic management (classifying, describing or labeling the run).
     *           Up to 100 attributes are allowed.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Required. The timestamp of the start of the run.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Optional. The timestamp of the end of the run.
     *     @type int $state
     *           Required. The state of the run.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\Lineage\V1\Lineage::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the run. Format:
     * `projects/{project}/locations/{location}/processes/{process}/runs/{run}`.
     * Can be specified or auto-assigned.
     * {run} must be not longer than 200 characters and only
     * contain characters in a set: `a-zA-Z0-9_-:.`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The resource name of the run. Format:
     * `projects/{project}/locations/{location}/processes/{process}/runs/{run}`.
     * Can be specified or auto-assigned.
     * {run} must be not longer than 200 characters and only
     * contain characters in a set: `a-zA-Z0-9_-:.`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Optional. A human-readable name you can set to display in a user interface.
     * Must be not longer than 1024 characters and only contain UTF-8 letters
     * or numbers, spaces or characters like `_-:&.`
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. A human-readable name you can set to display in a user interface.
     * Must be not longer than 1024 characters and only contain UTF-8 letters
     * or numbers, spaces or characters like `_-:&.`
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. The attributes of the run. Should only be used for the purpose of
     * non-semantic management (classifying, describing or labeling the run).
     * Up to 100 attributes are allowed.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> attributes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Optional. The attributes of the run. Should only be used for the purpose of
     * non-semantic management (classifying, describing or labeling the run).
     * Up to 100 attributes are allowed.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.Value> attributes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * Required. The timestamp of the start of the run.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Required. The timestamp of the start of the run.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Optional. The timestamp of the end of the run.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Optional. The timestamp of the end of the run.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Required. The state of the run.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.lineage.v1.Run.State state = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Required. The state of the run.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.lineage.v1.Run.State state = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataCatalog\Lineage\V1\Run\State::class);
        $this->state = $var;

        return $this;
    }

}

