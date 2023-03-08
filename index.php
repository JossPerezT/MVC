<?php
require_once "config/config.php";
$url = explode('/', URL);
require_once "routers/router.php";

$routers = new router();
$routers->run();


?>