<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'city',
        'country',
        'postal_code',
        'phone',
        'email',
        'website',
        'latitude',
        'longitude',
        'imageURL',
        'description',
        'minDuration',
        'opening_hours',
        'closing_hours',
        'price',
        'rating',
        'placeStatus',
        'placeType'
    ];
}
