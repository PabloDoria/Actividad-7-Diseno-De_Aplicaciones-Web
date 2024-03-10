<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $fillable = ['fecha_de_nacimiento', 'FK_IdTipoUsuario'];
}
