<?php
require_once realpath(__DIR__ . "/vendor/autolaod.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();