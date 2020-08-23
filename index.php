<?php

require("config.php");
require("classes/Bootstrap.php");
require('controllers/Controller.php');
require('controllers/Home.php');

$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();
if ($controller) {
    $controller->executeAction();
}