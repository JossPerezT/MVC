<?php

$folderPath = dirname($_SERVER["SCRIPT_NAME"]);
$urlPath = $_SERVER["REQUEST_URI"];

$url = substr($urlPath, strlen($folderPath));

//variable constantante:
define("URL", $url);
