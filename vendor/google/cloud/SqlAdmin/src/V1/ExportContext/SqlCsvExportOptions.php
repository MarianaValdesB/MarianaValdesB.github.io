<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1\ExportContext;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.sql.v1.ExportContext.SqlCsvExportOptions</code>
 */
class SqlCsvExportOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * The select query used to extract the data.
     *
     * Generated from protobuf field <code>string select_query = 1;</code>
     */
    private $select_query = '';
    /**
     * Specifies the character that should appear before a data character that
     * needs to be escaped.
     *
     * Generated from protobuf field <code>string escape_character = 2;</code>
     */
    private $escape_character = '';
    /**
     * Specifies the quoting character to be used when a data value is quoted.
     *
     * Generated from protobuf field <code>string quote_character = 3;</code>
     */
    private $quote_character = '';
    /**
     * Specifies the character that separates columns within each row (line) of
     * the file.
     *
     * Generated from protobuf field <code>string fields_terminated_by = 4;</code>
     */
    private $fields_terminated_by = '';
    /**
     * This is used to separate lines. If a line does not contain all fields,
     * the rest of the columns are set to their default values.
     *
     * Generated from protobuf field <code>string lines_terminated_by = 6;</code>
     */
    private $lines_terminated_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $select_query
     *           The select query used to extract the data.
     *     @type string $escape_character
     *           Specifies the character that should appear before a data character that
     *           needs to be escaped.
     *     @type string $quote_character
     *           Specifies the quoting character to be used when a data value is quoted.
     *     @type string $fields_terminated_by
     *           Specifies the character that separates columns within each row (line) of
     *           the file.
     *     @type string $lines_terminated_by
     *           This is used to separate lines. If a line does not contain all fields,
     *           the rest of the columns are set to their default values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The select query used to extract the data.
     *
     * Generated from protobuf field <code>string select_query = 1;</code>
     * @return string
     */
    public function getSelectQuery()
    {
        return $this->select_query;
    }

    /**
     * The select query used to extract the data.
     *
     * Generated from protobuf field <code>string select_query = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSelectQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->select_query = $var;

        return $this;
    }

    /**
     * Specifies the character that should appear before a data character that
     * needs to be escaped.
     *
     * Generated from protobuf field <code>string escape_character = 2;</code>
     * @return string
     */
    public function getEscapeCharacter()
    {
        return $this->escape_character;
    }

    /**
     * Specifies the character that should appear before a data character that
     * needs to be escaped.
     *
     * Generated from protobuf field <code>string escape_character = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEscapeCharacter($var)
    {
        GPBUtil::checkString($var, True);
        $this->escape_character = $var;

        return $this;
    }

    /**
     * Specifies the quoting character to be used when a data value is quoted.
     *
     * Generated from protobuf field <code>string quote_character = 3;</code>
     * @return string
     */
    public function getQuoteCharacter()
    {
        return $this->quote_character;
    }

    /**
     * Specifies the quoting character to be used when a data value is quoted.
     *
     * Generated from protobuf field <code>string quote_character = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setQuoteCharacter($var)
    {
        GPBUtil::checkString($var, True);
        $this->quote_character = $var;

        return $this;
    }

    /**
     * Specifies the character that separates columns within each row (line) of
     * the file.
     *
     * Generated from protobuf field <code>string fields_terminated_by = 4;</code>
     * @return string
     */
    public function getFieldsTerminatedBy()
    {
        return $this->fields_terminated_by;
    }

    /**
     * Specifies the character that separates columns within each row (line) of
     * the file.
     *
     * Generated from protobuf field <code>string fields_terminated_by = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldsTerminatedBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->fields_terminated_by = $var;

        return $this;
    }

    /**
     * This is used to separate lines. If a line does not contain all fields,
     * the rest of the columns are set to their default values.
     *
     * Generated from protobuf field <code>string lines_terminated_by = 6;</code>
     * @return string
     */
    public function getLinesTerminatedBy()
    {
        return $this->lines_terminated_by;
    }

    /**
     * This is used to separate lines. If a line does not contain all fields,
     * the rest of the columns are set to their default values.
     *
     * Generated from protobuf field <code>string lines_terminated_by = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setLinesTerminatedBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->lines_terminated_by = $var;

        return $this;
    }

}

