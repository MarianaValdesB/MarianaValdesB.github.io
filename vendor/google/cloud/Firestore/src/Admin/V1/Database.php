<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/database.proto

namespace Google\Cloud\Firestore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Cloud Firestore Database.
 * Currently only one database is allowed per cloud project; this database
 * must have a `database_id` of '(default)'.
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.Database</code>
 */
class Database extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the Database.
     * Format: `projects/{project}/databases/{database}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The location of the database. Available locations are listed at
     * https://cloud.google.com/firestore/docs/locations.
     *
     * Generated from protobuf field <code>string location_id = 9;</code>
     */
    private $location_id = '';
    /**
     * The type of the database.
     * See https://cloud.google.com/datastore/docs/firestore-or-datastore for
     * information about how to choose.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Database.DatabaseType type = 10;</code>
     */
    private $type = 0;
    /**
     * The concurrency control mode to use for this database.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Database.ConcurrencyMode concurrency_mode = 15;</code>
     */
    private $concurrency_mode = 0;
    /**
     * Output only. The period during which past versions of data are retained in
     * the database.
     * Any [read][google.firestore.v1.GetDocumentRequest.read_time]
     * or [query][google.firestore.v1.ListDocumentsRequest.read_time] can specify
     * a `read_time` within this window, and will read the state of the database
     * at that time.
     * If the PITR feature is enabled, the retention period is 7 days. Otherwise,
     * the retention period is 1 hour.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration version_retention_period = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $version_retention_period = null;
    /**
     * Output only. The earliest timestamp at which older versions of the data can
     * be read from the database. See [version_retention_period] above; this field
     * is populated with `now - version_retention_period`.
     * This value is continuously updated, and becomes stale the moment it is
     * queried. If you are using this value to recover data, make sure to account
     * for the time from the moment when the value is queried to the moment when
     * you initiate the recovery.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_version_time = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $earliest_version_time = null;
    /**
     * Whether to enable the PITR feature on this database.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Database.PointInTimeRecoveryEnablement point_in_time_recovery_enablement = 21;</code>
     */
    private $point_in_time_recovery_enablement = 0;
    /**
     * The App Engine integration mode to use for this database.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Database.AppEngineIntegrationMode app_engine_integration_mode = 19;</code>
     */
    private $app_engine_integration_mode = 0;
    /**
     * Output only. The key_prefix for this database. This key_prefix is used, in
     * combination with the project id ("<key prefix>~<project id>") to construct
     * the application id that is returned from the Cloud Datastore APIs in Google
     * App Engine first generation runtimes.
     * This value may be empty in which case the appid to use for URL-encoded keys
     * is the project_id (eg: foo instead of v~foo).
     *
     * Generated from protobuf field <code>string key_prefix = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $key_prefix = '';
    /**
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 99;</code>
     */
    private $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the Database.
     *           Format: `projects/{project}/databases/{database}`
     *     @type string $location_id
     *           The location of the database. Available locations are listed at
     *           https://cloud.google.com/firestore/docs/locations.
     *     @type int $type
     *           The type of the database.
     *           See https://cloud.google.com/datastore/docs/firestore-or-datastore for
     *           information about how to choose.
     *     @type int $concurrency_mode
     *           The concurrency control mode to use for this database.
     *     @type \Google\Protobuf\Duration $version_retention_period
     *           Output only. The period during which past versions of data are retained in
     *           the database.
     *           Any [read][google.firestore.v1.GetDocumentRequest.read_time]
     *           or [query][google.firestore.v1.ListDocumentsRequest.read_time] can specify
     *           a `read_time` within this window, and will read the state of the database
     *           at that time.
     *           If the PITR feature is enabled, the retention period is 7 days. Otherwise,
     *           the retention period is 1 hour.
     *     @type \Google\Protobuf\Timestamp $earliest_version_time
     *           Output only. The earliest timestamp at which older versions of the data can
     *           be read from the database. See [version_retention_period] above; this field
     *           is populated with `now - version_retention_period`.
     *           This value is continuously updated, and becomes stale the moment it is
     *           queried. If you are using this value to recover data, make sure to account
     *           for the time from the moment when the value is queried to the moment when
     *           you initiate the recovery.
     *     @type int $point_in_time_recovery_enablement
     *           Whether to enable the PITR feature on this database.
     *     @type int $app_engine_integration_mode
     *           The App Engine integration mode to use for this database.
     *     @type string $key_prefix
     *           Output only. The key_prefix for this database. This key_prefix is used, in
     *           combination with the project id ("<key prefix>~<project id>") to construct
     *           the application id that is returned from the Cloud Datastore APIs in Google
     *           App Engine first generation runtimes.
     *           This value may be empty in which case the appid to use for URL-encoded keys
     *           is the project_id (eg: foo instead of v~foo).
     *     @type string $etag
     *           This checksum is computed by the server based on the value of other
     *           fields, and may be sent on update and delete requests to ensure the
     *           client has an up-to-date value before proceeding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1\Database::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the Database.
     * Format: `projects/{project}/databases/{database}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the Database.
     * Format: `projects/{project}/databases/{database}`
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

    /**
     * The location of the database. Available locations are listed at
     * https://cloud.google.com/firestore/docs/locations.
     *
     * Generated from protobuf field <code>string location_id = 9;</code>
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * The location of the database. Available locations are listed at
     * https://cloud.google.com/firestore/docs/locations.
     *
     * Generated from protobuf field <code>string location_id = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;

        return $this;
    }

    /**
     * The type of the database.
     * See https://cloud.google.com/datastore/docs/firestore-or-datastore for
     * information about how to choose.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Database.DatabaseType type = 10;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the database.
     * See https://cloud.google.com/datastore/docs/firestore-or-datastore for
     * information about how to choose.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Database.DatabaseType type = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Firestore\Admin\V1\Database\DatabaseType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The concurrency control mode to use for this database.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Database.ConcurrencyMode concurrency_mode = 15;</code>
     * @return int
     */
    public function getConcurrencyMode()
    {
        return $this->concurrency_mode;
    }

    /**
     * The concurrency control mode to use for this database.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Database.ConcurrencyMode concurrency_mode = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setConcurrencyMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Firestore\Admin\V1\Database\ConcurrencyMode::class);
        $this->concurrency_mode = $var;

        return $this;
    }

    /**
     * Output only. The period during which past versions of data are retained in
     * the database.
     * Any [read][google.firestore.v1.GetDocumentRequest.read_time]
     * or [query][google.firestore.v1.ListDocumentsRequest.read_time] can specify
     * a `read_time` within this window, and will read the state of the database
     * at that time.
     * If the PITR feature is enabled, the retention period is 7 days. Otherwise,
     * the retention period is 1 hour.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration version_retention_period = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getVersionRetentionPeriod()
    {
        return $this->version_retention_period;
    }

    public function hasVersionRetentionPeriod()
    {
        return isset($this->version_retention_period);
    }

    public function clearVersionRetentionPeriod()
    {
        unset($this->version_retention_period);
    }

    /**
     * Output only. The period during which past versions of data are retained in
     * the database.
     * Any [read][google.firestore.v1.GetDocumentRequest.read_time]
     * or [query][google.firestore.v1.ListDocumentsRequest.read_time] can specify
     * a `read_time` within this window, and will read the state of the database
     * at that time.
     * If the PITR feature is enabled, the retention period is 7 days. Otherwise,
     * the retention period is 1 hour.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration version_retention_period = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setVersionRetentionPeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->version_retention_period = $var;

        return $this;
    }

    /**
     * Output only. The earliest timestamp at which older versions of the data can
     * be read from the database. See [version_retention_period] above; this field
     * is populated with `now - version_retention_period`.
     * This value is continuously updated, and becomes stale the moment it is
     * queried. If you are using this value to recover data, make sure to account
     * for the time from the moment when the value is queried to the moment when
     * you initiate the recovery.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_version_time = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEarliestVersionTime()
    {
        return $this->earliest_version_time;
    }

    public function hasEarliestVersionTime()
    {
        return isset($this->earliest_version_time);
    }

    public function clearEarliestVersionTime()
    {
        unset($this->earliest_version_time);
    }

    /**
     * Output only. The earliest timestamp at which older versions of the data can
     * be read from the database. See [version_retention_period] above; this field
     * is populated with `now - version_retention_period`.
     * This value is continuously updated, and becomes stale the moment it is
     * queried. If you are using this value to recover data, make sure to account
     * for the time from the moment when the value is queried to the moment when
     * you initiate the recovery.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_version_time = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEarliestVersionTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->earliest_version_time = $var;

        return $this;
    }

    /**
     * Whether to enable the PITR feature on this database.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Database.PointInTimeRecoveryEnablement point_in_time_recovery_enablement = 21;</code>
     * @return int
     */
    public function getPointInTimeRecoveryEnablement()
    {
        return $this->point_in_time_recovery_enablement;
    }

    /**
     * Whether to enable the PITR feature on this database.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Database.PointInTimeRecoveryEnablement point_in_time_recovery_enablement = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setPointInTimeRecoveryEnablement($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Firestore\Admin\V1\Database\PointInTimeRecoveryEnablement::class);
        $this->point_in_time_recovery_enablement = $var;

        return $this;
    }

    /**
     * The App Engine integration mode to use for this database.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Database.AppEngineIntegrationMode app_engine_integration_mode = 19;</code>
     * @return int
     */
    public function getAppEngineIntegrationMode()
    {
        return $this->app_engine_integration_mode;
    }

    /**
     * The App Engine integration mode to use for this database.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Database.AppEngineIntegrationMode app_engine_integration_mode = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setAppEngineIntegrationMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Firestore\Admin\V1\Database\AppEngineIntegrationMode::class);
        $this->app_engine_integration_mode = $var;

        return $this;
    }

    /**
     * Output only. The key_prefix for this database. This key_prefix is used, in
     * combination with the project id ("<key prefix>~<project id>") to construct
     * the application id that is returned from the Cloud Datastore APIs in Google
     * App Engine first generation runtimes.
     * This value may be empty in which case the appid to use for URL-encoded keys
     * is the project_id (eg: foo instead of v~foo).
     *
     * Generated from protobuf field <code>string key_prefix = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getKeyPrefix()
    {
        return $this->key_prefix;
    }

    /**
     * Output only. The key_prefix for this database. This key_prefix is used, in
     * combination with the project id ("<key prefix>~<project id>") to construct
     * the application id that is returned from the Cloud Datastore APIs in Google
     * App Engine first generation runtimes.
     * This value may be empty in which case the appid to use for URL-encoded keys
     * is the project_id (eg: foo instead of v~foo).
     *
     * Generated from protobuf field <code>string key_prefix = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setKeyPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_prefix = $var;

        return $this;
    }

    /**
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 99;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * This checksum is computed by the server based on the value of other
     * fields, and may be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 99;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}
