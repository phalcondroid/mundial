<?php

namespace Mundial\Controller;

include_once __DIR__ . "/ControllerBase.php";
use Mundial\Controller\ControllerBase;

include_once dirname(__DIR__) . "/models/Arbitro.php";
include_once dirname(__DIR__) . "/models/Partido.php";
include_once dirname(__DIR__) . "/models/Equipo.php";

class IndexController extends ControllerBase
{
    public function indexAction()
    {
        $partidoMap = $this->spot->mapper("Mundial\Models\Partido");
        $equipoMap  = $this->spot->mapper("Mundial\Models\Equipo");
        $arbitroMap = $this->spot->mapper("Mundial\Models\Arbitro");

        $partido = $partidoMap->all()->where(["id_estado" => 1]);

        $resultadoFinal = array();
        foreach ($partido as $item) {
            $arbitro = $arbitroMap->first(
                ["id_arbitro" => $item->id_arbitro]
            );
            $equipo1 = $equipoMap->first(
                ["id_equipo" => $item->id_equipo1]
            );
            $equipo2 = $equipoMap->first(
                ["id_equipo" => $item->id_equipo2]
            );
            $resultadoFinal[] = array(
                "e1" => $equipo1->nombre,
                "e2" => $equipo2->nombre,
                "arbitro" => $arbitro->nombre
            );
        }

        $this->setView("partidos", $resultadoFinal);
    }
}
