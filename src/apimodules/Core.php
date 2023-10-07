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
        * @return stdClass
        */
        function AcknowledgeAMPUpdate() {
            $data = array(
            );
            return $this->APICall("Core/AcknowledgeAMPUpdate", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $LicenceKey  False
        * @param bool $QueryOnly  True
        * @return Task
        */
        function ActivateAMPLicence(string $LicenceKey, bool $QueryOnly) {
            $data = array(
                "LicenceKey" => $LicenceKey,
                "QueryOnly" => $QueryOnly,
            );
            return $this->APICall("Core/ActivateAMPLicence", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $triggerId  False
        * @return ActionResult
        */
        function AddEventTrigger(string $triggerId) {
            $data = array(
                "triggerId" => $triggerId,
            );
            return $this->APICall("Core/AddEventTrigger", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param ArrayObject $months  False
        * @param ArrayObject $days  False
        * @param ArrayObject $hours  False
        * @param ArrayObject $minutes  False
        * @param ArrayObject $daysOfMonth  False
        * @param string $description  False
        * @return ActionResult
        */
        function AddIntervalTrigger(ArrayObject $months, ArrayObject $days, ArrayObject $hours, ArrayObject $minutes, ArrayObject $daysOfMonth, string $description) {
            $data = array(
                "months" => $months,
                "days" => $days,
                "hours" => $hours,
                "minutes" => $minutes,
                "daysOfMonth" => $daysOfMonth,
                "description" => $description,
            );
            return $this->APICall("Core/AddIntervalTrigger", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $TriggerID  False
        * @param string $MethodID  False
        * @param ArrayObject $ParameterMapping  False
        * @return ActionResult
        */
        function AddTask(string $TriggerID, string $MethodID, ArrayObject $ParameterMapping) {
            $data = array(
                "TriggerID" => $TriggerID,
                "MethodID" => $MethodID,
                "ParameterMapping" => $ParameterMapping,
            );
            return $this->APICall("Core/AddTask", ActionResult::class, $data);
        }

        /**
        * 
     * DEV: Async test method
        * Name Description Optional
        * @return Task
        */
        function AsyncTest() {
            $data = array(
            );
            return $this->APICall("Core/AsyncTest", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $TaskId  False
        * @return ActionResult
        */
        function CancelTask(string $TaskId) {
            $data = array(
                "TaskId" => $TaskId,
            );
            return $this->APICall("Core/CancelTask", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $TriggerID  False
        * @param string $TaskID  False
        * @param int $NewOrder  False
        * @return ActionResult
        */
        function ChangeTaskOrder(string $TriggerID, string $TaskID, int $NewOrder) {
            $data = array(
                "TriggerID" => $TriggerID,
                "TaskID" => $TaskID,
                "NewOrder" => $NewOrder,
            );
            return $this->APICall("Core/ChangeTaskOrder", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Username  False
        * @param string $OldPassword  False
        * @param string $NewPassword  False
        * @param string $TwoFactorPIN  False
        * @return Task
        */
        function ChangeUserPassword(string $Username, string $OldPassword, string $NewPassword, string $TwoFactorPIN) {
            $data = array(
                "Username" => $Username,
                "OldPassword" => $OldPassword,
                "NewPassword" => $NewPassword,
                "TwoFactorPIN" => $TwoFactorPIN,
            );
            return $this->APICall("Core/ChangeUserPassword", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Username  False
        * @param string $TwoFactorCode  False
        * @return Task
        */
        function ConfirmTwoFactorSetup(string $Username, string $TwoFactorCode) {
            $data = array(
                "Username" => $Username,
                "TwoFactorCode" => $TwoFactorCode,
            );
            return $this->APICall("Core/ConfirmTwoFactorSetup", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Name  False
        * @param bool $AsCommonRole  True
        * @return Task
        */
        function CreateRole(string $Name, bool $AsCommonRole) {
            $data = array(
                "Name" => $Name,
                "AsCommonRole" => $AsCommonRole,
            );
            return $this->APICall("Core/CreateRole", Task::class, $data);
        }

        /**
        * 
     * DEV: Creates a non-ending task with 50% progress for testing purposes
        * Name Description Optional
        * @return stdClass
        */
        function CreateTestTask() {
            $data = array(
            );
            return $this->APICall("Core/CreateTestTask", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Username  False
        * @return Task
        */
        function CreateUser(string $Username) {
            $data = array(
                "Username" => $Username,
            );
            return $this->APICall("Core/CreateUser", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $PermissionNode  False
        * @return bool
        */
        function CurrentSessionHasPermission(string $PermissionNode) {
            $data = array(
                "PermissionNode" => $PermissionNode,
            );
            return $this->APICall("Core/CurrentSessionHasPermission", bool::class, $data);
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
            return $this->APICall("Core/DeleteInstanceUsers", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $RoleId  False
        * @return Task
        */
        function DeleteRole(string $RoleId) {
            $data = array(
                "RoleId" => $RoleId,
            );
            return $this->APICall("Core/DeleteRole", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $TriggerID  False
        * @param string $TaskID  False
        * @return ActionResult
        */
        function DeleteTask(string $TriggerID, string $TaskID) {
            $data = array(
                "TriggerID" => $TriggerID,
                "TaskID" => $TaskID,
            );
            return $this->APICall("Core/DeleteTask", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $TriggerID  False
        * @return ActionResult
        */
        function DeleteTrigger(string $TriggerID) {
            $data = array(
                "TriggerID" => $TriggerID,
            );
            return $this->APICall("Core/DeleteTrigger", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Username  False
        * @return Task
        */
        function DeleteUser(string $Username) {
            $data = array(
                "Username" => $Username,
            );
            return $this->APICall("Core/DeleteUser", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Password  False
        * @param string $TwoFactorCode  False
        * @return Task
        */
        function DisableTwoFactor(string $Password, string $TwoFactorCode) {
            $data = array(
                "Password" => $Password,
                "TwoFactorCode" => $TwoFactorCode,
            );
            return $this->APICall("Core/DisableTwoFactor", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return ActionResult
        */
        function DismissAllTasks() {
            $data = array(
            );
            return $this->APICall("Core/DismissAllTasks", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $TaskId  False
        * @return ActionResult
        */
        function DismissTask(string $TaskId) {
            $data = array(
                "TaskId" => $TaskId,
            );
            return $this->APICall("Core/DismissTask", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Id  False
        * @param ArrayObject $months  False
        * @param ArrayObject $days  False
        * @param ArrayObject $hours  False
        * @param ArrayObject $minutes  False
        * @param ArrayObject $daysOfMonth  False
        * @param string $description  False
        * @return ActionResult
        */
        function EditIntervalTrigger(string $Id, ArrayObject $months, ArrayObject $days, ArrayObject $hours, ArrayObject $minutes, ArrayObject $daysOfMonth, string $description) {
            $data = array(
                "Id" => $Id,
                "months" => $months,
                "days" => $days,
                "hours" => $hours,
                "minutes" => $minutes,
                "daysOfMonth" => $daysOfMonth,
                "description" => $description,
            );
            return $this->APICall("Core/EditIntervalTrigger", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $TriggerID  False
        * @param string $TaskID  False
        * @param ArrayObject $ParameterMapping  False
        * @return ActionResult
        */
        function EditTask(string $TriggerID, string $TaskID, ArrayObject $ParameterMapping) {
            $data = array(
                "TriggerID" => $TriggerID,
                "TaskID" => $TaskID,
                "ParameterMapping" => $ParameterMapping,
            );
            return $this->APICall("Core/EditTask", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Username  False
        * @param string $Password  False
        * @return Task
        */
        function EnableTwoFactor(string $Username, string $Password) {
            $data = array(
                "Username" => $Username,
                "Password" => $Password,
            );
            return $this->APICall("Core/EnableTwoFactor", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Id  False
        * @return stdClass
        */
        function EndUserSession(string $Id) {
            $data = array(
                "Id" => $Id,
            );
            return $this->APICall("Core/EndUserSession", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $RoleId  False
        * @return Task
        */
        function GetAMPRolePermissions(string $RoleId) {
            $data = array(
                "RoleId" => $RoleId,
            );
            return $this->APICall("Core/GetAMPRolePermissions", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Username  False
        * @return Task
        */
        function GetAMPUserInfo(string $Username) {
            $data = array(
                "Username" => $Username,
            );
            return $this->APICall("Core/GetAMPUserInfo", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Task
        */
        function GetAMPUsersSummary() {
            $data = array(
            );
            return $this->APICall("Core/GetAMPUsersSummary", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return ArrayObject
        */
        function GetAPISpec() {
            $data = array(
            );
            return $this->APICall("Core/GetAPISpec", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function GetActiveAMPSessions() {
            $data = array(
            );
            return $this->APICall("Core/GetActiveAMPSessions", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Task
        */
        function GetAllAMPUserInfo() {
            $data = array(
            );
            return $this->APICall("Core/GetAllAMPUserInfo", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param stdClass $Before  False
        * @param int $Count  False
        * @return Result
        */
        function GetAuditLogEntries(stdClass $Before, int $Count) {
            $data = array(
                "Before" => $Before,
                "Count" => $Count,
            );
            return $this->APICall("Core/GetAuditLogEntries", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $node  False
        * @return ArrayObject
        */
        function GetConfig(string $node) {
            $data = array(
                "node" => $node,
            );
            return $this->APICall("Core/GetConfig", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param ArrayObject $nodes  False
        * @return Result
        */
        function GetConfigs(ArrayObject $nodes) {
            $data = array(
                "nodes" => $nodes,
            );
            return $this->APICall("Core/GetConfigs", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return ArrayObject
        */
        function GetDiagnosticsInfo() {
            $data = array(
            );
            return $this->APICall("Core/GetDiagnosticsInfo", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function GetModuleInfo() {
            $data = array(
            );
            return $this->APICall("Core/GetModuleInfo", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return string
        */
        function GetNewGuid() {
            $data = array(
            );
            return $this->APICall("Core/GetNewGuid", string::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return ArrayObject
        */
        function GetPermissionsSpec() {
            $data = array(
            );
            return $this->APICall("Core/GetPermissionsSpec", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function GetPortSummaries() {
            $data = array(
            );
            return $this->APICall("Core/GetPortSummaries", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return ArrayObject
        */
        function GetProvisionSpec() {
            $data = array(
            );
            return $this->APICall("Core/GetProvisionSpec", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Description  True
        * @param bool $IsTemporary  True
        * @return Task
        */
        function GetRemoteLoginToken(string $Description, bool $IsTemporary) {
            $data = array(
                "Description" => $Description,
                "IsTemporary" => $IsTemporary,
            );
            return $this->APICall("Core/GetRemoteLoginToken", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $RoleId  False
        * @return Task
        */
        function GetRole(string $RoleId) {
            $data = array(
                "RoleId" => $RoleId,
            );
            return $this->APICall("Core/GetRole", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Task
        */
        function GetRoleData() {
            $data = array(
            );
            return $this->APICall("Core/GetRoleData", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Task
        */
        function GetRoleIds() {
            $data = array(
            );
            return $this->APICall("Core/GetRoleIds", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return stdClass
        */
        function GetScheduleData() {
            $data = array(
            );
            return $this->APICall("Core/GetScheduleData", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $SettingNode  False
        * @param bool $WithRefresh  True
        * @return ArrayObject
        */
        function GetSettingValues(string $SettingNode, bool $WithRefresh) {
            $data = array(
                "SettingNode" => $SettingNode,
                "WithRefresh" => $WithRefresh,
            );
            return $this->APICall("Core/GetSettingValues", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return SettingsSpec
        */
        function GetSettingsSpec() {
            $data = array(
            );
            return $this->APICall("Core/GetSettingsSpec", SettingsSpec::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Status
        */
        function GetStatus() {
            $data = array(
            );
            return $this->APICall("Core/GetStatus", Status::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function GetTasks() {
            $data = array(
            );
            return $this->APICall("Core/GetTasks", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Id  False
        * @return stdClass
        */
        function GetTimeIntervalTrigger(string $Id) {
            $data = array(
                "Id" => $Id,
            );
            return $this->APICall("Core/GetTimeIntervalTrigger", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function GetUpdateInfo() {
            $data = array(
            );
            return $this->APICall("Core/GetUpdateInfo", Result::class, $data);
        }

        /**
        * 
     * Gets changes to the server status, in addition to any notifications or console output that have occured since the last time GetUpdates() was called by the current session.
        * Name Description Optional
        * @return Updates
        */
        function GetUpdates() {
            $data = array(
            );
            return $this->APICall("Core/GetUpdates", Updates::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return stdClass
        */
        function GetUserActionsSpec() {
            $data = array(
            );
            return $this->APICall("Core/GetUserActionsSpec", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $UID  False
        * @return ArrayObject
        */
        function GetUserInfo(string $UID) {
            $data = array(
                "UID" => $UID,
            );
            return $this->APICall("Core/GetUserInfo", ArrayObject::class, $data);
        }

        /**
        * 
     * Returns a list of in-application users
        * Name Description Optional
        * @return ArrayObject
        */
        function GetUserList() {
            $data = array(
            );
            return $this->APICall("Core/GetUserList", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return ActionResult
        */
        function GetWebauthnChallenge() {
            $data = array(
            );
            return $this->APICall("Core/GetWebauthnChallenge", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $username  False
        * @return stdClass
        */
        function GetWebauthnCredentialIDs(string $username) {
            $data = array(
                "username" => $username,
            );
            return $this->APICall("Core/GetWebauthnCredentialIDs", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function GetWebauthnCredentialSummaries() {
            $data = array(
            );
            return $this->APICall("Core/GetWebauthnCredentialSummaries", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return stdClass
        */
        function GetWebserverMetrics() {
            $data = array(
            );
            return $this->APICall("Core/GetWebserverMetrics", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return stdClass
        */
        function Kill() {
            $data = array(
            );
            return $this->APICall("Core/Kill", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $username  False
        * @param string $password  False
        * @param string $token  False
        * @param bool $rememberMe  False
        * @return LoginResult
        */
        function Login(string $username, string $password, string $token, bool $rememberMe) {
            $data = array(
                "username" => $username,
                "password" => $password,
                "token" => $token,
                "rememberMe" => $rememberMe,
            );
            return $this->APICall("Core/Login", LoginResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return stdClass
        */
        function Logout() {
            $data = array(
            );
            return $this->APICall("Core/Logout", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Node  False
        * @return ActionResult
        */
        function RefreshSettingValueList(string $Node) {
            $data = array(
                "Node" => $Node,
            );
            return $this->APICall("Core/RefreshSettingValueList", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return stdClass
        */
        function RefreshSettingsSourceCache() {
            $data = array(
            );
            return $this->APICall("Core/RefreshSettingsSourceCache", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $RoleId  False
        * @param string $NewName  False
        * @return Task
        */
        function RenameRole(string $RoleId, string $NewName) {
            $data = array(
                "RoleId" => $RoleId,
                "NewName" => $NewName,
            );
            return $this->APICall("Core/RenameRole", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Username  False
        * @param string $NewPassword  False
        * @return Task
        */
        function ResetUserPassword(string $Username, string $NewPassword) {
            $data = array(
                "Username" => $Username,
                "NewPassword" => $NewPassword,
            );
            return $this->APICall("Core/ResetUserPassword", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return ActionResult
        */
        function Restart() {
            $data = array(
            );
            return $this->APICall("Core/Restart", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return stdClass
        */
        function RestartAMP() {
            $data = array(
            );
            return $this->APICall("Core/RestartAMP", stdClass::class, $data);
        }

        /**
        * 
     * Allows the service to be re-started after previously being suspended.
        * Name Description Optional
        * @return stdClass
        */
        function Resume() {
            $data = array(
            );
            return $this->APICall("Core/Resume", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param int $ID  False
        * @return ActionResult
        */
        function RevokeWebauthnCredential(int $ID) {
            $data = array(
                "ID" => $ID,
            );
            return $this->APICall("Core/RevokeWebauthnCredential", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $triggerId  False
        * @return ActionResult
        */
        function RunEventTriggerImmediately(string $triggerId) {
            $data = array(
                "triggerId" => $triggerId,
            );
            return $this->APICall("Core/RunEventTriggerImmediately", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $message  False
        * @return stdClass
        */
        function SendConsoleMessage(string $message) {
            $data = array(
                "message" => $message,
            );
            return $this->APICall("Core/SendConsoleMessage", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $RoleId  False
        * @param string $PermissionNode  False
        * @param bool $Enabled  False
        * @return Task
        */
        function SetAMPRolePermission(string $RoleId, string $PermissionNode, bool $Enabled) {
            $data = array(
                "RoleId" => $RoleId,
                "PermissionNode" => $PermissionNode,
                "Enabled" => $Enabled,
            );
            return $this->APICall("Core/SetAMPRolePermission", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $UserId  False
        * @param string $RoleId  False
        * @param bool $IsMember  False
        * @return Task
        */
        function SetAMPUserRoleMembership(string $UserId, string $RoleId, bool $IsMember) {
            $data = array(
                "UserId" => $UserId,
                "RoleId" => $RoleId,
                "IsMember" => $IsMember,
            );
            return $this->APICall("Core/SetAMPUserRoleMembership", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $node  False
        * @param string $value  False
        * @return ActionResult
        */
        function SetConfig(string $node, string $value) {
            $data = array(
                "node" => $node,
                "value" => $value,
            );
            return $this->APICall("Core/SetConfig", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param ArrayObject $data  False
        * @return bool
        */
        function SetConfigs(ArrayObject $data) {
            $data = array(
                "data" => $data,
            );
            return $this->APICall("Core/SetConfigs", bool::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Id  False
        * @param bool $Enabled  False
        * @return ActionResult
        */
        function SetTriggerEnabled(string $Id, bool $Enabled) {
            $data = array(
                "Id" => $Id,
                "Enabled" => $Enabled,
            );
            return $this->APICall("Core/SetTriggerEnabled", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return ActionResult
        */
        function Sleep() {
            $data = array(
            );
            return $this->APICall("Core/Sleep", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return ActionResult
        */
        function Start() {
            $data = array(
            );
            return $this->APICall("Core/Start", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return stdClass
        */
        function Stop() {
            $data = array(
            );
            return $this->APICall("Core/Stop", stdClass::class, $data);
        }

        /**
        * 
     * Prevents the current instance from being started, and stops it if it's currently running.
        * Name Description Optional
        * @return stdClass
        */
        function Suspend() {
            $data = array(
            );
            return $this->APICall("Core/Suspend", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return stdClass
        */
        function UpdateAMPInstance() {
            $data = array(
            );
            return $this->APICall("Core/UpdateAMPInstance", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $EmailAddress  False
        * @param string $TwoFactorPIN  False
        * @return Task
        */
        function UpdateAccountInfo(string $EmailAddress, string $TwoFactorPIN) {
            $data = array(
                "EmailAddress" => $EmailAddress,
                "TwoFactorPIN" => $TwoFactorPIN,
            );
            return $this->APICall("Core/UpdateAccountInfo", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return ActionResult
        */
        function UpdateApplication() {
            $data = array(
            );
            return $this->APICall("Core/UpdateApplication", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Username  False
        * @param bool $Disabled  False
        * @param bool $PasswordExpires  False
        * @param bool $CannotChangePassword  False
        * @param bool $MustChangePassword  False
        * @param string $EmailAddress  True
        * @return Task
        */
        function UpdateUserInfo(string $Username, bool $Disabled, bool $PasswordExpires, bool $CannotChangePassword, bool $MustChangePassword, string $EmailAddress) {
            $data = array(
                "Username" => $Username,
                "Disabled" => $Disabled,
                "PasswordExpires" => $PasswordExpires,
                "CannotChangePassword" => $CannotChangePassword,
                "MustChangePassword" => $MustChangePassword,
                "EmailAddress" => $EmailAddress,
            );
            return $this->APICall("Core/UpdateUserInfo", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return stdClass
        */
        function UpgradeAMP() {
            $data = array(
            );
            return $this->APICall("Core/UpgradeAMP", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $attestationObject  False
        * @param string $clientDataJSON  False
        * @param string $description  True
        * @return ActionResult
        */
        function WebauthnRegister(string $attestationObject, string $clientDataJSON, string $description) {
            $data = array(
                "attestationObject" => $attestationObject,
                "clientDataJSON" => $clientDataJSON,
                "description" => $description,
            );
            return $this->APICall("Core/WebauthnRegister", ActionResult::class, $data);
        }

    }
?>