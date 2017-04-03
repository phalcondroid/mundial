<?php

namespace Mundial\Connection;

include_once dirname(__DIR__) . "/Config/local.php";

final class SpotConnection
{
    private static $spot = null;
    private function __construct()
    {}

    public static function getInstance()
    {
        if (self::$spot == null) {
            try {
                $cfg = new \Spot\Config();
                // MySQL
                $cfg->addConnection('mysql', 'mysql://root@localhost/mundial');
                self::$spot = new \Spot\Locator($cfg);

            } catch (\Exception $e) {
                echo $e->getMessage() . "<br>";
            }
        }
        return self::$spot;
    }
    public function __clone()
    {
        return false;
    }
}
