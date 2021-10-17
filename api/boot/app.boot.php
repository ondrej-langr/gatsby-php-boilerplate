<?php

require_once(__DIR__ . "/../vendor/autoload.php");

// import and init dotenv 
require_once(__DIR__ . "/lib/dotenv.php");

// import database connnection because its needed later on next import
require_once(__DIR__ . "/lib/database.php");

// Import controller library
require_once(__DIR__ . "/lib/slim.php");

include_once __DIR__ . "/loaders/utils.loader.php";
include_once __DIR__ . "/loaders/controllers.loader.php";
include_once __DIR__ . "/loaders/routes.loader.php";
