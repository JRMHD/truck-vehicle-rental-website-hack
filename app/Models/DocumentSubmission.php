<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'mc_number',
        'dot',
        'driver_license',
        'additional_info',
    ];
}
