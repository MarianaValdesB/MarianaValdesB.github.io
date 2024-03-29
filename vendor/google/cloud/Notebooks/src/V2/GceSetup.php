<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v2/gce_setup.proto

namespace Google\Cloud\Notebooks\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The definition of how to configure a VM instance outside of Resources and
 * Identity.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v2.GceSetup</code>
 */
class GceSetup extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The machine type of the VM instance.
     * https://cloud.google.com/compute/docs/machine-resource
     *
     * Generated from protobuf field <code>string machine_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $machine_type = '';
    /**
     * Optional. The hardware accelerators used on this instance. If you use
     * accelerators, make sure that your configuration has
     * [enough vCPUs and memory to support the `machine_type` you have
     * selected](https://cloud.google.com/compute/docs/gpus/#gpus-list).
     * Currently supports only one accelerator configuration.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v2.AcceleratorConfig accelerator_configs = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $accelerator_configs;
    /**
     * Optional. The service account that serves as an identity for the VM
     * instance. Currently supports only one service account.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v2.ServiceAccount service_accounts = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $service_accounts;
    /**
     * Optional. The boot disk for the VM.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.BootDisk boot_disk = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $boot_disk = null;
    /**
     * Optional. Data disks attached to the VM instance.
     * Currently supports only one data disk.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v2.DataDisk data_disks = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $data_disks;
    /**
     * Optional. Shielded VM configuration.
     * [Images using supported Shielded VM
     * features](https://cloud.google.com/compute/docs/instances/modifying-shielded-vm).
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.ShieldedInstanceConfig shielded_instance_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $shielded_instance_config = null;
    /**
     * Optional. The network interfaces for the VM.
     * Supports only one interface.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v2.NetworkInterface network_interfaces = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $network_interfaces;
    /**
     * Optional. If true, no external IP will be assigned to this VM instance.
     *
     * Generated from protobuf field <code>bool disable_public_ip = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $disable_public_ip = false;
    /**
     * Optional. The Compute Engine tags to add to runtime (see [Tagging
     * instances](https://cloud.google.com/compute/docs/label-or-tag-resources#tags)).
     *
     * Generated from protobuf field <code>repeated string tags = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $tags;
    /**
     * Optional. Custom metadata to apply to this instance.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $metadata;
    /**
     * Optional. Flag to enable ip forwarding or not, default false/off.
     * https://cloud.google.com/vpc/docs/using-routes#canipforward
     *
     * Generated from protobuf field <code>bool enable_ip_forwarding = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $enable_ip_forwarding = false;
    /**
     * Optional. Configuration for GPU drivers.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.GPUDriverConfig gpu_driver_config = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $gpu_driver_config = null;
    protected $image;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $machine_type
     *           Optional. The machine type of the VM instance.
     *           https://cloud.google.com/compute/docs/machine-resource
     *     @type array<\Google\Cloud\Notebooks\V2\AcceleratorConfig>|\Google\Protobuf\Internal\RepeatedField $accelerator_configs
     *           Optional. The hardware accelerators used on this instance. If you use
     *           accelerators, make sure that your configuration has
     *           [enough vCPUs and memory to support the `machine_type` you have
     *           selected](https://cloud.google.com/compute/docs/gpus/#gpus-list).
     *           Currently supports only one accelerator configuration.
     *     @type array<\Google\Cloud\Notebooks\V2\ServiceAccount>|\Google\Protobuf\Internal\RepeatedField $service_accounts
     *           Optional. The service account that serves as an identity for the VM
     *           instance. Currently supports only one service account.
     *     @type \Google\Cloud\Notebooks\V2\VmImage $vm_image
     *           Optional. Use a Compute Engine VM image to start the notebook instance.
     *     @type \Google\Cloud\Notebooks\V2\ContainerImage $container_image
     *           Optional. Use a container image to start the notebook instance.
     *     @type \Google\Cloud\Notebooks\V2\BootDisk $boot_disk
     *           Optional. The boot disk for the VM.
     *     @type array<\Google\Cloud\Notebooks\V2\DataDisk>|\Google\Protobuf\Internal\RepeatedField $data_disks
     *           Optional. Data disks attached to the VM instance.
     *           Currently supports only one data disk.
     *     @type \Google\Cloud\Notebooks\V2\ShieldedInstanceConfig $shielded_instance_config
     *           Optional. Shielded VM configuration.
     *           [Images using supported Shielded VM
     *           features](https://cloud.google.com/compute/docs/instances/modifying-shielded-vm).
     *     @type array<\Google\Cloud\Notebooks\V2\NetworkInterface>|\Google\Protobuf\Internal\RepeatedField $network_interfaces
     *           Optional. The network interfaces for the VM.
     *           Supports only one interface.
     *     @type bool $disable_public_ip
     *           Optional. If true, no external IP will be assigned to this VM instance.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $tags
     *           Optional. The Compute Engine tags to add to runtime (see [Tagging
     *           instances](https://cloud.google.com/compute/docs/label-or-tag-resources#tags)).
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           Optional. Custom metadata to apply to this instance.
     *     @type bool $enable_ip_forwarding
     *           Optional. Flag to enable ip forwarding or not, default false/off.
     *           https://cloud.google.com/vpc/docs/using-routes#canipforward
     *     @type \Google\Cloud\Notebooks\V2\GPUDriverConfig $gpu_driver_config
     *           Optional. Configuration for GPU drivers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V2\GceSetup::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The machine type of the VM instance.
     * https://cloud.google.com/compute/docs/machine-resource
     *
     * Generated from protobuf field <code>string machine_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMachineType()
    {
        return $this->machine_type;
    }

    /**
     * Optional. The machine type of the VM instance.
     * https://cloud.google.com/compute/docs/machine-resource
     *
     * Generated from protobuf field <code>string machine_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;

        return $this;
    }

    /**
     * Optional. The hardware accelerators used on this instance. If you use
     * accelerators, make sure that your configuration has
     * [enough vCPUs and memory to support the `machine_type` you have
     * selected](https://cloud.google.com/compute/docs/gpus/#gpus-list).
     * Currently supports only one accelerator configuration.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v2.AcceleratorConfig accelerator_configs = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAcceleratorConfigs()
    {
        return $this->accelerator_configs;
    }

    /**
     * Optional. The hardware accelerators used on this instance. If you use
     * accelerators, make sure that your configuration has
     * [enough vCPUs and memory to support the `machine_type` you have
     * selected](https://cloud.google.com/compute/docs/gpus/#gpus-list).
     * Currently supports only one accelerator configuration.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v2.AcceleratorConfig accelerator_configs = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Notebooks\V2\AcceleratorConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAcceleratorConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Notebooks\V2\AcceleratorConfig::class);
        $this->accelerator_configs = $arr;

        return $this;
    }

    /**
     * Optional. The service account that serves as an identity for the VM
     * instance. Currently supports only one service account.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v2.ServiceAccount service_accounts = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServiceAccounts()
    {
        return $this->service_accounts;
    }

    /**
     * Optional. The service account that serves as an identity for the VM
     * instance. Currently supports only one service account.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v2.ServiceAccount service_accounts = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Notebooks\V2\ServiceAccount>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServiceAccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Notebooks\V2\ServiceAccount::class);
        $this->service_accounts = $arr;

        return $this;
    }

    /**
     * Optional. Use a Compute Engine VM image to start the notebook instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.VmImage vm_image = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Notebooks\V2\VmImage|null
     */
    public function getVmImage()
    {
        return $this->readOneof(4);
    }

    public function hasVmImage()
    {
        return $this->hasOneof(4);
    }

    /**
     * Optional. Use a Compute Engine VM image to start the notebook instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.VmImage vm_image = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Notebooks\V2\VmImage $var
     * @return $this
     */
    public function setVmImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Notebooks\V2\VmImage::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Optional. Use a container image to start the notebook instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.ContainerImage container_image = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Notebooks\V2\ContainerImage|null
     */
    public function getContainerImage()
    {
        return $this->readOneof(5);
    }

    public function hasContainerImage()
    {
        return $this->hasOneof(5);
    }

    /**
     * Optional. Use a container image to start the notebook instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.ContainerImage container_image = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Notebooks\V2\ContainerImage $var
     * @return $this
     */
    public function setContainerImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Notebooks\V2\ContainerImage::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Optional. The boot disk for the VM.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.BootDisk boot_disk = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Notebooks\V2\BootDisk|null
     */
    public function getBootDisk()
    {
        return $this->boot_disk;
    }

    public function hasBootDisk()
    {
        return isset($this->boot_disk);
    }

    public function clearBootDisk()
    {
        unset($this->boot_disk);
    }

    /**
     * Optional. The boot disk for the VM.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.BootDisk boot_disk = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Notebooks\V2\BootDisk $var
     * @return $this
     */
    public function setBootDisk($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Notebooks\V2\BootDisk::class);
        $this->boot_disk = $var;

        return $this;
    }

    /**
     * Optional. Data disks attached to the VM instance.
     * Currently supports only one data disk.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v2.DataDisk data_disks = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataDisks()
    {
        return $this->data_disks;
    }

    /**
     * Optional. Data disks attached to the VM instance.
     * Currently supports only one data disk.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v2.DataDisk data_disks = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Notebooks\V2\DataDisk>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataDisks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Notebooks\V2\DataDisk::class);
        $this->data_disks = $arr;

        return $this;
    }

    /**
     * Optional. Shielded VM configuration.
     * [Images using supported Shielded VM
     * features](https://cloud.google.com/compute/docs/instances/modifying-shielded-vm).
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.ShieldedInstanceConfig shielded_instance_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Notebooks\V2\ShieldedInstanceConfig|null
     */
    public function getShieldedInstanceConfig()
    {
        return $this->shielded_instance_config;
    }

    public function hasShieldedInstanceConfig()
    {
        return isset($this->shielded_instance_config);
    }

    public function clearShieldedInstanceConfig()
    {
        unset($this->shielded_instance_config);
    }

    /**
     * Optional. Shielded VM configuration.
     * [Images using supported Shielded VM
     * features](https://cloud.google.com/compute/docs/instances/modifying-shielded-vm).
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.ShieldedInstanceConfig shielded_instance_config = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Notebooks\V2\ShieldedInstanceConfig $var
     * @return $this
     */
    public function setShieldedInstanceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Notebooks\V2\ShieldedInstanceConfig::class);
        $this->shielded_instance_config = $var;

        return $this;
    }

    /**
     * Optional. The network interfaces for the VM.
     * Supports only one interface.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v2.NetworkInterface network_interfaces = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworkInterfaces()
    {
        return $this->network_interfaces;
    }

    /**
     * Optional. The network interfaces for the VM.
     * Supports only one interface.
     *
     * Generated from protobuf field <code>repeated .google.cloud.notebooks.v2.NetworkInterface network_interfaces = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Notebooks\V2\NetworkInterface>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworkInterfaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Notebooks\V2\NetworkInterface::class);
        $this->network_interfaces = $arr;

        return $this;
    }

    /**
     * Optional. If true, no external IP will be assigned to this VM instance.
     *
     * Generated from protobuf field <code>bool disable_public_ip = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getDisablePublicIp()
    {
        return $this->disable_public_ip;
    }

    /**
     * Optional. If true, no external IP will be assigned to this VM instance.
     *
     * Generated from protobuf field <code>bool disable_public_ip = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setDisablePublicIp($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_public_ip = $var;

        return $this;
    }

    /**
     * Optional. The Compute Engine tags to add to runtime (see [Tagging
     * instances](https://cloud.google.com/compute/docs/label-or-tag-resources#tags)).
     *
     * Generated from protobuf field <code>repeated string tags = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Optional. The Compute Engine tags to add to runtime (see [Tagging
     * instances](https://cloud.google.com/compute/docs/label-or-tag-resources#tags)).
     *
     * Generated from protobuf field <code>repeated string tags = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

    /**
     * Optional. Custom metadata to apply to this instance.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Optional. Custom metadata to apply to this instance.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * Optional. Flag to enable ip forwarding or not, default false/off.
     * https://cloud.google.com/vpc/docs/using-routes#canipforward
     *
     * Generated from protobuf field <code>bool enable_ip_forwarding = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableIpForwarding()
    {
        return $this->enable_ip_forwarding;
    }

    /**
     * Optional. Flag to enable ip forwarding or not, default false/off.
     * https://cloud.google.com/vpc/docs/using-routes#canipforward
     *
     * Generated from protobuf field <code>bool enable_ip_forwarding = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableIpForwarding($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_ip_forwarding = $var;

        return $this;
    }

    /**
     * Optional. Configuration for GPU drivers.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.GPUDriverConfig gpu_driver_config = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Notebooks\V2\GPUDriverConfig|null
     */
    public function getGpuDriverConfig()
    {
        return $this->gpu_driver_config;
    }

    public function hasGpuDriverConfig()
    {
        return isset($this->gpu_driver_config);
    }

    public function clearGpuDriverConfig()
    {
        unset($this->gpu_driver_config);
    }

    /**
     * Optional. Configuration for GPU drivers.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v2.GPUDriverConfig gpu_driver_config = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Notebooks\V2\GPUDriverConfig $var
     * @return $this
     */
    public function setGpuDriverConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Notebooks\V2\GPUDriverConfig::class);
        $this->gpu_driver_config = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->whichOneof("image");
    }

}

