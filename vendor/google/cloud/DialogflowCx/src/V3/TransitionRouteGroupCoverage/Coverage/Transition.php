<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroupCoverage\Coverage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A transition coverage in a transition route group.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.TransitionRouteGroupCoverage.Coverage.Transition</code>
 */
class Transition extends \Google\Protobuf\Internal\Message
{
    /**
     * Intent route or condition route.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionRoute transition_route = 1;</code>
     */
    protected $transition_route = null;
    /**
     * Whether the transition route is covered by at least one of the
     * agent's test cases.
     *
     * Generated from protobuf field <code>bool covered = 2;</code>
     */
    protected $covered = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\Cx\V3\TransitionRoute $transition_route
     *           Intent route or condition route.
     *     @type bool $covered
     *           Whether the transition route is covered by at least one of the
     *           agent's test cases.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        parent::__construct($data);
    }

    /**
     * Intent route or condition route.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionRoute transition_route = 1;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\TransitionRoute|null
     */
    public function getTransitionRoute()
    {
        return $this->transition_route;
    }

    public function hasTransitionRoute()
    {
        return isset($this->transition_route);
    }

    public function clearTransitionRoute()
    {
        unset($this->transition_route);
    }

    /**
     * Intent route or condition route.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionRoute transition_route = 1;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\TransitionRoute $var
     * @return $this
     */
    public function setTransitionRoute($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\TransitionRoute::class);
        $this->transition_route = $var;

        return $this;
    }

    /**
     * Whether the transition route is covered by at least one of the
     * agent's test cases.
     *
     * Generated from protobuf field <code>bool covered = 2;</code>
     * @return bool
     */
    public function getCovered()
    {
        return $this->covered;
    }

    /**
     * Whether the transition route is covered by at least one of the
     * agent's test cases.
     *
     * Generated from protobuf field <code>bool covered = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setCovered($var)
    {
        GPBUtil::checkBool($var);
        $this->covered = $var;

        return $this;
    }

}


