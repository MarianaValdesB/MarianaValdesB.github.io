<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SetCommonInstanceMetadataOperationMetadata</code>
 */
class SetCommonInstanceMetadataOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The client operation id.
     *
     * Generated from protobuf field <code>optional string client_operation_id = 297240295;</code>
     */
    private $client_operation_id = null;
    /**
     * [Output Only] Status information per location (location name is key). Example key: zones/us-central1-a
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.SetCommonInstanceMetadataOperationMetadataPerLocationOperationInfo> per_location_operations = 408987796;</code>
     */
    private $per_location_operations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $client_operation_id
     *           [Output Only] The client operation id.
     *     @type array|\Google\Protobuf\Internal\MapField $per_location_operations
     *           [Output Only] Status information per location (location name is key). Example key: zones/us-central1-a
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The client operation id.
     *
     * Generated from protobuf field <code>optional string client_operation_id = 297240295;</code>
     * @return string
     */
    public function getClientOperationId()
    {
        return isset($this->client_operation_id) ? $this->client_operation_id : '';
    }

    public function hasClientOperationId()
    {
        return isset($this->client_operation_id);
    }

    public function clearClientOperationId()
    {
        unset($this->client_operation_id);
    }

    /**
     * [Output Only] The client operation id.
     *
     * Generated from protobuf field <code>optional string client_operation_id = 297240295;</code>
     * @param string $var
     * @return $this
     */
    public function setClientOperationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_operation_id = $var;

        return $this;
    }

    /**
     * [Output Only] Status information per location (location name is key). Example key: zones/us-central1-a
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.SetCommonInstanceMetadataOperationMetadataPerLocationOperationInfo> per_location_operations = 408987796;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPerLocationOperations()
    {
        return $this->per_location_operations;
    }

    /**
     * [Output Only] Status information per location (location name is key). Example key: zones/us-central1-a
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.SetCommonInstanceMetadataOperationMetadataPerLocationOperationInfo> per_location_operations = 408987796;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPerLocationOperations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\SetCommonInstanceMetadataOperationMetadataPerLocationOperationInfo::class);
        $this->per_location_operations = $arr;

        return $this;
    }

}

