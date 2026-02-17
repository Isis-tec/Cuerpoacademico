<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'celular',
        'correo',
        'institucion_id',
        'clave',
    ];

    public function institucion()
    {
        return $this->belongsTo(Institucion::class);
    }
}
