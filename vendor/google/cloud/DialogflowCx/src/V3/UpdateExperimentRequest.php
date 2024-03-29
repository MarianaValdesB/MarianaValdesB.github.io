<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/experiment.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Experiments.UpdateExperiment][google.cloud.dialogflow.cx.v3.Experiments.UpdateExperiment].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.UpdateExperimentRequest</code>
 */
class UpdateExperimentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The experiment to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Experiment experiment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $experiment = null;
    /**
     * Required. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Experiment $experiment
     *           Required. The experiment to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The mask to control which fields get updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Experiment::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The experiment to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Experiment experiment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\Experiment|null
     */
    public function getExperiment()
    {
        return $this->experiment;
    }

    public function hasExperiment()
    {
        return isset($this->experiment);
    }

    public function clearExperiment()
    {
        unset($this->experiment);
    }

    /**
     * Required. The experiment to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Experiment experiment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Experiment $var
     * @return $this
     */
    public function setExperiment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\Experiment::class);
        $this->experiment = $var;

        return $this;
    }

    /**
     * Required. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

