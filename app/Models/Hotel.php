<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
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
        'price_per_night',
        'price_per_day',
        'bedrooms',
        'bathrooms',
        'guests',
        'beds',
        'rating',
        'type'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function bookings(): HasMany
{
    return $this->hasMany(Booking::class, 'hotels_id');
}

}
