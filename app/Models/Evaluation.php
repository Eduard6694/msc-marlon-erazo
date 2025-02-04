<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cognitive_score',
        'socioemotional_score',
        'behavior_score',
        'academic_score',
        'family_score',
        'total_score',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
