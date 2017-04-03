<?php

namespace Mundial\Models;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class Equipo extends \Spot\Entity
{
    protected static $table = 'equipo';

    public static function fields()
    {
        return array(
            'id_equipo' => array(
                'type' => 'integer',
                'autoincrement' => true,
                'primary' => true
            ),
            'id_pais' => array(
                'type' => 'integer',
                "required" => true
            ),
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
            'arbitro' => $mapper->hasMany(
                $entity,
                'Mundial\Models\Arbitro',
                'id_pais'
            )
        ];
    }
    */
}
