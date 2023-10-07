<?php
    require('src/ampapi.php');

    /**
     * Core
     * @author p0t4t0sandwich
     */
    class Core extends AMPAPI {
        /**
         * Core constructor
         * @author p0t4t0sandwich
         * @param string $baseUri The base URI of the AMP installation
         * @param string $username The username of the user
         * @param string $password The password of the user
         * @param string $rememberMeToken The remember me token of the user (optional)
         * @param string $sessionId The session ID of the user (optional)
         */
        function __construct(string $baseUri, string $username = "", string $password = "", string $rememberMeToken = "", string $sessionId = "") {
            parent::__construct($baseUri, $username, $password, $rememberMeToken, $sessionId);
        }

        /**
        * 
        * Name Description Optional
        * @param InstanceDatastore $newDatastore  False
        * @return ActionResult
        */
        function AddDatastore(InstanceDatastore $newDatastore) {
            $data = array(
                "newDatastore" => $newDatastore,
            );
            return $this->APICall("ADSModule/AddDatastore", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceID  False
        * @param ArrayObject $Args  False
        * @param bool $RebuildConfiguration  True
        * @return Task
        */
        function ApplyInstanceConfiguration(string $InstanceID, ArrayObject $Args, bool $RebuildConfiguration) {
            $data = array(
                "InstanceID" => $InstanceID,
                "Args" => $Args,
                "RebuildConfiguration" => $RebuildConfiguration,
            );
            return $this->APICall("ADSModule/ApplyInstanceConfiguration", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceID  False
        * @param int $TemplateID  False
        * @param string $NewFriendlyName  True
        * @param string $Secret  True
        * @param bool $RestartIfPreviouslyRunning  True
        * @return ActionResult
        */
        function ApplyTemplate(string $InstanceID, int $TemplateID, string $NewFriendlyName, string $Secret, bool $RestartIfPreviouslyRunning) {
            $data = array(
                "InstanceID" => $InstanceID,
                "TemplateID" => $TemplateID,
                "NewFriendlyName" => $NewFriendlyName,
                "Secret" => $Secret,
                "RestartIfPreviouslyRunning" => $RestartIfPreviouslyRunning,
            );
            return $this->APICall("ADSModule/ApplyTemplate", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Friendly  False
        * @param bool $IsHTTPS  False
        * @param string $Host  False
        * @param int $Port  False
        * @param string $InstanceID  False
        * @return ActionResult
        */
        function AttachADS(string $Friendly, bool $IsHTTPS, string $Host, int $Port, string $InstanceID) {
            $data = array(
                "Friendly" => $Friendly,
                "IsHTTPS" => $IsHTTPS,
                "Host" => $Host,
                "Port" => $Port,
                "InstanceID" => $InstanceID,
            );
            return $this->APICall("ADSModule/AttachADS", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param int $Id  False
        * @param string $NewName  False
        * @return ActionResult
        */
        function CloneTemplate(int $Id, string $NewName) {
            $data = array(
                "Id" => $Id,
                "NewName" => $NewName,
            );
            return $this->APICall("ADSModule/CloneTemplate", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceName  False
        * @return ActionResult
        */
        function ConvertToManaged(string $InstanceName) {
            $data = array(
                "InstanceName" => $InstanceName,
            );
            return $this->APICall("ADSModule/ConvertToManaged", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Name  False
        * @return ActionResult
        */
        function CreateDeploymentTemplate(string $Name) {
            $data = array(
                "Name" => $Name,
            );
            return $this->APICall("ADSModule/CreateDeploymentTemplate", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $TargetADSInstance  False
        * @param string $NewInstanceId  False
        * @param string $Module  False
        * @param string $InstanceName  False
        * @param string $FriendlyName  False
        * @param string $IPBinding  False
        * @param int $PortNumber  False
        * @param string $AdminUsername  False
        * @param string $AdminPassword  False
        * @param ArrayObject $ProvisionSettings  False
        * @param bool $AutoConfigure When enabled, all settings other than the Module, Target and FriendlyName are ignored and replaced with automatically generated values. True
        * @param stdClass $PostCreate  True
        * @param bool $StartOnBoot  True
        * @param string $DisplayImageSource  True
        * @param int $TargetDatastore  True
        * @return ActionResult
        */
        function CreateInstance(string $TargetADSInstance, string $NewInstanceId, string $Module, string $InstanceName, string $FriendlyName, string $IPBinding, int $PortNumber, string $AdminUsername, string $AdminPassword, ArrayObject $ProvisionSettings, bool $AutoConfigure, stdClass $PostCreate, bool $StartOnBoot, string $DisplayImageSource, int $TargetDatastore) {
            $data = array(
                "TargetADSInstance" => $TargetADSInstance,
                "NewInstanceId" => $NewInstanceId,
                "Module" => $Module,
                "InstanceName" => $InstanceName,
                "FriendlyName" => $FriendlyName,
                "IPBinding" => $IPBinding,
                "PortNumber" => $PortNumber,
                "AdminUsername" => $AdminUsername,
                "AdminPassword" => $AdminPassword,
                "ProvisionSettings" => $ProvisionSettings,
                "AutoConfigure" => $AutoConfigure,
                "PostCreate" => $PostCreate,
                "StartOnBoot" => $StartOnBoot,
                "DisplayImageSource" => $DisplayImageSource,
                "TargetDatastore" => $TargetDatastore,
            );
            return $this->APICall("ADSModule/CreateInstance", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param stdClass $Instance  False
        * @param stdClass $PostCreate  True
        * @return ActionResult
        */
        function CreateLocalInstance(stdClass $Instance, stdClass $PostCreate) {
            $data = array(
                "Instance" => $Instance,
                "PostCreate" => $PostCreate,
            );
            return $this->APICall("ADSModule/CreateLocalInstance", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param int $id  False
        * @return ActionResult
        */
        function DeleteDatastore(int $id) {
            $data = array(
                "id" => $id,
            );
            return $this->APICall("ADSModule/DeleteDatastore", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param int $Id  False
        * @return ActionResult
        */
        function DeleteDeploymentTemplate(int $Id) {
            $data = array(
                "Id" => $Id,
            );
            return $this->APICall("ADSModule/DeleteDeploymentTemplate", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceName  False
        * @return Result
        */
        function DeleteInstance(string $InstanceName) {
            $data = array(
                "InstanceName" => $InstanceName,
            );
            return $this->APICall("ADSModule/DeleteInstance", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceId  False
        * @return Task
        */
        function DeleteInstanceUsers(string $InstanceId) {
            $data = array(
                "InstanceId" => $InstanceId,
            );
            return $this->APICall("ADSModule/DeleteInstanceUsers", Task::class, $data);
        }

        /**
        * A dictionary of setting nodes and values to create the new instance with. Identical in function to the provisioning arguments in the template itself.
        * Name Description Optional
        * @param int $TemplateID The ID of the template to be deployed, as per the Template Management UI in AMP itself. False
        * @param string $NewUsername If specified, AMP will create a new user with this name for this instance. Must be unique. If this user already exists, this will be ignored but the new instance will be assigned to this user. True
        * @param string $NewPassword If 'NewUsername' is specified and the user doesn't already exist, the password that will be assigned to this user. True
        * @param string $NewEmail If 'NewUsername' is specified and the user doesn't already exist, the email address that will be assigned to this user. True
        * @param ArrayObject $RequiredTags If specified, AMP will only deploy this template to targets that have every single 'tag' specified in their target configuration. You can adjust this via the controller by clicking 'Edit' on the target settings. True
        * @param string $Tag Unrelated to RequiredTags. This is to uniquely identify this instance to your own systems. It may be something like an order ID or service ID so you can find the associated instance again at a later time. If 'UseTagAsInstanceName' is enabled, then this will also be used as the instance name for the created instance - but it must be unique. True
        * @param string $FriendlyName A friendly name for this instance. If left blank, AMP will generate one for you. True
        * @param string $Secret Must be a non-empty strong in order to get a callback on deployment state change. This secret will be passed back to you in the callback so you can verify the request. True
        * @param stdClass $PostCreate 0: Do nothing, 1: Start instance only, 2: Start instance and update application, 3: Full application startup. True
        * @param ArrayObject $ExtraProvisionSettings A dictionary of setting nodes and values to create the new instance with. Identical in function to the provisioning arguments in the template itself. True
        * @return Result
        */
        function DeployTemplate(int $TemplateID, string $NewUsername, string $NewPassword, string $NewEmail, ArrayObject $RequiredTags, string $Tag, string $FriendlyName, string $Secret, stdClass $PostCreate, ArrayObject $ExtraProvisionSettings) {
            $data = array(
                "TemplateID" => $TemplateID,
                "NewUsername" => $NewUsername,
                "NewPassword" => $NewPassword,
                "NewEmail" => $NewEmail,
                "RequiredTags" => $RequiredTags,
                "Tag" => $Tag,
                "FriendlyName" => $FriendlyName,
                "Secret" => $Secret,
                "PostCreate" => $PostCreate,
                "ExtraProvisionSettings" => $ExtraProvisionSettings,
            );
            return $this->APICall("ADSModule/DeployTemplate", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Id  False
        * @return ActionResult
        */
        function DetatchTarget(string $Id) {
            $data = array(
                "Id" => $Id,
            );
            return $this->APICall("ADSModule/DetatchTarget", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $SourceArchive  False
        * @return Task
        */
        function ExtractEverywhere(string $SourceArchive) {
            $data = array(
                "SourceArchive" => $SourceArchive,
            );
            return $this->APICall("ADSModule/ExtractEverywhere", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $instanceId  False
        * @return Result
        */
        function GetApplicationEndpoints(string $instanceId) {
            $data = array(
                "instanceId" => $instanceId,
            );
            return $this->APICall("ADSModule/GetApplicationEndpoints", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param int $id  False
        * @return InstanceDatastore
        */
        function GetDatastore(int $id) {
            $data = array(
                "id" => $id,
            );
            return $this->APICall("ADSModule/GetDatastore", InstanceDatastore::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param int $datastoreId  False
        * @return Result
        */
        function GetDatastoreInstances(int $datastoreId) {
            $data = array(
                "datastoreId" => $datastoreId,
            );
            return $this->APICall("ADSModule/GetDatastoreInstances", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function GetDatastores() {
            $data = array(
            );
            return $this->APICall("ADSModule/GetDatastores", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function GetDeploymentTemplates() {
            $data = array(
            );
            return $this->APICall("ADSModule/GetDeploymentTemplates", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $GroupId  False
        * @return Result
        */
        function GetGroup(string $GroupId) {
            $data = array(
                "GroupId" => $GroupId,
            );
            return $this->APICall("ADSModule/GetGroup", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceId  False
        * @return ArrayObject
        */
        function GetInstance(string $InstanceId) {
            $data = array(
                "InstanceId" => $InstanceId,
            );
            return $this->APICall("ADSModule/GetInstance", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceName  False
        * @return Result
        */
        function GetInstanceNetworkInfo(string $InstanceName) {
            $data = array(
                "InstanceName" => $InstanceName,
            );
            return $this->APICall("ADSModule/GetInstanceNetworkInfo", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function GetInstanceStatuses() {
            $data = array(
            );
            return $this->APICall("ADSModule/GetInstanceStatuses", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function GetInstances() {
            $data = array(
            );
            return $this->APICall("ADSModule/GetInstances", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function GetLocalInstances() {
            $data = array(
            );
            return $this->APICall("ADSModule/GetLocalInstances", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $ModuleName  False
        * @return Result
        */
        function GetProvisionArguments(string $ModuleName) {
            $data = array(
                "ModuleName" => $ModuleName,
            );
            return $this->APICall("ADSModule/GetProvisionArguments", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return ArrayObject
        */
        function GetProvisionFitness() {
            $data = array(
            );
            return $this->APICall("ADSModule/GetProvisionFitness", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function GetSupportedApplications() {
            $data = array(
            );
            return $this->APICall("ADSModule/GetSupportedApplications", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return RemoteTargetInfo
        */
        function GetTargetInfo() {
            $data = array(
            );
            return $this->APICall("ADSModule/GetTargetInfo", RemoteTargetInfo::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $ForModule  False
        * @param string $SettingNode  False
        * @param ArrayObject $Values  False
        * @return Task
        */
        function HandoutInstanceConfigs(string $ForModule, string $SettingNode, ArrayObject $Values) {
            $data = array(
                "ForModule" => $ForModule,
                "SettingNode" => $SettingNode,
                "Values" => $Values,
            );
            return $this->APICall("ADSModule/HandoutInstanceConfigs", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceId  False
        * @return ActionResult
        */
        function ManageInstance(string $InstanceId) {
            $data = array(
                "InstanceId" => $InstanceId,
            );
            return $this->APICall("ADSModule/ManageInstance", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $instanceId  False
        * @param int $PortNumber  False
        * @param int $Range  False
        * @param stdClass $Protocol  False
        * @param string $Description  False
        * @param bool $Open  False
        * @return Task
        */
        function ModifyCustomFirewallRule(string $instanceId, int $PortNumber, int $Range, stdClass $Protocol, string $Description, bool $Open) {
            $data = array(
                "instanceId" => $instanceId,
                "PortNumber" => $PortNumber,
                "Range" => $Range,
                "Protocol" => $Protocol,
                "Description" => $Description,
                "Open" => $Open,
            );
            return $this->APICall("ADSModule/ModifyCustomFirewallRule", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $instanceId  False
        * @param int $datastoreId  False
        * @return Task
        */
        function MoveInstanceDatastore(string $instanceId, int $datastoreId) {
            $data = array(
                "instanceId" => $instanceId,
                "datastoreId" => $datastoreId,
            );
            return $this->APICall("ADSModule/MoveInstanceDatastore", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function ReactivateLocalInstances() {
            $data = array(
            );
            return $this->APICall("ADSModule/ReactivateLocalInstances", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return stdClass
        */
        function RefreshAppCache() {
            $data = array(
            );
            return $this->APICall("ADSModule/RefreshAppCache", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $GroupId  False
        * @return ActionResult
        */
        function RefreshGroup(string $GroupId) {
            $data = array(
                "GroupId" => $GroupId,
            );
            return $this->APICall("ADSModule/RefreshGroup", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceId  False
        * @return Task
        */
        function RefreshInstanceConfig(string $InstanceId) {
            $data = array(
                "InstanceId" => $InstanceId,
            );
            return $this->APICall("ADSModule/RefreshInstanceConfig", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return stdClass
        */
        function RefreshRemoteConfigStores() {
            $data = array(
            );
            return $this->APICall("ADSModule/RefreshRemoteConfigStores", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $controllerUrl  False
        * @param string $myUrl  False
        * @param string $username  False
        * @param string $password  False
        * @param string $twoFactorToken  False
        * @param string $friendlyName  False
        * @return Task
        */
        function RegisterTarget(string $controllerUrl, string $myUrl, string $username, string $password, string $twoFactorToken, string $friendlyName) {
            $data = array(
                "controllerUrl" => $controllerUrl,
                "myUrl" => $myUrl,
                "username" => $username,
                "password" => $password,
                "twoFactorToken" => $twoFactorToken,
                "friendlyName" => $friendlyName,
            );
            return $this->APICall("ADSModule/RegisterTarget", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param int $id  False
        * @return Result
        */
        function RepairDatastore(int $id) {
            $data = array(
                "id" => $id,
            );
            return $this->APICall("ADSModule/RepairDatastore", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param int $datastoreId  False
        * @return Result
        */
        function RequestDatastoreSizeCalculation(int $datastoreId) {
            $data = array(
                "datastoreId" => $datastoreId,
            );
            return $this->APICall("ADSModule/RequestDatastoreSizeCalculation", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceName  False
        * @return ActionResult
        */
        function RestartInstance(string $InstanceName) {
            $data = array(
                "InstanceName" => $InstanceName,
            );
            return $this->APICall("ADSModule/RestartInstance", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $id  False
        * @param string $REQ_RAWJSON  False
        * @return Task
        */
        function Servers(string $id, string $REQ_RAWJSON) {
            $data = array(
                "id" => $id,
                "REQ_RAWJSON" => $REQ_RAWJSON,
            );
            return $this->APICall("ADSModule/Servers", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceName  False
        * @param string $SettingNode  False
        * @param string $Value  False
        * @return Task
        */
        function SetInstanceConfig(string $InstanceName, string $SettingNode, string $Value) {
            $data = array(
                "InstanceName" => $InstanceName,
                "SettingNode" => $SettingNode,
                "Value" => $Value,
            );
            return $this->APICall("ADSModule/SetInstanceConfig", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceId  False
        * @param ArrayObject $PortMappings  False
        * @return Task
        */
        function SetInstanceNetworkInfo(string $InstanceId, ArrayObject $PortMappings) {
            $data = array(
                "InstanceId" => $InstanceId,
                "PortMappings" => $PortMappings,
            );
            return $this->APICall("ADSModule/SetInstanceNetworkInfo", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceName  False
        * @param bool $Suspended  False
        * @return Task
        */
        function SetInstanceSuspended(string $InstanceName, bool $Suspended) {
            $data = array(
                "InstanceName" => $InstanceName,
                "Suspended" => $Suspended,
            );
            return $this->APICall("ADSModule/SetInstanceSuspended", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Task
        */
        function StartAllInstances() {
            $data = array(
            );
            return $this->APICall("ADSModule/StartAllInstances", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceName  False
        * @return Task
        */
        function StartInstance(string $InstanceName) {
            $data = array(
                "InstanceName" => $InstanceName,
            );
            return $this->APICall("ADSModule/StartInstance", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Task
        */
        function StopAllInstances() {
            $data = array(
            );
            return $this->APICall("ADSModule/StopAllInstances", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceName  False
        * @return ActionResult
        */
        function StopInstance(string $InstanceName) {
            $data = array(
                "InstanceName" => $InstanceName,
            );
            return $this->APICall("ADSModule/StopInstance", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $url  False
        * @param string $username  False
        * @param string $password  False
        * @return Task
        */
        function TestADSLoginDetails(string $url, string $username, string $password) {
            $data = array(
                "url" => $url,
                "username" => $username,
                "password" => $password,
            );
            return $this->APICall("ADSModule/TestADSLoginDetails", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param InstanceDatastore $updatedDatastore  False
        * @return ActionResult
        */
        function UpdateDatastore(InstanceDatastore $updatedDatastore) {
            $data = array(
                "updatedDatastore" => $updatedDatastore,
            );
            return $this->APICall("ADSModule/UpdateDatastore", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param stdClass $templateToUpdate  False
        * @return ActionResult
        */
        function UpdateDeploymentTemplate(stdClass $templateToUpdate) {
            $data = array(
                "templateToUpdate" => $templateToUpdate,
            );
            return $this->APICall("ADSModule/UpdateDeploymentTemplate", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceId  False
        * @param string $FriendlyName  False
        * @param string $Description  False
        * @param bool $StartOnBoot  False
        * @param bool $Suspended  False
        * @param bool $ExcludeFromFirewall  False
        * @param bool $RunInContainer  False
        * @param int $ContainerMemory  False
        * @param stdClass $MemoryPolicy  False
        * @param stdClass $ContainerMaxCPU  False
        * @param string $ContainerImage  False
        * @return Task
        */
        function UpdateInstanceInfo(string $InstanceId, string $FriendlyName, string $Description, bool $StartOnBoot, bool $Suspended, bool $ExcludeFromFirewall, bool $RunInContainer, int $ContainerMemory, stdClass $MemoryPolicy, stdClass $ContainerMaxCPU, string $ContainerImage) {
            $data = array(
                "InstanceId" => $InstanceId,
                "FriendlyName" => $FriendlyName,
                "Description" => $Description,
                "StartOnBoot" => $StartOnBoot,
                "Suspended" => $Suspended,
                "ExcludeFromFirewall" => $ExcludeFromFirewall,
                "RunInContainer" => $RunInContainer,
                "ContainerMemory" => $ContainerMemory,
                "MemoryPolicy" => $MemoryPolicy,
                "ContainerMaxCPU" => $ContainerMaxCPU,
                "ContainerImage" => $ContainerImage,
            );
            return $this->APICall("ADSModule/UpdateInstanceInfo", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $TargetID  False
        * @return stdClass
        */
        function UpdateTarget(string $TargetID) {
            $data = array(
                "TargetID" => $TargetID,
            );
            return $this->APICall("ADSModule/UpdateTarget", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Id  False
        * @param string $FriendlyName  False
        * @param string $Url  False
        * @param string $Description  False
        * @param ArrayObject $Tags  False
        * @return ActionResult
        */
        function UpdateTargetInfo(string $Id, string $FriendlyName, string $Url, string $Description, ArrayObject $Tags) {
            $data = array(
                "Id" => $Id,
                "FriendlyName" => $FriendlyName,
                "Url" => $Url,
                "Description" => $Description,
                "Tags" => $Tags,
            );
            return $this->APICall("ADSModule/UpdateTargetInfo", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param bool $RestartRunning  False
        * @return Task
        */
        function UpgradeAllInstances(bool $RestartRunning) {
            $data = array(
                "RestartRunning" => $RestartRunning,
            );
            return $this->APICall("ADSModule/UpgradeAllInstances", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $InstanceName  False
        * @return ActionResult
        */
        function UpgradeInstance(string $InstanceName) {
            $data = array(
                "InstanceName" => $InstanceName,
            );
            return $this->APICall("ADSModule/UpgradeInstance", ActionResult::class, $data);
        }

    }
?>