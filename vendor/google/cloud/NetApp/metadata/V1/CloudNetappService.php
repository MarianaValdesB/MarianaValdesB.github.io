<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/cloud_netapp_service.proto

namespace GPBMetadata\Google\Cloud\Netapp\V1;

class CloudNetappService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Netapp\V1\ActiveDirectory::initOnce();
        \GPBMetadata\Google\Cloud\Netapp\V1\Kms::initOnce();
        \GPBMetadata\Google\Cloud\Netapp\V1\Replication::initOnce();
        \GPBMetadata\Google\Cloud\Netapp\V1\Snapshot::initOnce();
        \GPBMetadata\Google\Cloud\Netapp\V1\StoragePool::initOnce();
        \GPBMetadata\Google\Cloud\Netapp\V1\Volume::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�D
1google/cloud/netapp/v1/cloud_netapp_service.protogoogle.cloud.netapp.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto-google/cloud/netapp/v1/active_directory.proto google/cloud/netapp/v1/kms.proto(google/cloud/netapp/v1/replication.proto%google/cloud/netapp/v1/snapshot.proto)google/cloud/netapp/v1/storage_pool.proto#google/cloud/netapp/v1/volume.proto#google/longrunning/operations.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.proto"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A2�;
NetApp�
ListStoragePools/.google.cloud.netapp.v1.ListStoragePoolsRequest0.google.cloud.netapp.v1.ListStoragePoolsResponse"A���20/v1/{parent=projects/*/locations/*}/storagePools�Aparent�
CreateStoragePool0.google.cloud.netapp.v1.CreateStoragePoolRequest.google.longrunning.Operation"����@"0/v1/{parent=projects/*/locations/*}/storagePools:storage_pool�A#parent,storage_pool,storage_pool_id�A 
StoragePoolOperationMetadata�
GetStoragePool-.google.cloud.netapp.v1.GetStoragePoolRequest#.google.cloud.netapp.v1.StoragePool"?���20/v1/{name=projects/*/locations/*/storagePools/*}�Aname�
UpdateStoragePool0.google.cloud.netapp.v1.UpdateStoragePoolRequest.google.longrunning.Operation"����M2=/v1/{storage_pool.name=projects/*/locations/*/storagePools/*}:storage_pool�Astorage_pool,update_mask�A 
StoragePoolOperationMetadata�
DeleteStoragePool0.google.cloud.netapp.v1.DeleteStoragePoolRequest.google.longrunning.Operation"l���2*0/v1/{name=projects/*/locations/*/storagePools/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListVolumes*.google.cloud.netapp.v1.ListVolumesRequest+.google.cloud.netapp.v1.ListVolumesResponse"<���-+/v1/{parent=projects/*/locations/*}/volumes�Aparent�
	GetVolume(.google.cloud.netapp.v1.GetVolumeRequest.google.cloud.netapp.v1.Volume":���-+/v1/{name=projects/*/locations/*/volumes/*}�Aname�
CreateVolume+.google.cloud.netapp.v1.CreateVolumeRequest.google.longrunning.Operation"s���5"+/v1/{parent=projects/*/locations/*}/volumes:volume�Aparent,volume,volume_id�A
VolumeOperationMetadata�
UpdateVolume+.google.cloud.netapp.v1.UpdateVolumeRequest.google.longrunning.Operation"u���<22/v1/{volume.name=projects/*/locations/*/volumes/*}:volume�Avolume,update_mask�A
VolumeOperationMetadata�
DeleteVolume+.google.cloud.netapp.v1.DeleteVolumeRequest.google.longrunning.Operation"g���-*+/v1/{name=projects/*/locations/*/volumes/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
RevertVolume+.google.cloud.netapp.v1.RevertVolumeRequest.google.longrunning.Operation"[���7"2/v1/{name=projects/*/locations/*/volumes/*}:revert:*�A
VolumeOperationMetadata�

GetSnapshot*.google.cloud.netapp.v1.GetSnapshotRequest .google.cloud.netapp.v1.Snapshot"F���97/v1/{name=projects/*/locations/*/volumes/*/snapshots/*}�Aname�
CreateSnapshot-.google.cloud.netapp.v1.CreateSnapshotRequest.google.longrunning.Operation"����C"7/v1/{parent=projects/*/locations/*/volumes/*}/snapshots:snapshot�Aparent,snapshot,snapshot_id�A
SnapshotOperationMetadata�
DeleteSnapshot-.google.cloud.netapp.v1.DeleteSnapshotRequest.google.longrunning.Operation"s���9*7/v1/{name=projects/*/locations/*/volumes/*/snapshots/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
UpdateSnapshot-.google.cloud.netapp.v1.UpdateSnapshotRequest.google.longrunning.Operation"����L2@/v1/{snapshot.name=projects/*/locations/*/volumes/*/snapshots/*}:snapshot�Asnapshot,update_mask�A
SnapshotOperationMetadata�
ListActiveDirectories4.google.cloud.netapp.v1.ListActiveDirectoriesRequest5.google.cloud.netapp.v1.ListActiveDirectoriesResponse"F���75/v1/{parent=projects/*/locations/*}/activeDirectories�Aparent�
GetActiveDirectory1.google.cloud.netapp.v1.GetActiveDirectoryRequest\'.google.cloud.netapp.v1.ActiveDirectory"D���75/v1/{name=projects/*/locations/*/activeDirectories/*}�Aname�
CreateActiveDirectory4.google.cloud.netapp.v1.CreateActiveDirectoryRequest.google.longrunning.Operation"����I"5/v1/{parent=projects/*/locations/*}/activeDirectories:active_directory�A+parent,active_directory,active_directory_id�A$
ActiveDirectoryOperationMetadata�
UpdateActiveDirectory4.google.cloud.netapp.v1.UpdateActiveDirectoryRequest.google.longrunning.Operation"����Z2F/v1/{active_directory.name=projects/*/locations/*/activeDirectories/*}:active_directory�Aactive_directory,update_mask�A$
ActiveDirectoryOperationMetadata�
DeleteActiveDirectory4.google.cloud.netapp.v1.DeleteActiveDirectoryRequest.google.longrunning.Operation"q���7*5/v1/{name=projects/*/locations/*/activeDirectories/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListKmsConfigs-.google.cloud.netapp.v1.ListKmsConfigsRequest..google.cloud.netapp.v1.ListKmsConfigsResponse"?���0./v1/{parent=projects/*/locations/*}/kmsConfigs�Aparent�
CreateKmsConfig..google.cloud.netapp.v1.CreateKmsConfigRequest.google.longrunning.Operation"����<"./v1/{parent=projects/*/locations/*}/kmsConfigs:
kms_config�Aparent,kms_config,kms_config_id�A
	KmsConfigOperationMetadata�
GetKmsConfig+.google.cloud.netapp.v1.GetKmsConfigRequest!.google.cloud.netapp.v1.KmsConfig"=���0./v1/{name=projects/*/locations/*/kmsConfigs/*}�Aname�
UpdateKmsConfig..google.cloud.netapp.v1.UpdateKmsConfigRequest.google.longrunning.Operation"����G29/v1/{kms_config.name=projects/*/locations/*/kmsConfigs/*}:
kms_config�Akms_config,update_mask�A
	KmsConfigOperationMetadata�
EncryptVolumes-.google.cloud.netapp.v1.EncryptVolumesRequest.google.longrunning.Operation"b���;"6/v1/{name=projects/*/locations/*/kmsConfigs/*}:encrypt:*�A
	KmsConfigOperationMetadata�
VerifyKmsConfig..google.cloud.netapp.v1.VerifyKmsConfigRequest/.google.cloud.netapp.v1.VerifyKmsConfigResponse"@���:"5/v1/{name=projects/*/locations/*/kmsConfigs/*}:verify:*�
DeleteKmsConfig..google.cloud.netapp.v1.DeleteKmsConfigRequest.google.longrunning.Operation"j���0*./v1/{name=projects/*/locations/*/kmsConfigs/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListReplications/.google.cloud.netapp.v1.ListReplicationsRequest0.google.cloud.netapp.v1.ListReplicationsResponse"K���<:/v1/{parent=projects/*/locations/*/volumes/*}/replications�Aparent�
GetReplication-.google.cloud.netapp.v1.GetReplicationRequest#.google.cloud.netapp.v1.Replication"I���<:/v1/{name=projects/*/locations/*/volumes/*/replications/*}�Aname�
CreateReplication0.google.cloud.netapp.v1.CreateReplicationRequest.google.longrunning.Operation"����I":/v1/{parent=projects/*/locations/*/volumes/*}/replications:replication�A!parent,replication,replication_id�A 
ReplicationOperationMetadata�
DeleteReplication0.google.cloud.netapp.v1.DeleteReplicationRequest.google.longrunning.Operation"v���<*:/v1/{name=projects/*/locations/*/volumes/*/replications/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
UpdateReplication0.google.cloud.netapp.v1.UpdateReplicationRequest.google.longrunning.Operation"����U2F/v1/{replication.name=projects/*/locations/*/volumes/*/replications/*}:replication�Areplication,update_mask�A 
ReplicationOperationMetadata�
StopReplication..google.cloud.netapp.v1.StopReplicationRequest.google.longrunning.Operation"m���D"?/v1/{name=projects/*/locations/*/volumes/*/replications/*}:stop:*�A 
ReplicationOperationMetadata�
ResumeReplication0.google.cloud.netapp.v1.ResumeReplicationRequest.google.longrunning.Operation"o���F"A/v1/{name=projects/*/locations/*/volumes/*/replications/*}:resume:*�A 
ReplicationOperationMetadata�
ReverseReplicationDirection:.google.cloud.netapp.v1.ReverseReplicationDirectionRequest.google.longrunning.Operation"y���P"K/v1/{name=projects/*/locations/*/volumes/*/replications/*}:reverseDirection:*�A 
ReplicationOperationMetadataI�Anetapp.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.netapp.v1BCloudNetappServiceProtoPZ2cloud.google.com/go/netapp/apiv1/netapppb;netapppb�Google.Cloud.NetApp.V1�Google\\Cloud\\NetApp\\V1�Google::Cloud::NetApp::V1�AN
compute.googleapis.com/Network,projects/{project}/global/networks/{network}bproto3'
        , true);

        static::$is_initialized = true;
    }
}
