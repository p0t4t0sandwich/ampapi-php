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
        * @param string $Filename  False
        * @param string $Data  False
        * @param bool $Delete  False
        * @return stdClass
        */
        function AppendFileChunk(string $Filename, string $Data, bool $Delete) {
            $data = array(
                "Filename" => $Filename,
                "Data" => $Data,
                "Delete" => $Delete,
            );
            return $this->APICall("FileManagerPlugin/AppendFileChunk", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $FilePath  False
        * @return ActionResult
        */
        function CalculateFileMD5Sum(string $FilePath) {
            $data = array(
                "FilePath" => $FilePath,
            );
            return $this->APICall("FileManagerPlugin/CalculateFileMD5Sum", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $ModifyPath  False
        * @param bool $AsDirectory  False
        * @param bool $Exclude  False
        * @return ActionResult
        */
        function ChangeExclusion(string $ModifyPath, bool $AsDirectory, bool $Exclude) {
            $data = array(
                "ModifyPath" => $ModifyPath,
                "AsDirectory" => $AsDirectory,
                "Exclude" => $Exclude,
            );
            return $this->APICall("FileManagerPlugin/ChangeExclusion", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Origin  False
        * @param string $TargetDirectory  False
        * @return ActionResult
        */
        function CopyFile(string $Origin, string $TargetDirectory) {
            $data = array(
                "Origin" => $Origin,
                "TargetDirectory" => $TargetDirectory,
            );
            return $this->APICall("FileManagerPlugin/CopyFile", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $PathToArchive  False
        * @return ActionResult
        */
        function CreateArchive(string $PathToArchive) {
            $data = array(
                "PathToArchive" => $PathToArchive,
            );
            return $this->APICall("FileManagerPlugin/CreateArchive", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $NewPath  False
        * @return ActionResult
        */
        function CreateDirectory(string $NewPath) {
            $data = array(
                "NewPath" => $NewPath,
            );
            return $this->APICall("FileManagerPlugin/CreateDirectory", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Source  False
        * @param string $TargetDirectory  False
        * @return ActionResult
        */
        function DownloadFileFromURL(string $Source, string $TargetDirectory) {
            $data = array(
                "Source" => $Source,
                "TargetDirectory" => $TargetDirectory,
            );
            return $this->APICall("FileManagerPlugin/DownloadFileFromURL", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @return stdClass
        */
        function Dummy() {
            $data = array(
            );
            return $this->APICall("FileManagerPlugin/Dummy", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $TrashDirectoryName  False
        * @return ActionResult
        */
        function EmptyTrash(string $TrashDirectoryName) {
            $data = array(
                "TrashDirectoryName" => $TrashDirectoryName,
            );
            return $this->APICall("FileManagerPlugin/EmptyTrash", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $ArchivePath  False
        * @param string $DestinationPath  True
        * @return ActionResult
        */
        function ExtractArchive(string $ArchivePath, string $DestinationPath) {
            $data = array(
                "ArchivePath" => $ArchivePath,
                "DestinationPath" => $DestinationPath,
            );
            return $this->APICall("FileManagerPlugin/ExtractArchive", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Dir  False
        * @return Result
        */
        function GetDirectoryListing(string $Dir) {
            $data = array(
                "Dir" => $Dir,
            );
            return $this->APICall("FileManagerPlugin/GetDirectoryListing", Result::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Filename  False
        * @param int $Position  False
        * @param int $Length  False
        * @return stdClass
        */
        function GetFileChunk(string $Filename, int $Position, int $Length) {
            $data = array(
                "Filename" => $Filename,
                "Position" => $Position,
                "Length" => $Length,
            );
            return $this->APICall("FileManagerPlugin/GetFileChunk", stdClass::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Filename  False
        * @param int $Offset  False
        * @param int $ChunkSize  True
        * @return ActionResult
        */
        function ReadFileChunk(string $Filename, int $Offset, int $ChunkSize) {
            $data = array(
                "Filename" => $Filename,
                "Offset" => $Offset,
                "ChunkSize" => $ChunkSize,
            );
            return $this->APICall("FileManagerPlugin/ReadFileChunk", ActionResult::class, $data);
        }

        /**
        * The name component of the new directory (not the full path)
        * Name Description Optional
        * @param string $oldDirectory The full path to the old directory False
        * @param string $NewDirectoryName The name component of the new directory (not the full path) False
        * @return ActionResult
        */
        function RenameDirectory(string $oldDirectory, string $NewDirectoryName) {
            $data = array(
                "oldDirectory" => $oldDirectory,
                "NewDirectoryName" => $NewDirectoryName,
            );
            return $this->APICall("FileManagerPlugin/RenameDirectory", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Filename  False
        * @param string $NewFilename  False
        * @return ActionResult
        */
        function RenameFile(string $Filename, string $NewFilename) {
            $data = array(
                "Filename" => $Filename,
                "NewFilename" => $NewFilename,
            );
            return $this->APICall("FileManagerPlugin/RenameFile", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $DirectoryName  False
        * @return ActionResult
        */
        function TrashDirectory(string $DirectoryName) {
            $data = array(
                "DirectoryName" => $DirectoryName,
            );
            return $this->APICall("FileManagerPlugin/TrashDirectory", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Filename  False
        * @return ActionResult
        */
        function TrashFile(string $Filename) {
            $data = array(
                "Filename" => $Filename,
            );
            return $this->APICall("FileManagerPlugin/TrashFile", ActionResult::class, $data);
        }

        /**
        * 
        * Name Description Optional
        * @param string $Filename  False
        * @param string $Data  False
        * @param int $Offset  False
        * @param bool $FinalChunk  False
        * @return ActionResult
        */
        function WriteFileChunk(string $Filename, string $Data, int $Offset, bool $FinalChunk) {
            $data = array(
                "Filename" => $Filename,
                "Data" => $Data,
                "Offset" => $Offset,
                "FinalChunk" => $FinalChunk,
            );
            return $this->APICall("FileManagerPlugin/WriteFileChunk", ActionResult::class, $data);
        }

    }
?>