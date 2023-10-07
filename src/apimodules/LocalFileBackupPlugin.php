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
        * @param string $BackupId  False
        * @return Task
        */
        function DeleteFromS3(string $BackupId) {
            $data = array(
                "BackupId" => $BackupId,
            );
            return $this->APICall("LocalFileBackupPlugin/DeleteFromS3", Task::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $BackupId  False
        * @return stdClass
        */
        function DeleteLocalBackup(string $BackupId) {
            $data = array(
                "BackupId" => $BackupId,
            );
            return $this->APICall("LocalFileBackupPlugin/DeleteLocalBackup", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $BackupId  False
        * @return Result
        */
        function DownloadFromS3(string $BackupId) {
            $data = array(
                "BackupId" => $BackupId,
            );
            return $this->APICall("LocalFileBackupPlugin/DownloadFromS3", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return Result
        */
        function GetBackups() {
            $data = array(
            );
            return $this->APICall("LocalFileBackupPlugin/GetBackups", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $BackupId  False
        * @param bool $DeleteExistingData  True
        * @return ActionResult
        */
        function RestoreBackup(string $BackupId, bool $DeleteExistingData) {
            $data = array(
                "BackupId" => $BackupId,
                "DeleteExistingData" => $DeleteExistingData,
            );
            return $this->APICall("LocalFileBackupPlugin/RestoreBackup", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $BackupId  False
        * @param bool $Sticky  False
        * @return stdClass
        */
        function SetBackupSticky(string $BackupId, bool $Sticky) {
            $data = array(
                "BackupId" => $BackupId,
                "Sticky" => $Sticky,
            );
            return $this->APICall("LocalFileBackupPlugin/SetBackupSticky", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Title  False
        * @param string $Description  False
        * @param bool $Sticky  False
        * @return ActionResult
        */
        function TakeBackup(string $Title, string $Description, bool $Sticky) {
            $data = array(
                "Title" => $Title,
                "Description" => $Description,
                "Sticky" => $Sticky,
            );
            return $this->APICall("LocalFileBackupPlugin/TakeBackup", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $BackupId  False
        * @return Result
        */
        function UploadToS3(string $BackupId) {
            $data = array(
                "BackupId" => $BackupId,
            );
            return $this->APICall("LocalFileBackupPlugin/UploadToS3", Result::class, $data);
        }

    }
?>