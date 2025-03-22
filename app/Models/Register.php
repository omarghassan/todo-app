<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Register extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'full_name',
        'password',
        'gender',
        'age_group',
        'education_level',
        'interests',
        'phone',
        'address',
        'work',
    ];
}
