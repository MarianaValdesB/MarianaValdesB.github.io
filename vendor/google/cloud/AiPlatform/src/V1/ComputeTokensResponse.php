<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/llm_utility_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ComputeTokens RPC call.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ComputeTokensResponse</code>
 */
class ComputeTokensResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Lists of tokens info from the input. A ComputeTokensRequest could have
     * multiple instances with a prompt in each instance. We also need to return
     * lists of tokens info for the request with multiple instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TokensInfo tokens_info = 1;</code>
     */
    private $tokens_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\TokensInfo>|\Google\Protobuf\Internal\RepeatedField $tokens_info
     *           Lists of tokens info from the input. A ComputeTokensRequest could have
     *           multiple instances with a prompt in each instance. We also need to return
     *           lists of tokens info for the request with multiple instances.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\LlmUtilityService::initOnce();
        parent::__construct($data);
    }

    /**
     * Lists of tokens info from the input. A ComputeTokensRequest could have
     * multiple instances with a prompt in each instance. We also need to return
     * lists of tokens info for the request with multiple instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TokensInfo tokens_info = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTokensInfo()
    {
        return $this->tokens_info;
    }

    /**
     * Lists of tokens info from the input. A ComputeTokensRequest could have
     * multiple instances with a prompt in each instance. We also need to return
     * lists of tokens info for the request with multiple instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.TokensInfo tokens_info = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\TokensInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTokensInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\TokensInfo::class);
        $this->tokens_info = $arr;

        return $this;
    }

}
