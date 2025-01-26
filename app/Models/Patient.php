<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula',
        'nombres',
        'direccion',
        'fecha_nacimiento',
        'telefono',
        'detalles',
    ];
}
