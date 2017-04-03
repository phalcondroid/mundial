<?php

namespace Mundial\Models;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class Arbitro extends \Spot\Entity
{
    protected static $table = 'arbitro';

    public static function fields()
    {
        return array(
            'id_arbitro' => array(
                'type' => 'integer',
                'autoincrement' => true,
                'primary' => true
            ),
            'id_pais'    => [
                'type' => 'integer',
                'required' => true
            ],
            'nombre' => [
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
