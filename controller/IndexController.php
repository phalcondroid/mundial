<?php

namespace Mundial\Controller;

include_once __DIR__ . "/ControllerBase.php";
use Mundial\Controller\ControllerBase;

include_once dirname(__DIR__) . "/models/Arbitro.php";

class IndexController extends ControllerBase
{
    public function indexAction()
    {
        $arbitroMap = $this->spot->mapper("Mundial\Models\Arbitro");
        $rows = $arbitroMap->all()->where(['id_pais' => 1]);

        foreach ($rows as $item) {
            echo "Arbitro : " . $item->nombre . "<br>";
        }
    }
}
