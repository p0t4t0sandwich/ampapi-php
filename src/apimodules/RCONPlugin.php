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
        function Dummy() {
            $data = array(
            );
            return $this->APICall("RCONPlugin/Dummy", stdClass::class, $data);
        }

    }
?>