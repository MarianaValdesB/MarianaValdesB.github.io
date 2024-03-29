<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/deployment_resource_pool.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A description of resources that can be shared by multiple DeployedModels,
 * whose underlying specification consists of a DedicatedResources.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DeploymentResourcePool</code>
 */
class DeploymentResourcePool extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the DeploymentResourcePool.
     * Format:
     * `projects/{project}/locations/{location}/deploymentResourcePools/{deployment_resource_pool}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $name = '';
    /**
     * Required. The underlying DedicatedResources that the DeploymentResourcePool
     * uses.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DedicatedResources dedicated_resources = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $dedicated_resources = null;
    /**
     * Output only. Timestamp when this DeploymentResourcePool was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The resource name of the DeploymentResourcePool.
     *           Format:
     *           `projects/{project}/locations/{location}/deploymentResourcePools/{deployment_resource_pool}`
     *     @type \Google\Cloud\AIPlatform\V1\DedicatedResources $dedicated_resources
     *           Required. The underlying DedicatedResources that the DeploymentResourcePool
     *           uses.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this DeploymentResourcePool was created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DeploymentResourcePool::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the DeploymentResourcePool.
     * Format:
     * `projects/{project}/locations/{location}/deploymentResourcePools/{deployment_resource_pool}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The resource name of the DeploymentResourcePool.
     * Format:
     * `projects/{project}/locations/{location}/deploymentResourcePools/{deployment_resource_pool}`
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
     * Required. The underlying DedicatedResources that the DeploymentResourcePool
     * uses.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DedicatedResources dedicated_resources = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\DedicatedResources|null
     */
    public function getDedicatedResources()
    {
        return $this->dedicated_resources;
    }

    public function hasDedicatedResources()
    {
        return isset($this->dedicated_resources);
    }

    public function clearDedicatedResources()
    {
        unset($this->dedicated_resources);
    }

    /**
     * Required. The underlying DedicatedResources that the DeploymentResourcePool
     * uses.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DedicatedResources dedicated_resources = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\DedicatedResources $var
     * @return $this
     */
    public function setDedicatedResources($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\DedicatedResources::class);
        $this->dedicated_resources = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this DeploymentResourcePool was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this DeploymentResourcePool was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

}

