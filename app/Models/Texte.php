<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Texte extends Model
{
    public $timestamps = false;
    protected $table = 'textes';

    protected $fillable = [
        'descripcio',
    ];
}
