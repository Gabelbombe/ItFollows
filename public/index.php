<?php
error_reporting(-1);
ini_set('display_errors', 1);

// kick start session
if ('' === session_id())
{
    session_start();
}

define('APP_PATH', dirname(__DIR__));
require APP_PATH . '/vendor/autoload.php';

$payload = [
  'type'    => (! isset($argv) ?: 0),
  'args'    => (! isset($argv) ? $_GET : $argv),
] + ['session' => session_id()];

$bootstrap = New \Helper\Bootstrap($payload);
$bootstrap->run();