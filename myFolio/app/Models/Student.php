<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'matric_id',
        'first_name',
        'last_name',
        'email',
        'phone_no',
        'created_at',
        'updated_at',
    ];
}
