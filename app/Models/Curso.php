<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'contenido', 'FK_IdKit'];

    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'curso_grupo', 'FK_IdCurso', 'FK_IdGrupo');
    }
}
