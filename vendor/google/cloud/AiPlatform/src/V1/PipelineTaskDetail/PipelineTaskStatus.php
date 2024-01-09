<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/pipeline_job.proto

namespace Google\Cloud\AIPlatform\V1\PipelineTaskDetail;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single record of the task status.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.PipelineTaskDetail.PipelineTaskStatus</code>
 */
class PipelineTaskStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Update time of this status.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Output only. The state of the task.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PipelineTaskDetail.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The error that occurred during the state. May be set when
     * the state is any of the non-final state (PENDING/RUNNING/CANCELLING) or
     * FAILED state. If the state is FAILED, the error here is final and not
     * going to be retried. If the state is a non-final state, the error
     * indicates a system-error being retried.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Update time of this status.
     *     @type int $state
     *           Output only. The state of the task.
     *     @type \Google\Rpc\Status $error
     *           Output only. The error that occurred during the state. May be set when
     *           the state is any of the non-final state (PENDING/RUNNING/CANCELLING) or
     *           FAILED state. If the state is FAILED, the error here is final and not
     *           going to be retried. If the state is a non-final state, the error
     *           indicates a system-error being retried.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PipelineJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Update time of this status.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Update time of this status.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The state of the task.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PipelineTaskDetail.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of the task.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PipelineTaskDetail.State state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\PipelineTaskDetail\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The error that occurred during the state. May be set when
     * the state is any of the non-final state (PENDING/RUNNING/CANCELLING) or
     * FAILED state. If the state is FAILED, the error here is final and not
     * going to be retried. If the state is a non-final state, the error
     * indicates a system-error being retried.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Output only. The error that occurred during the state. May be set when
     * the state is any of the non-final state (PENDING/RUNNING/CANCELLING) or
     * FAILED state. If the state is FAILED, the error here is final and not
     * going to be retried. If the state is a non-final state, the error
     * indicates a system-error being retried.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

}

