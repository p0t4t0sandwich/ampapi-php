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
        * @return bool
        */
        function AcceptEULA() {
            $data = array(
            );
            return $this->APICall("MinecraftModule/AcceptEULA", bool::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $UserOrUUID  False
        * @return Task
        */
        function AddOPEntry(string $UserOrUUID) {
            $data = array(
                "UserOrUUID" => $UserOrUUID,
            );
            return $this->APICall("MinecraftModule/AddOPEntry", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $UserOrUUID  False
        * @return Task
        */
        function AddToWhitelist(string $UserOrUUID) {
            $data = array(
                "UserOrUUID" => $UserOrUUID,
            );
            return $this->APICall("MinecraftModule/AddToWhitelist", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $ID  False
        * @return stdClass
        */
        function BanUserByID(string $ID) {
            $data = array(
                "ID" => $ID,
            );
            return $this->APICall("MinecraftModule/BanUserByID", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return ArrayObject
        */
        function BukGetCategories() {
            $data = array(
            );
            return $this->APICall("MinecraftModule/BukGetCategories", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param int $pluginId  False
        * @return Task
        */
        function BukGetInstallUpdatePlugin(int $pluginId) {
            $data = array(
                "pluginId" => $pluginId,
            );
            return $this->APICall("MinecraftModule/BukGetInstallUpdatePlugin", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return ArrayObject
        */
        function BukGetInstalledPlugins() {
            $data = array(
            );
            return $this->APICall("MinecraftModule/BukGetInstalledPlugins", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param int $PluginId  False
        * @return ArrayObject
        */
        function BukGetPluginInfo(int $PluginId) {
            $data = array(
                "PluginId" => $PluginId,
            );
            return $this->APICall("MinecraftModule/BukGetPluginInfo", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $CategoryId  False
        * @param int $PageNumber  False
        * @param int $PageSize  False
        * @return ArrayObject
        */
        function BukGetPluginsForCategory(string $CategoryId, int $PageNumber, int $PageSize) {
            $data = array(
                "CategoryId" => $CategoryId,
                "PageNumber" => $PageNumber,
                "PageSize" => $PageSize,
            );
            return $this->APICall("MinecraftModule/BukGetPluginsForCategory", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return ArrayObject
        */
        function BukGetPopularPlugins() {
            $data = array(
            );
            return $this->APICall("MinecraftModule/BukGetPopularPlugins", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param int $PluginId  False
        * @return stdClass
        */
        function BukGetRemovePlugin(int $PluginId) {
            $data = array(
                "PluginId" => $PluginId,
            );
            return $this->APICall("MinecraftModule/BukGetRemovePlugin", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Query  False
        * @param int $PageNumber  False
        * @param int $PageSize  False
        * @return ArrayObject
        */
        function BukGetSearch(string $Query, int $PageNumber, int $PageSize) {
            $data = array(
                "Query" => $Query,
                "PageNumber" => $PageNumber,
                "PageSize" => $PageSize,
            );
            return $this->APICall("MinecraftModule/BukGetSearch", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $ID  False
        * @return stdClass
        */
        function ClearInventoryByID(string $ID) {
            $data = array(
                "ID" => $ID,
            );
            return $this->APICall("MinecraftModule/ClearInventoryByID", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return string
        */
        function GetFailureReason() {
            $data = array(
            );
            return $this->APICall("MinecraftModule/GetFailureReason", string::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $id  False
        * @return string
        */
        function GetHeadByUUID(string $id) {
            $data = array(
                "id" => $id,
            );
            return $this->APICall("MinecraftModule/GetHeadByUUID", string::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return ArrayObject
        */
        function GetOPWhitelist() {
            $data = array(
            );
            return $this->APICall("MinecraftModule/GetOPWhitelist", ArrayObject::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function GetWhitelist() {
            $data = array(
            );
            return $this->APICall("MinecraftModule/GetWhitelist", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $ID  False
        * @return stdClass
        */
        function KickUserByID(string $ID) {
            $data = array(
                "ID" => $ID,
            );
            return $this->APICall("MinecraftModule/KickUserByID", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $ID  False
        * @return stdClass
        */
        function KillByID(string $ID) {
            $data = array(
                "ID" => $ID,
            );
            return $this->APICall("MinecraftModule/KillByID", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function LoadOPList() {
            $data = array(
            );
            return $this->APICall("MinecraftModule/LoadOPList", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $UserOrUUID  False
        * @return stdClass
        */
        function RemoveOPEntry(string $UserOrUUID) {
            $data = array(
                "UserOrUUID" => $UserOrUUID,
            );
            return $this->APICall("MinecraftModule/RemoveOPEntry", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $UserOrUUID  False
        * @return stdClass
        */
        function RemoveWhitelistEntry(string $UserOrUUID) {
            $data = array(
                "UserOrUUID" => $UserOrUUID,
            );
            return $this->APICall("MinecraftModule/RemoveWhitelistEntry", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $ID  False
        * @return stdClass
        */
        function SmiteByID(string $ID) {
            $data = array(
                "ID" => $ID,
            );
            return $this->APICall("MinecraftModule/SmiteByID", stdClass::class, $data);
        }

    }
?>