<?php

Namespace Helper
{
    Class Bootstrap
    {
        private $users = null;

        /**
         * @param array $payload
         */
        public function __construct(array $payload = [])
        {
            define('CLI', (!$payload['type'] ?: 0));

            /**
             * Move below to some other parsing class
             * GET will be altered with POST sometime
             * later(ish)
             */

            // convert CLI opts to GET params if you're running from the command line
            if (CLI) parse_str(implode("&", array_slice($payload['args'], 1)), $_GET);

            // session isn't being stored over CLI so we need some witchcraft...
            $this->session = (isset($payload['session']))
                ? $payload['session']
                : session_id();

            $this->filter = New \Model\Filters();

            $this->users = New \RandomUser\Generator();

        }

        /**
         * ...
         */
        public function run()
        {
            header('Content-type: text/plain; charset=UTF-8');

        }
    }
}