<?php

namespace Mundial\Models;

use Spot\EntityInterface as Entity;
use Spot\MapperInterface as Mapper;

class Pais extends \Spot\Entity
{
    protected static $table = 'pais';

    public static function fields()
    {
        return array(
            'id_pais' => array(
                'type' => 'integer',
                'autoincrement' => true,
                'primary' => true
            ),
            'pais' => [
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
