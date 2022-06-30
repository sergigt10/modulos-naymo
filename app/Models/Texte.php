<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portada extends Model
{
    public $timestamps = false;
    protected $table = 'portada';

    protected $fillable = [
        'descripcio',
    ];
}
