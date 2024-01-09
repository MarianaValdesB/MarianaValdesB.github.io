<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [FeaturestoreService.GetFeature][google.cloud.aiplatform.v1.FeaturestoreService.GetFeature].
 * Request message for
 * [FeatureRegistryService.GetFeature][google.cloud.aiplatform.v1.FeatureRegistryService.GetFeature].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GetFeatureRequest</code>
 */
class GetFeatureRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Feature resource.
     * Format for entity_type as parent:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     * Format for feature_group as parent:
     * `projects/{project}/locations/{location}/featureGroups/{feature_group}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The name of the Feature resource.
     *                     Format for entity_type as parent:
     *                     `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *                     Format for feature_group as parent:
     *                     `projects/{project}/locations/{location}/featureGroups/{feature_group}`
     *                     Please see {@see FeaturestoreServiceClient::featureName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\GetFeatureRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the Feature resource.
     *           Format for entity_type as parent:
     *           `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     *           Format for feature_group as parent:
     *           `projects/{project}/locations/{location}/featureGroups/{feature_group}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Feature resource.
     * Format for entity_type as parent:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     * Format for feature_group as parent:
     * `projects/{project}/locations/{location}/featureGroups/{feature_group}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the Feature resource.
     * Format for entity_type as parent:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
     * Format for feature_group as parent:
     * `projects/{project}/locations/{location}/featureGroups/{feature_group}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
