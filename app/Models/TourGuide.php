<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TourGuide extends Model
{
    use HasFactory;
    protected $fillable = [
        'userId',
        'operating_area',
        'places_id', // Update this line
        'tour_type',
        'tourist_type',
        'price',
        'rating',
        'tourist_capacity'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userId');
    }


    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'tourGuide_id');
    }

    public function place(): BelongsTo // Update this method
    {
        return $this->belongsTo(Places::class, 'places_id'); // Update this line
    }
}
