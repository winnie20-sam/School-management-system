<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'national_id',
        'tsc_number',
        'gender',
        'date_of_birth',
        'qualification',
        'subject_specialization',
        'employment_type',
        'date_of_employment',
        'address',
    ];
}
