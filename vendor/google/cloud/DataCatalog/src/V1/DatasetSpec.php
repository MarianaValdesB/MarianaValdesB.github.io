<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification that applies to a dataset. Valid only for
 * entries with the `DATASET` type.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.DatasetSpec</code>
 */
class DatasetSpec extends \Google\Protobuf\Internal\Message
{
    protected $system_spec;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataCatalog\V1\VertexDatasetSpec $vertex_dataset_spec
     *           Vertex AI Dataset specific fields
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Vertex AI Dataset specific fields
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.VertexDatasetSpec vertex_dataset_spec = 2;</code>
     * @return \Google\Cloud\DataCatalog\V1\VertexDatasetSpec|null
     */
    public function getVertexDatasetSpec()
    {
        return $this->readOneof(2);
    }

    public function hasVertexDatasetSpec()
    {
        return $this->hasOneof(2);
    }

    /**
     * Vertex AI Dataset specific fields
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.VertexDatasetSpec vertex_dataset_spec = 2;</code>
     * @param \Google\Cloud\DataCatalog\V1\VertexDatasetSpec $var
     * @return $this
     */
    public function setVertexDatasetSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\VertexDatasetSpec::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSystemSpec()
    {
        return $this->whichOneof("system_spec");
    }

}

