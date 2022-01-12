<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficio extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag_id',
        'jefe_id',
        'subjefe_id',
        'cotizador_id',
        'secretaria_id',
        'oficiopdf',
        'titulo',
        'oficinausuario',
        'fecha',
        'tipocontrato',
        'estadosecretaria',
        'estadojefe',
        'estadosub',
        'estadocoti',
        'estadocomparativojefe',
        'estadocomparativosubjefe',
    ];
}
