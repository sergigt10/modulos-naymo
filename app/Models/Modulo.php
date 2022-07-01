<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    public $timestamps = false;
    protected $table = 'modulos';

    protected $fillable = [
        'titol',
        'descripcio',
        'imatge1',
        'imatge2',
        'imatge3',
        'imatge4',
        'imatge5',
        'imatge6',
        'imatge7',
        'imatge8',
        'imatge9',
        'imatge10',
        'imatge11',
        'imatge12',
        'imatge13',
        'imatge14',
        'imatge15',
        'imatge16',
        'imatge17',
        'imatge18',
        'imatge19',
        'imatge20',
        'marca',
        'modelo',
        'medida',
        'num_hab',
        'num_plazas',
        'ano',
        'precio',
        'categorias_id',
        'portada',
        'ordre',
    ];
}
