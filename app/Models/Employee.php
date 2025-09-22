<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = 'employees';
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'gender',
        'position',
        'hire_date',
        'address',
        'atus',
        'profile_picture  ',

    ];
}
