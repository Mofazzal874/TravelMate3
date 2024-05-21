<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'places_id',
        'tourGuide_id',
        'f_name',
        'l_name',
        'email',
        'phone',
        'gender',
        'dob',
        'country',
        'city',
        'address_line1',
        'address_line2',
        'booking_status',
        'payment_status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function place(): BelongsTo
    {
        return $this->belongsTo(Places::class, 'places_id');
    }

    public function tourGuide(): BelongsTo
    {
        return $this->belongsTo(TourGuide::class, 'tourGuide_id');
    }

}
