<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'places_id');
    }

    public function tourGuides(): HasMany // Add this method
    {
        return $this->hasMany(TourGuide::class, 'places_id'); // Update this line
    }
}
