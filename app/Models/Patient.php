<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'cedula', 'nombres', 'direccion', 'fecha_nacimiento', 'telefono', 'detalles'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
