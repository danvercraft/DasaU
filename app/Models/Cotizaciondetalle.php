<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizaciondetalle extends Model
{
    use HasFactory;
    protected $fillable = [
        'oficiodetalle_id',
        'cotizacion_id',
        'precio',
        'total',
    ];
    



}
