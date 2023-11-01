<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workus extends Model
{
    protected $fillable = ['name', 'email', 'phone_number', 'state'];

    // Other model properties and methods go here
}
