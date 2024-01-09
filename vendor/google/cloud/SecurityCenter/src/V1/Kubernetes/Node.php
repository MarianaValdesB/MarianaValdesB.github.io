<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/kubernetes.proto

namespace Google\Cloud\SecurityCenter\V1\Kubernetes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Kubernetes nodes associated with the finding.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.Kubernetes.Node</code>
 */
class Node extends \Google\Protobuf\Internal\Message
{
    /**
     * [Full resource name](https://google.aip.dev/122#full-resource-names) of
     * the Compute Engine VM running the cluster node.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           [Full resource name](https://google.aip.dev/122#full-resource-names) of
     *           the Compute Engine VM running the cluster node.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Kubernetes::initOnce();
        parent::__construct($data);
    }

    /**
     * [Full resource name](https://google.aip.dev/122#full-resource-names) of
     * the Compute Engine VM running the cluster node.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * [Full resource name](https://google.aip.dev/122#full-resource-names) of
     * the Compute Engine VM running the cluster node.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Node::class, \Google\Cloud\SecurityCenter\V1\Kubernetes_Node::class);
