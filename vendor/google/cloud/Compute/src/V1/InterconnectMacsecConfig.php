<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MACsec configuration information for the Interconnect connection. Contains the generated Connectivity Association Key Name (CKN) and the key (CAK) for this Interconnect connection.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InterconnectMacsecConfig</code>
 */
class InterconnectMacsecConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * A keychain placeholder describing a set of named key objects along with their start times. A MACsec CKN/CAK is generated for each key in the key chain. Google router automatically picks the key with the most recent startTime when establishing or re-establishing a MACsec secure link.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectMacsecConfigPreSharedKey pre_shared_keys = 420308466;</code>
     */
    private $pre_shared_keys;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Compute\V1\InterconnectMacsecConfigPreSharedKey>|\Google\Protobuf\Internal\RepeatedField $pre_shared_keys
     *           A keychain placeholder describing a set of named key objects along with their start times. A MACsec CKN/CAK is generated for each key in the key chain. Google router automatically picks the key with the most recent startTime when establishing or re-establishing a MACsec secure link.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A keychain placeholder describing a set of named key objects along with their start times. A MACsec CKN/CAK is generated for each key in the key chain. Google router automatically picks the key with the most recent startTime when establishing or re-establishing a MACsec secure link.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectMacsecConfigPreSharedKey pre_shared_keys = 420308466;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPreSharedKeys()
    {
        return $this->pre_shared_keys;
    }

    /**
     * A keychain placeholder describing a set of named key objects along with their start times. A MACsec CKN/CAK is generated for each key in the key chain. Google router automatically picks the key with the most recent startTime when establishing or re-establishing a MACsec secure link.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectMacsecConfigPreSharedKey pre_shared_keys = 420308466;</code>
     * @param array<\Google\Cloud\Compute\V1\InterconnectMacsecConfigPreSharedKey>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPreSharedKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\InterconnectMacsecConfigPreSharedKey::class);
        $this->pre_shared_keys = $arr;

        return $this;
    }

}

