<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelos extends Model
{
    use HasFactory;
    protected $fillable=[
        'destino',
        'punto_partida',
        'destino',
        'ffechaPartida',
        'fechaDestino',
        'tipo'
    ];
}
