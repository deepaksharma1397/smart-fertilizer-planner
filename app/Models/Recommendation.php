<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    protected $fillable = [
        'farmer_name',
        'crop_type',
        'soil_type',
        'nitrogen',
        'phosphorus',
        'potassium',
        'recommended_fertilizer'
    ];
}