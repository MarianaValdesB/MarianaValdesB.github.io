<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/experiment.proto

namespace Google\Cloud\Dialogflow\Cx\V3\Experiment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Definition of the experiment.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.Experiment.Definition</code>
 */
class Definition extends \Google\Protobuf\Internal\Message
{
    /**
     * The condition defines which subset of sessions are selected for
     * this experiment. If not specified, all sessions are eligible. E.g.
     * "query_input.language_code=en" See the [conditions
     * reference](https://cloud.google.com/dialogflow/cx/docs/reference/condition).
     *
     * Generated from protobuf field <code>string condition = 1;</code>
     */
    protected $condition = '';
    protected $variants;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $condition
     *           The condition defines which subset of sessions are selected for
     *           this experiment. If not specified, all sessions are eligible. E.g.
     *           "query_input.language_code=en" See the [conditions
     *           reference](https://cloud.google.com/dialogflow/cx/docs/reference/condition).
     *     @type \Google\Cloud\Dialogflow\Cx\V3\VersionVariants $version_variants
     *           The flow versions as the variants of this experiment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Experiment::initOnce();
        parent::__construct($data);
    }

    /**
     * The condition defines which subset of sessions are selected for
     * this experiment. If not specified, all sessions are eligible. E.g.
     * "query_input.language_code=en" See the [conditions
     * reference](https://cloud.google.com/dialogflow/cx/docs/reference/condition).
     *
     * Generated from protobuf field <code>string condition = 1;</code>
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * The condition defines which subset of sessions are selected for
     * this experiment. If not specified, all sessions are eligible. E.g.
     * "query_input.language_code=en" See the [conditions
     * reference](https://cloud.google.com/dialogflow/cx/docs/reference/condition).
     *
     * Generated from protobuf field <code>string condition = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkString($var, True);
        $this->condition = $var;

        return $this;
    }

    /**
     * The flow versions as the variants of this experiment.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.VersionVariants version_variants = 2;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\VersionVariants|null
     */
    public function getVersionVariants()
    {
        return $this->readOneof(2);
    }

    public function hasVersionVariants()
    {
        return $this->hasOneof(2);
    }

    /**
     * The flow versions as the variants of this experiment.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.VersionVariants version_variants = 2;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\VersionVariants $var
     * @return $this
     */
    public function setVersionVariants($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\VersionVariants::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getVariants()
    {
        return $this->whichOneof("variants");
    }

}


