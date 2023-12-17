<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'starting_point',
        'destination',
        'departure_date',
        'return_date',
        'preferred_time',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'departure_date' => 'date',
        'return_date' => 'date',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['departure_date', 'return_date'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Get the formatted departure date.
     *
     * @return string
     */
    public function getFormattedDepartureDateAttribute()
    {
        return $this->departure_date->format('Y-m-d');
    }

    /**
     * Get the formatted return date.
     *
     * @return string
     */
    public function getFormattedReturnDateAttribute()
    {
        return $this->return_date->format('Y-m-d');
    }
}
