<?php

// change header for response so that client knows we send json back
header('Content-Type: application/json');

require_once(__DIR__ . "/boot/app.boot.php");
