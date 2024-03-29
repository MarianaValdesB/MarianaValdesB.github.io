<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace GPBMetadata\Google\Cloud\Networkconnectivity\V1;

class Hub
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
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Common::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�r
-google/cloud/networkconnectivity/v1/hub.proto#google.cloud.networkconnectivity.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto0google/cloud/networkconnectivity/v1/common.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
Hub
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AD
labels (24.google.cloud.networkconnectivity.v1.Hub.LabelsEntry
description (	
	unique_id (	B�A>
state	 (2*.google.cloud.networkconnectivity.v1.StateB�AE
routing_vpcs
 (2/.google.cloud.networkconnectivity.v1.RoutingVPC
route_tables (	B�AM
spoke_summary (21.google.cloud.networkconnectivity.v1.SpokeSummaryB�A-
LabelsEntry
key (	
value (	:8:[�AX
&networkconnectivity.googleapis.com/Hub.projects/{project}/locations/global/hubs/{hub}"

RoutingVPC0
uri (	B#�A 
compute.googleapis.com/Network?
2required_for_new_site_to_site_data_transfer_spokes (B�A"�

Spoke
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AF
labels (26.google.cloud.networkconnectivity.v1.Spoke.LabelsEntry
description (	;
hub (	B.�A�A(
&networkconnectivity.googleapis.com/Hub?
group (	B0�A�A*
(networkconnectivity.googleapis.com/GroupQ
linked_vpn_tunnels (25.google.cloud.networkconnectivity.v1.LinkedVpnTunnelsk
linked_interconnect_attachments (2B.google.cloud.networkconnectivity.v1.LinkedInterconnectAttachmentsn
!linked_router_appliance_instances (2C.google.cloud.networkconnectivity.v1.LinkedRouterApplianceInstancesV
linked_vpc_network (25.google.cloud.networkconnectivity.v1.LinkedVpcNetworkB�A
	unique_id (	B�A>
state (2*.google.cloud.networkconnectivity.v1.StateB�AL
reasons (26.google.cloud.networkconnectivity.v1.Spoke.StateReasonB�AG

spoke_type (2..google.cloud.networkconnectivity.v1.SpokeTypeB�A�
StateReasonI
code (2;.google.cloud.networkconnectivity.v1.Spoke.StateReason.Code
message (	
user_details (	"V
Code
CODE_UNSPECIFIED 
PENDING_REVIEW
REJECTED

PAUSED

FAILED-
LabelsEntry
key (	
value (	:8:e�Ab
(networkconnectivity.googleapis.com/Spoke6projects/{project}/locations/{location}/spokes/{spoke}"�

RouteTable
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AK
labels (2;.google.cloud.networkconnectivity.v1.RouteTable.LabelsEntry
description (	
uid (	B�A>
state (2*.google.cloud.networkconnectivity.v1.StateB�A-
LabelsEntry
key (	
value (	:8:|�Ay
-networkconnectivity.googleapis.com/RouteTableHprojects/{project}/locations/global/hubs/{hub}/routeTables/{route_table}"�
Route
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
ip_cidr_range (	A
type
 (2..google.cloud.networkconnectivity.v1.RouteTypeB�AY
next_hop_vpc_network (26.google.cloud.networkconnectivity.v1.NextHopVpcNetworkB�AF
labels (26.google.cloud.networkconnectivity.v1.Route.LabelsEntry
description (	
uid (	B�A>
state	 (2*.google.cloud.networkconnectivity.v1.StateB�A?
spoke (	B0�A�A*
(networkconnectivity.googleapis.com/Spoke
location (	B�A-
LabelsEntry
key (	
value (	:8:��A�
+networkconnectivity.googleapis.com/HubRouteWprojects/{project}/locations/global/hubs/{hub}/routeTables/{route_table}/routes/{route}"�
Group
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AK
labels (26.google.cloud.networkconnectivity.v1.Group.LabelsEntryB�A
description (	B�A
uid (	B�A>
state (2*.google.cloud.networkconnectivity.v1.StateB�A-
LabelsEntry
key (	
value (	:8:l�Ai
(networkconnectivity.googleapis.com/Group=projects/{project}/locations/global/hubs/{hub}/groups/{group}"�
ListHubsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"x
ListHubsResponse6
hubs (2(.google.cloud.networkconnectivity.v1.Hub
next_page_token (	
unreachable (	"M
GetHubRequest<
name (	B.�A�A(
&networkconnectivity.googleapis.com/Hub"�
CreateHubRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
hub_id (	B�A:
hub (2(.google.cloud.networkconnectivity.v1.HubB�A

request_id (	B�A"�
UpdateHubRequest4
update_mask (2.google.protobuf.FieldMaskB�A:
hub (2(.google.cloud.networkconnectivity.v1.HubB�A

request_id (	B�A"i
DeleteHubRequest<
name (	B.�A�A(
&networkconnectivity.googleapis.com/Hub

request_id (	B�A"�
ListHubSpokesRequest<
name (	B.�A�A(
&networkconnectivity.googleapis.com/Hub
spoke_locations (	
	page_size (

page_token (	
filter (	
order_by (	Q
view (2C.google.cloud.networkconnectivity.v1.ListHubSpokesRequest.SpokeView"@
	SpokeView
SPOKE_VIEW_UNSPECIFIED 	
BASIC
DETAILED"�
ListHubSpokesResponse:
spokes (2*.google.cloud.networkconnectivity.v1.Spoke
next_page_token (	
unreachable (	"�
ListSpokesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"~
ListSpokesResponse:
spokes (2*.google.cloud.networkconnectivity.v1.Spoke
next_page_token (	
unreachable (	"Q
GetSpokeRequest>
name (	B0�A�A*
(networkconnectivity.googleapis.com/Spoke"�
CreateSpokeRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
spoke_id (	B�A>
spoke (2*.google.cloud.networkconnectivity.v1.SpokeB�A

request_id (	B�A"�
UpdateSpokeRequest4
update_mask (2.google.protobuf.FieldMaskB�A>
spoke (2*.google.cloud.networkconnectivity.v1.SpokeB�A

request_id (	B�A"m
DeleteSpokeRequest>
name (	B0�A�A*
(networkconnectivity.googleapis.com/Spoke

request_id (	B�A"�
AcceptHubSpokeRequest<
name (	B.�A�A(
&networkconnectivity.googleapis.com/HubC
	spoke_uri (	B0�A�A*
(networkconnectivity.googleapis.com/Spoke

request_id (	B�A"S
AcceptHubSpokeResponse9
spoke (2*.google.cloud.networkconnectivity.v1.Spoke"�
RejectHubSpokeRequest<
name (	B.�A�A(
&networkconnectivity.googleapis.com/HubC
	spoke_uri (	B0�A�A*
(networkconnectivity.googleapis.com/Spoke

request_id (	B�A
details (	B�A"S
RejectHubSpokeResponse9
spoke (2*.google.cloud.networkconnectivity.v1.Spoke"[
GetRouteTableRequestC
name (	B5�A�A/
-networkconnectivity.googleapis.com/RouteTable"T
GetRouteRequestA
name (	B3�A�A-
+networkconnectivity.googleapis.com/HubRoute"�
ListRoutesRequestE
parent (	B5�A�A/
-networkconnectivity.googleapis.com/RouteTable
	page_size (

page_token (	
filter (	
order_by (	"~
ListRoutesResponse:
routes (2*.google.cloud.networkconnectivity.v1.Route
next_page_token (	
unreachable (	"�
ListRouteTablesRequest>
parent (	B.�A�A(
&networkconnectivity.googleapis.com/Hub
	page_size (

page_token (	
filter (	
order_by (	"�
ListRouteTablesResponseE
route_tables (2/.google.cloud.networkconnectivity.v1.RouteTable
next_page_token (	
unreachable (	"�
ListGroupsRequest>
parent (	B.�A�A(
&networkconnectivity.googleapis.com/Hub
	page_size (

page_token (	
filter (	
order_by (	"~
ListGroupsResponse:
groups (2*.google.cloud.networkconnectivity.v1.Group
next_page_token (	
unreachable (	"�
LinkedVpnTunnels3
uris (	B%�A"
 compute.googleapis.com/VpnTunnel"
site_to_site_data_transfer (;
vpc_network (	B&�A�A 
compute.googleapis.com/Network"�
LinkedInterconnectAttachments@
uris (	B2�A/
-compute.googleapis.com/InterconnectAttachment"
site_to_site_data_transfer (;
vpc_network (	B&�A�A 
compute.googleapis.com/Network"�
LinkedRouterApplianceInstancesO
	instances (2<.google.cloud.networkconnectivity.v1.RouterApplianceInstance"
site_to_site_data_transfer (;
vpc_network (	B&�A�A 
compute.googleapis.com/Network"k
LinkedVpcNetwork3
uri (	B&�A�A 
compute.googleapis.com/Network"
exclude_export_ranges (	B�A"l
RouterApplianceInstance=
virtual_machine (	B$�A!
compute.googleapis.com/Instance

ip_address (	"c
LocationMetadataO
location_features (24.google.cloud.networkconnectivity.v1.LocationFeature"E
NextHopVpcNetwork0
uri (	B#�A 
compute.googleapis.com/Network"�
SpokeSummary`
spoke_type_counts (2@.google.cloud.networkconnectivity.v1.SpokeSummary.SpokeTypeCountB�Ab
spoke_state_counts (2A.google.cloud.networkconnectivity.v1.SpokeSummary.SpokeStateCountB�Ao
spoke_state_reason_counts (2G.google.cloud.networkconnectivity.v1.SpokeSummary.SpokeStateReasonCountB�Am
SpokeTypeCountG

spoke_type (2..google.cloud.networkconnectivity.v1.SpokeTypeB�A
count (B�Ae
SpokeStateCount>
state (2*.google.cloud.networkconnectivity.v1.StateB�A
count (B�A�
SpokeStateReasonCount[
state_reason_code (2;.google.cloud.networkconnectivity.v1.Spoke.StateReason.CodeB�A
count (B�A"Q
GetGroupRequest>
name (	B0�A�A*
(networkconnectivity.googleapis.com/Group*f
LocationFeature 
LOCATION_FEATURE_UNSPECIFIED 
SITE_TO_CLOUD_SPOKES
SITE_TO_SITE_SPOKES*Y
	RouteType
ROUTE_TYPE_UNSPECIFIED 
VPC_PRIMARY_SUBNET
VPC_SECONDARY_SUBNET*�
State
STATE_UNSPECIFIED 
CREATING

ACTIVE
DELETING
	ACCEPTING
	REJECTING	
UPDATING
INACTIVE
OBSOLETE
*{
	SpokeType
SPOKE_TYPE_UNSPECIFIED 

VPN_TUNNEL
INTERCONNECT_ATTACHMENT
ROUTER_APPLIANCE
VPC_NETWORK2�

HubService�
ListHubs4.google.cloud.networkconnectivity.v1.ListHubsRequest5.google.cloud.networkconnectivity.v1.ListHubsResponse">���/-/v1/{parent=projects/*/locations/global}/hubs�Aparent�
GetHub2.google.cloud.networkconnectivity.v1.GetHubRequest(.google.cloud.networkconnectivity.v1.Hub"<���/-/v1/{name=projects/*/locations/global/hubs/*}�Aname�
	CreateHub5.google.cloud.networkconnectivity.v1.CreateHubRequest.google.longrunning.Operation"i���4"-/v1/{parent=projects/*/locations/global}/hubs:hub�Aparent,hub,hub_id�A
HubOperationMetadata�
	UpdateHub5.google.cloud.networkconnectivity.v1.UpdateHubRequest.google.longrunning.Operation"k���821/v1/{hub.name=projects/*/locations/global/hubs/*}:hub�Ahub,update_mask�A
HubOperationMetadata�
	DeleteHub5.google.cloud.networkconnectivity.v1.DeleteHubRequest.google.longrunning.Operation"i���/*-/v1/{name=projects/*/locations/global/hubs/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListHubSpokes9.google.cloud.networkconnectivity.v1.ListHubSpokesRequest:.google.cloud.networkconnectivity.v1.ListHubSpokesResponse"G���:8/v1/{name=projects/*/locations/global/hubs/*}:listSpokes�Aname�

ListSpokes6.google.cloud.networkconnectivity.v1.ListSpokesRequest7.google.cloud.networkconnectivity.v1.ListSpokesResponse";���,*/v1/{parent=projects/*/locations/*}/spokes�Aparent�
GetSpoke4.google.cloud.networkconnectivity.v1.GetSpokeRequest*.google.cloud.networkconnectivity.v1.Spoke"9���,*/v1/{name=projects/*/locations/*/spokes/*}�Aname�
CreateSpoke7.google.cloud.networkconnectivity.v1.CreateSpokeRequest.google.longrunning.Operation"n���3"*/v1/{parent=projects/*/locations/*}/spokes:spoke�Aparent,spoke,spoke_id�A
SpokeOperationMetadata�
UpdateSpoke7.google.cloud.networkconnectivity.v1.UpdateSpokeRequest.google.longrunning.Operation"p���920/v1/{spoke.name=projects/*/locations/*/spokes/*}:spoke�Aspoke,update_mask�A
SpokeOperationMetadata�
RejectHubSpoke:.google.cloud.networkconnectivity.v1.RejectHubSpokeRequest.google.longrunning.Operation"����>"9/v1/{name=projects/*/locations/global/hubs/*}:rejectSpoke:*�Aname,spoke_uri�A+
RejectHubSpokeResponseOperationMetadata�
AcceptHubSpoke:.google.cloud.networkconnectivity.v1.AcceptHubSpokeRequest.google.longrunning.Operation"����>"9/v1/{name=projects/*/locations/global/hubs/*}:acceptSpoke:*�Aname,spoke_uri�A+
AcceptHubSpokeResponseOperationMetadata�
DeleteSpoke7.google.cloud.networkconnectivity.v1.DeleteSpokeRequest.google.longrunning.Operation"f���,**/v1/{name=projects/*/locations/*/spokes/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
GetRouteTable9.google.cloud.networkconnectivity.v1.GetRouteTableRequest/.google.cloud.networkconnectivity.v1.RouteTable"J���=;/v1/{name=projects/*/locations/global/hubs/*/routeTables/*}�Aname�
GetRoute4.google.cloud.networkconnectivity.v1.GetRouteRequest*.google.cloud.networkconnectivity.v1.Route"S���FD/v1/{name=projects/*/locations/global/hubs/*/routeTables/*/routes/*}�Aname�

ListRoutes6.google.cloud.networkconnectivity.v1.ListRoutesRequest7.google.cloud.networkconnectivity.v1.ListRoutesResponse"U���FD/v1/{parent=projects/*/locations/global/hubs/*/routeTables/*}/routes�Aparent�
ListRouteTables;.google.cloud.networkconnectivity.v1.ListRouteTablesRequest<.google.cloud.networkconnectivity.v1.ListRouteTablesResponse"L���=;/v1/{parent=projects/*/locations/global/hubs/*}/routeTables�Aparent�
GetGroup4.google.cloud.networkconnectivity.v1.GetGroupRequest*.google.cloud.networkconnectivity.v1.Group"E���86/v1/{name=projects/*/locations/global/hubs/*/groups/*}�Aname�

ListGroups6.google.cloud.networkconnectivity.v1.ListGroupsRequest7.google.cloud.networkconnectivity.v1.ListGroupsResponse"G���86/v1/{parent=projects/*/locations/global/hubs/*}/groups�AparentV�A"networkconnectivity.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
\'com.google.cloud.networkconnectivity.v1BHubProtoPZYcloud.google.com/go/networkconnectivity/apiv1/networkconnectivitypb;networkconnectivitypb�#Google.Cloud.NetworkConnectivity.V1�#Google\\Cloud\\NetworkConnectivity\\V1�&Google::Cloud::NetworkConnectivity::V1�A`
 compute.googleapis.com/VpnTunnel<projects/{project}/regions/{region}/vpnTunnels/{resource_id}�AW
compute.googleapis.com/Instance4projects/{project}/zones/{zone}/instances/{instance}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

