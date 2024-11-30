<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    //
    protected $fillable=[
        'name',
        'email',
        'phone',
        'hired_date',
        'job_title',
        'status'
    ];
}
