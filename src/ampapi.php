<?php
    require('./vendor/autoload.php');
    require("src/types.php");

    /**
     * AMPAPI - An API that allows you to communicate with AMP installations from within PHP
     * @author p0t4t0sandwich
     * @version 1.0.0
     * @var string $baseUri The base URI of the AMP installation
     * @var string $dataSource The data source of the AMP installation
     * @var string $username The username of the user
     * @var string $password The password of the user
     * @var string $rememberMeToken The remember me token of the user (optional)
     * @var string $sessionId The session ID of the user  (optional)
     * @var int $lastAPICall The timestamp of the last API call
     * @var int $relogInterval The interval in which the user should be logged in again
     */
    class AMPAPI {
        public string $baseUri;
        public string $dataSource;
        public string $username;
        public string $password;
        public string $rememberMeToken;
        public string $sessionId;
        private int $lastAPICall;
        public int $relogInterval = 60*5;
        private JsonMapper $mapper;

        /**
         * AMPAPI constructor
         * @author p0t4t0sandwich
         * @param string $baseUri The base URI of the AMP installation
         * @param string $username The username of the user
         * @param string $password The password of the user
         * @param string $rememberMeToken The remember me token of the user (optional)
         * @param string $sessionId The session ID of the user (optional)
         */
        function __construct(string $baseUri, string $username = "", string $password = "", string $rememberMeToken = "", string $sessionId = "") {
            $this->baseUri = $baseUri;

            if (substr($this->baseUri, -1) != "/") {
                $this->baseUri .= "/";
            }
            $this->dataSource = $this->baseUri."API/";

            $this->username = $username;
            $this->password = $password;
            $this->rememberMeToken = $rememberMeToken;
            $this->sessionId = $sessionId;

            $this->lastAPICall = time();

            $this->mapper = new JsonMapper();
        }

        /**
         * Makes an API call
         * @author p0t4t0sandwich
         * @param string $endpoint The endpoint to call
         * @param array $data The data to send
         * @return object The response
         */
        function APICall(string $endpoint, string $class = "", array $data = array()) {
            // Check the last API call time, and if it's been more than the relog interval, relog.
            $now = time();
            if ($now - $this->lastAPICall > $this->relogInterval) {
                $this->lastAPICall = $now;
                $this->APILogin();
            } else {
                $this->lastAPICall = $now;
            }
            $data["SESSIONID"] = $this->sessionId;

            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $this->dataSource.$endpoint);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Accept: application/json',
                'Content-Type: application/json',
                'User-Agent: ampapi-php/1.0.0'
            ));
            $response = curl_exec($curl);
            curl_close($curl);

            return $this->mapper->map(json_decode($response), $class);
        }

        /**
         * Logs the user in and returns the response stdClass
         * @author p0t4t0sandwich
         * @return LoginResult The response
         */
        function APILogin() {
            $data = array(
                "username" => $this->username,
                "password" => "",
                "token" => $this->rememberMeToken,
                "rememberMe" => true
            );

            // If remember me token is empty, use the password.
            if ($this->rememberMeToken == "") {
                $data["password"] = $this->password;
            }

            $loginResult = $this->APICall("Core/Login", LoginResult::class, $data);

            if ($loginResult->success) {
                $this->rememberMeToken = $loginResult->rememberMeToken;
                $this->sessionId = $loginResult->sessionID;
            }
            return $loginResult;
        }
    }
?>
