<?php

include_once __DIR__ . "/Application.php";

$controller = $_GET["controller"];
$action     = $_GET["action"];

$application = new Mundial\Application();
$application->forward(
    $controller,
    $action
);
