<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id',
        'cotizador_id',
        'adquisicion_id',
        'fecha',
        'tiempoentrega',
        'udtiempo',
        'monto',
        'firmaproveedor',
        'descuento',
        'costofinal',
        'esganador',
    ];
    










}
