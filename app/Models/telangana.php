<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telangana extends Model
{
    use HasFactory;
    protected $fillable = [
        'counseling_type',
        'quota',
        'college',
        'course',
        'course_fee',
        'nri_fee',
        'bond_years',
        'bond_penalty', 
        'stripend_year',
        'category', 
        'round',
        'rank',
    ];
}
