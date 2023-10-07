<?php
    /**
     * ActionResult - Generic response type for calls that return a result and a reason for failure
     * @author p0t4t0sandwich
     * @property bool $Status true if successful, false if not
     * @property string $Reason reason for failure
     * @template T
     * @property T $Result result of the call
     */
    class ActionResult {
        public $Status;
        public $Reason;
        public $Result;
    }

    /**
     * AMPVersion - AMP version information
     * @author p0t4t0sandwich
     * @property int $Major The major version number
     * @property int $Minor The minor version number
     * @property int $Build The build number
     * @property int $Revision The revision number
     * @property int $MajorRevision The major revision number
     * @property int $MinorRevision The minor revision number
     */
    class AMPVersion {
        public $Major;
        public $Minor;
        public $Build;
        public $Revision;
        public $MajorRevision;
        public $MinorRevision;
    }

    /**
     * Branding - Defines the Branding object as part of the ModuleInfo object
     * @author p0t4t0sandwich
     * @property bool $DisplayBranding Whether to display branding
     * @property string $PageTitle The page title
     * @property string $CompanyName The company name
     * @property string $WelcomeMessage The welcome message
     * @property string $BrandingMessage The branding message
     * @property string $ShortBrandingMessage The short branding message
     * @property string $URL The URL
     * @property string $SupportURL The support URL
     * @property string $SupportText The support text
     * @property string $SubmitTicketURL The submit ticket URL
     * @property string $LogoURL The logo URL
     * @property string $BackgroundURL The background URL
     * @property string $SplashFrameURL The splash frame URL
     * @property string $ForgotPasswordURL The forgot password URL
     */
    class Branding {
        public $DisplayBranding;
        public $PageTitle;
        public $CompanyName;
        public $WelcomeMessage;
        public $BrandingMessage;
        public $ShortBrandingMessage;
        public $URL;
        public $SupportURL;
        public $SupportText;
        public $SubmitTicketURL;
        public $LogoURL;
        public $BackgroundURL;
        public $SplashFrameURL;
        public $ForgotPasswordURL;
    }

    /**
     * ConsoleEntry - Struct for the result of API.Core#GetUpdates.ConsoleEntries
     * @author p0t4t0sandwich
     * @property string $Timestamp The timestamp of the console entry
     * @property string $Source The source of the console entry
     * @property string $SourceId The source ID of the console entry
     * @property string $Type The type of the console entry
     * @property string $Contents The contents of the console entry
     */
    class ConsoleEntry {
        public $Timestamp;
        public $Source;
        public $SourceId;
        public $Type;
        public $Contents;
    }

    /**
     * CPUInfo - CPU information object
     * @author p0t4t0sandwich
     * @property int $Sockets Number of CPU sockets
     * @property int $Cores Number of CPU cores
     * @property int $Threads Number of CPU threads
     * @property int $Vendor CPU vendor
     * @property string $ModelName CPU model name
     * @property int $TotalCores Total number of CPU cores
     * @property int $TotalThreads Total number of CPU threads
     */
    class CPUInfo {
        public $Sockets;
        public $Cores;
        public $Threads;
        public $Vendor;
        public $ModelName;
        public $TotalCores;
        public $TotalThreads;
    }

    /**
     * EndpointInfo - An application endpoint object
     * @author p0t4t0sandwich
     * @property string $DisplayName The display name of the endpoint
     * @property string $Endpoint The endpoint address
     * @property string $Uri The URI of the endpoint
     */
    class EndpointInfo {
        public $DisplayName;
        public $Endpoint;
        public $Uri;
    }

    /**
     * IADSInstance - An ADS instance object
     * @author p0t4t0sandwich
     * @property int $Id The ADS instance ID
     * @property string $InstanceId The instance ID
     * @property string $FriendlyName The friendly name
     * @property string $Description The description
     * @property bool $Disabled Whether the instance is disabled
     * @property bool $IsRemote Whether the instance is remote
     * @property PlatformInfo $Platform The platform information object
     * @property InstanceDatastore[] $Datastores The datastores
     * @property bool $CreatesInContainers Whether the instance creates in containers
     * @property State $State The state
     * @property string $StateReason The state reason
     * @property bool $CanCreate Whether the instance can create
     * @property string $LastUpdated The last updated
     * @property Instance[] $AvailableInstances The available instances
     * @property string[] $AvailableIPs The available IPs
     * @property string $URL The URL
     * @property string[] $Tags The tags
     * @property string[] $TagNames The tag names
     */
    class IADSInstance {
        public $Id;
        public $InstanceId;
        public $FriendlyName;
        public $Description;
        public $Disabled;
        public $IsRemote;
        public $Platform;
        public $Datastores;
        public $CreatesInContainers;
        public $State;
        public $StateReason;
        public $CanCreate;
        public $LastUpdated;
        public $AvailableInstances;
        public $AvailableIPs;
        public $URL;
        public $Tags;
        public $TagNames;
    }

    /**
     * Instance - An instance object
     * @author p0t4t0sandwich
     * @property string $InstanceID The instance ID
     * @property string $TargetID The target ID
     * @property string $InstanceName The instance name
     * @property string $FriendlyName The friendly name
     * @property string $Description The description
     * @property string $Module The module
     * @property string $ModuleDisplayName The module display name
     * @property AMPVersion $AMPVersion The AMP version
     * @property bool $IsHTTPS Whether HTTPS is enabled
     * @property string $IP The IP address
     * @property int $Port The port
     * @property bool $Daemon Whether the instance is a daemon
     * @property bool $DaemonAutostart Whether the instance daemon autostarts
     * @property bool $ExcludeFromFirewall Whether the instance is excluded from the firewall
     * @property bool $Running Whether the instance is running
     * @property State $AppState The application state
     * @property string[] $Tags The tags
     * @property int $DiskUsageMB The disk usage in MB
     * @property string $ReleaseStream The release stream
     * @property string $ManagementMode The management mode
     * @property bool $Suspended Whether the instance is suspended
     * @property bool $IsContainerInstance Whether the instance is a container instance
     * @property int $ContainerMemoryMB The container memory in MB
     * @property string $ContainerMemoryPolicy The container memory policy
     * @property int $ContainerCPUs The container CPUs
     * @property string $SpecificDockerImage The specific Docker image
     * @property (string|Metrics)[] $Metrics The metrics
     * @property string[] $ApplicationEndpoints The application endpoints
     * @property (string|string)[] $DeploymentArgs The deployment arguments
     * @property string $DisplayImageSource The display image source
     */
    class Instance {
        public $InstanceID;
        public $TargetID;
        public $InstanceName;
        public $FriendlyName;
        public $Description;
        public $Module;
        public $ModuleDisplayName;
        public $AMPVersion;
        public $IsHTTPS;
        public $IP;
        public $Port;
        public $Daemon;
        public $DaemonAutostart;
        public $ExcludeFromFirewall;
        public $Running;
        public $AppState;
        public $Tags;
        public $DiskUsageMB;
        public $ReleaseStream;
        public $ManagementMode;
        public $Suspended;
        public $IsContainerInstance;
        public $ContainerMemoryMB;
        public $ContainerMemoryPolicy;
        public $ContainerCPUs;
        public $SpecificDockerImage;
        public $Metrics;
        public $ApplicationEndpoints;
        public $DeploymentArgs;
        public $DisplayImageSource;
    }

    /**
     * InstanceDatastore - A datastore object
     * @author p0t4t0sandwich
     * @property int $Id The datastore ID
     * @property string $FriendlyName The friendly name
     */
    class InstanceDatastore {
        public $Id;
        public $FriendlyName;
    }

    /**
     * InstanceStatus - A struct to represent the object returned by the ADSModule#GetInstanceStatuses() method
     * @author p0t4t0sandwich
     * @property string $InstanceID The instance ID
     * @property bool $Running Whether the instance is running
     */
    class InstanceStatus {
        public $InstanceID;
        public $Running;
    }

    /**
     * LicenceInfo - A struct to represent the object returned by the ADSModule#GetLicenceInfo() method
     * @author p0t4t0sandwich
     * @property string $LicenceKey The licence key
     * @property string $Grade The grade
     * @property string $GradeName The grade name
     * @property string $Product The product
     * @property string $ProductName The product name
     * @property string $Expires The expiry date
     * @property int $Usage The usage
     */
    class LicenceInfo {
        public $LicenceKey;
        public $Grade;
        public $GradeName;
        public $Product;
        public $ProductName;
        public $Expires;
        public $Usage;
    }

    /**
     * LoginResult - Response type for API.Core.Login
     * @author p0t4t0sandwich
     * @var bool $success Whether the login was successful
     * @var string[] $permissions An array of permissions the user has
     * @var string $sessionID The session ID of the user
     * @var string $rememberMeToken The remember-me token of the user
     * @var UserInfo $userInfo Information about the user
     * @var float $result The result of the login
     */
    class LoginResult {
        public $success;
        public $permissions;
        public $sessionID;
        public $rememberMeToken;
        public $userInfo;
        public $result;
    }

    /**
     * Message - Message type for API.Core.GetUpdates status messages (along with WS keep alive)
     * @author p0t4t0sandwich
     * @property string $Id The message ID
     * @property bool $Expired Whether the message has expired
     * @property string $Source The source of the message
     * @property string $Message The message
     * @property int $AgeMinutes The age of the message in minutes
     */
    class Message {
        public $Id;
        public $Expired;
        public $Source;
        public $Message;
        public $AgeMinutes;
    }

    /**
     * Metrics - A metrics object
     * @author p0t4t0sandwich
     * @property int $RawValue
     * @property int $MaxValue
     * @property float $Percent
     * @property string $Units
     * @property string $Color
     * @property string $Color2
     * @property string $Color3
     */
    class Metrics {
        public $RawValue;
        public $MaxValue;
        public $Percent;
        public $Units;
        public $Color;
        public $Color2;
        public $Color3;
    }

    /**
     * ModuleInfo - A struct to represent the object returned by the ADSModule#GetModuleInfo() method
     * @author p0t4t0sandwich
     * @property string $Name The name of the module
     * @property string $Author The author of the module
     * @property string $AppName The application name
     * @property bool $SupportsSleep Whether the module supports sleep mode
     * @property string[] $LoadedPlugins The loaded plugins
     * @property AMPVersion $AMPVersion The AMP version
     * @property string $AMPBuild The AMP build
     * @property AMPVersion $ToolsVersion The tools version
     * @property AMPVersion $APIVersion The API version
     * @property string $VersionCodename The version codename
     * @property string $Timestamp The timestamp
     * @property string $BuildSpec The build spec
     * @property Branding $Branding The branding object
     * @property bool $Analytics Whether analytics are enabled
     * @property string[] $FeatureSet The feature set
     * @property string $InstanceId The instance ID
     * @property string $InstanceName The instance name
     * @property string $FriendlyName The friendly name
     * @property string $EndpointURI The endpoint URI
     * @property string $PrimaryEndpoint The primary endpoint
     * @property string $ModuleName The module name
     * @property bool $IsRemoteInstance Whether the instance is remote
     * @property string $DisplayBaseURI The display base URI
     * @property bool $RequiresFullLoad Whether the module requires a full load
     * @property bool $AllowRememberMe Whether remember me is allowed
     */
    class ModuleInfo {
        public $Name;
        public $Author;
        public $AppName;
        public $SupportsSleep;
        public $LoadedPlugins;
        public $AMPVersion;
        public $AMPBuild;
        public $ToolsVersion;
        public $APIVersion;
        public $VersionCodename;
        public $Timestamp;
        public $BuildSpec;
        public $Branding;
        public $Analytics;
        public $FeatureSet;
        public $InstanceId;
        public $InstanceName;
        public $FriendlyName;
        public $EndpointURI;
        public $PrimaryEndpoint;
        public $ModuleName;
        public $IsRemoteInstance;
        public $DisplayBaseURI;
        public $RequiresFullLoad;
        public $AllowRememberMe;
    }

    /**
     * PlatformInfo - Platform information object
     * @author p0t4t0sandwich
     * @property CPUInfo $CPUInfo The CPU information object
     * @property int $InstalledRAMMB The installed RAM in MB
     * @property int $OS The OS
     * @property string $PlatformName The platform name
     * @property int $SystemType The system type
     * @property int $Virtualization The virtualization
     */
    class PlatformInfo {
        public $CPUInfo;
        public $InstalledRAMMB;
        public $OS;
        public $PlatformName;
        public $SystemType;
        public $Virtualization;
    }

    /**
     * RemoteTargetInfo - A struct to represent the object returned by the ADSModule#GetTargetInfo() method
     * @author p0t4t0sandwich
     * @property string[] $IPAddressList The IP address list
     * @property PlatformInfo $PlatformInfo The platform information object
     * @property InstanceDatastore[] $Datastores The datastores
     */
    class RemoteTargetInfo {
        public $IPAddressList;
        public $PlatformInfo;
        public $Datastores;
    }

    /**
     * Result - Generic response type for calls that return a result
     * @author p0t4t0sandwich
     * @template T
     * @property T $Result The result object
     */
    class Result {
        public $Result;
    }

    /**
     * RunningTask - A running task object returned by the Core#GetTasks() method
     * @author p0t4t0sandwich
     * @property bool $IsPrimaryTask Whether the task is the primary task
     * @property string $StartTime The start time
     * @property string $Id The task ID
     * @property string $Name The task name
     * @property string $Description The task description
     * @property bool $HideFromUI Whether the task is hidden from the UI
     * @property bool $FastDismiss Whether the task can be dismissed quickly
     * @property string $LastUpdatePushed The last update pushed
     * @property float $ProgressPercent The progress percentage
     * @property bool $IsCancellable Whether the task is cancellable
     * @property string $Origin The origin
     * @property bool $IsIndeterminate Whether the task is indeterminate
     * @property int $State The state
     * @property string $Status The status
     */
    class RunningTask {
        public $IsPrimaryTask;
        public $StartTime;
        public $Id;
        public $Name;
        public $Description;
        public $HideFromUI;
        public $FastDismiss;
        public $LastUpdatePushed;
        public $ProgressPercent;
        public $IsCancellable;
        public $Origin;
        public $IsIndeterminate;
        public $State;
        public $Status;
    }

    /**
     * SettingsSpec - Response object for Core.GetSettingsSpec()
     * @author p0t4t0sandwich
     * @property (string|Spec)[] $Result The result
     */
    class SettingsSpec {
        public $result;
    }

    /**
     * Spec - A setting specification object
     * @author p0t4t0sandwich
     * @property bool $ReadOnly Whether the setting is read-only
     * @property string $Name The name
     * @property string $Description The description
     * @property string $Category The category
     * @property mixed $CurrentValue The current value
     * @property string $ValType The value type
     * @property mixed $EnumValues The enum values
     * @property bool $EnumValuesAreDeferred Whether the enum values are deferred
     * @property string $Node The node
     * @property string $InputType The input type
     * @property mixed $SelectionSource The selection source
     * @property bool $IsProvisionSpec Whether the setting is a provision spec
     * @property bool $ReadOnlyProvision Whether the provision is read-only
     * @property mixed[] $Actions The actions
     * @property mixed $Keywords The keywords
     * @property bool $AlwaysAllowRead Whether the setting is always allowed to be read
     * @property string $Tag The tag
     * @property int $MaxLength The max length
     * @property string $Placeholder The placeholder
     * @property string $Suffix The suffix
     * @property string $Meta The meta
     * @property bool $RequiresRestart Whether the setting requires a restart
     */
    class Spec {
        public $ReadOnly;
        public $Name;
        public $Description;
        public $Category;
        public $CurrentValue;
        public $ValType;
        public $EnumValues;
        public $EnumValuesAreDeferred;
        public $Node;
        public $InputType;
        public $SelectionSource;
        public $IsProvisionSpec;
        public $ReadOnlyProvision;
        public $Actions;
        public $Keywords;
        public $AlwaysAllowRead;
        public $Tag;
        public $MaxLength;
        public $Placeholder;
        public $Suffix;
        public $Meta;
        public $RequiresRestart;
    }


    /**
     * State - Represents the state of an instance
     * @author p0t4t0sandwich
     */
    enum State : int {
        case Undefined = -1;
        case Stopped = 0;
        case PreStart = 5;
        // The server is performing some first-time-start configuration.
        case Configuring = 7;
        case Starting = 10;
        case Ready = 20;
        // Server is in the middle of stopping, but once shutdown has finished it will automatically restart.
        case Restarting = 30;
        case Stopping = 40;
        case PreparingForSleep = 45;
        // The application should be able to be resumed quickly if using this state. Otherwise use Stopped.
        case Sleeping = 50;
        // The application is waiting for some external service/application to respond/become available.
        case Waiting = 60;
        case Installing = 70;
        case Updating = 75;
        // Used during installation, means that some user input is required to complete setup (authentication etc).
        case AwaitingUserInput = 80;
        case Failed = 100;
        case Suspended = 200;
        case Maintainence = 250;
        // The state is unknown, or doesn't apply (for modules that don't start an external process)
        case Indeterminate = 999;


        /**
         * Creates a new State object from a name
         * @author p0t4t0sandwich
         * @param string $name The name of the state
         * @return State The state
         */
        public static function fromName(string $name): State {
            foreach (self::cases() as $status) {
                if($name === $status->name) {
                    return $status;
                }
            }
            return self::Undefined;
        }

        /**
         * Creates a new State object from a value
         * @author p0t4t0sandwich
         * @param int $value The value of the state
         * @return State The state
         */
        public static function fromValue(int $value): State {
            foreach (self::cases() as $status) {
                if($value === $status->value) {
                    return $status;
                }
            }
            return self::Undefined;
        }

        /**
         * Converts a State object to a name string
         * @author p0t4t0sandwich
         * @return string The name of the state
         */
        public function toName(): string {
            return $this->name;
        }

        /**
         * Converts a State object to a value int
         * @author p0t4t0sandwich
         * @return int The value of the state
         */
        public function toValue(): int {
            return $this->value;
        }
    }

    /**
     * Status - Struct for the result of API.Core.GetStatus
     * @author p0t4t0sandwich
     * @property State $State The state of the instance
     * @property string $Uptime The uptime of the instance
     * @property (string|Metrics)[] $Metrics The metrics
     */
    class Status {
        public $State;
        public $Uptime;
        public $Metrics;
    }

    /**
     * Task - Generic response type for calls that return a result
     * @author p0t4t0sandwich
     * @template T
     * @property T $result The result object
     */
    class Task {
        public $result;
    }

    /**
     * UpdateInfo - A struct to represent the object returned by the ADSModule#GetUpdateInfo() method
     * @author p0t4t0sandwich
     * @property bool $UpdateAvailable Whether an update is available
     * @property string $Version The version of the update
     * @property string $Build The build of the update
     * @property string $ReleaseNotesURL The URL to the release notes
     * @property string $ToolsVersion The version of the tools
     * @property bool $PatchOnly Whether the update is a patch
     */
    class UpdateInfo {
        public $UpdateAvailable;
        public $Version;
        public $Build;
        public $ReleaseNotesURL;
        public $ToolsVersion;
        public $PatchOnly;
    }

    /**
     * UserInfo - Information about the user
     * @author p0t4t0sandwich
     * @var string $ID The ID of the user
     * @var string $Username The username of the user
     * @var string $EmailAddress The email address of the user
     * @var bool $IsTwoFactorEnabled Whether 2FA is enabled for the user
     * @var bool $Disabled Whether the user is disabled
     * @var string $LastLogin The last time the user logged in
     * @var string $GravatarHash The Gravatar hash of the user
     * @var bool $IsLDAPUser Whether the user is an LDAP user
     */
    class UserInfo {
        public $ID;
        public $Username;
        public $EmailAddress;
        public $IsTwoFactorEnabled;
        public $Disabled;
        public $LastLogin;
        public $GravatarHash;
        public $IsLDAPUser;
    }
?>
