<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourGuide extends Model
{
    use HasFactory;
    protected $fillable = [
        'userId',
        'operating_area',
        'tour_type',
        'tourist_type',
        'price',
        'rating',
        'tourist_capacity'
    ];
}
