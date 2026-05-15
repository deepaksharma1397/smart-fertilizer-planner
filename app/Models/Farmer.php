<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $fillable = [
    'name',
    'phone',
    'village',
    'land_size'
];
}
