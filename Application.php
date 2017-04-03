<?php

namespace Mundial;

include_once __DIR__ . "/connection/SpotConnection.php";
include_once __DIR__ . "/libs/autoload.php";

use Mundial\Connection\SpotConnection;

class Application
{
    public function forward($controller, $action)
    {
        $spot = SpotConnection::getInstance();
        include_once __DIR__ . "/controller/$controller" . "Controller.php";
        $class  = "\Mundial\Controller\\$controller" . "Controller";
        $method = "$action" . "Action";
        (new $class($spot))->$method();
    }
}
