<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aerolineas extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre',
        'nacionalidad'
    ];
}
