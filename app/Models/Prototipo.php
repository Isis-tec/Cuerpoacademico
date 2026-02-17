<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prototipo extends Model
{
    protected $table = 'prototipos';

    protected $fillable = [
        'nombre',
        'autores',
        'objetivo',
        'descripcion',
        'imagen',
        'ficha_tecnica'
    ];
}
