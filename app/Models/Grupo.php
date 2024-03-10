<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = ['clave', 'FK_IdTipoGrupo'];

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'curso_grupo', 'FK_IdGrupo', 'FK_IdCurso');
    }
}
