<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilotos extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombre',
        'Apaterno',
        'Amaterno',
        'CURP',
        'RFC',
        'Nacionalidad'
    ];
}
