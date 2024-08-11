<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'course_level',
        'mode_of_study',
        'course_type',
        'language',
        'credentail',
        'year'
    ];

    protected $casts = [
        'language' => 'array',
    ];
}
