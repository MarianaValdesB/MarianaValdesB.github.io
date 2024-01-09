<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1/oslogin.proto

namespace Google\Cloud\OsLogin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for deleting a POSIX account entry.
 *
 * Generated from protobuf message <code>google.cloud.oslogin.v1.DeletePosixAccountRequest</code>
 */
class DeletePosixAccountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A reference to the POSIX account to update. POSIX accounts are
     * identified by the project ID they are associated with. A reference to the
     * POSIX account is in format `users/{user}/projects/{project}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. A reference to the POSIX account to update. POSIX accounts are
     *                     identified by the project ID they are associated with. A reference to the
     *                     POSIX account is in format `users/{user}/projects/{project}`. Please see
     *                     {@see OsLoginServiceClient::posixAccountName()} for help formatting this field.
     *
     * @return \Google\Cloud\OsLogin\V1\DeletePosixAccountRequest
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
     *           Required. A reference to the POSIX account to update. POSIX accounts are
     *           identified by the project ID they are associated with. A reference to the
     *           POSIX account is in format `users/{user}/projects/{project}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oslogin\V1\Oslogin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A reference to the POSIX account to update. POSIX accounts are
     * identified by the project ID they are associated with. A reference to the
     * POSIX account is in format `users/{user}/projects/{project}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. A reference to the POSIX account to update. POSIX accounts are
     * identified by the project ID they are associated with. A reference to the
     * POSIX account is in format `users/{user}/projects/{project}`.
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
