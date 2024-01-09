<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/response_message.proto

namespace Google\Cloud\Dialogflow\Cx\V3\ResponseMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents info card response. If the response contains generative
 * knowledge prediction, Dialogflow will return a payload with Infobot
 * Messenger compatible info card.
 * Otherwise, the info card response is skipped.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ResponseMessage.KnowledgeInfoCard</code>
 */
class KnowledgeInfoCard extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\ResponseMessage::initOnce();
        parent::__construct($data);
    }

}

