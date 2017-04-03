<?php

namespace Mundial\Models;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class Partido extends \Spot\Entity
{
    protected static $table = 'partido';

    public static function fields()
    {
        return array(
            'id_partido' => array(
                'type' => 'integer',
                'autoincrement' => true,
                'primary' => true
            ),
            'id_equipo1'    => [
                'type' => 'integer',
                'required' => true
            ],
            'id_equipo2' => [
                'type' => 'integer',
                'required' => true
            ],
            'id_arbitro' => [
                'type' => 'integer',
                'required' => true
            ],
            'resultado' => [
                'type' => 'text',
                'required' => true
            ]
        );
    }

    /*
    public static function relations(Mapper $mapper, Entity $entity)
    {
        return [
            'pais' => $mapper->belongsTo(
                $entity,
                'Mundial\Models\Pais',
                'id_pais'
            )
        ];
    }
    */
}
