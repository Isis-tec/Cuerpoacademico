<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    public function asistencias()
{
    return $this->hasMany(Asistencia::class);
}

}
