<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficiodetalle extends Model
{
    use HasFactory;
    protected $fillable = [
        'oficio_id',
        'nombre',
        'unidades',
        'descripcion',
    ];

    



}
