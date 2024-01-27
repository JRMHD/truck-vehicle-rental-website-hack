<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentSubmission extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'vehicle_type'];
}
