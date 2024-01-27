<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JourneyPlan extends Model
{
    use HasFactory;

    protected $table = 'journey_plans';

    protected $fillable = [
        'pickup_dropoff_location',
        'pick_up_date',
        'pick_up_time',
        // Add other fillable columns as needed
    ];
}
