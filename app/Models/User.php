<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;


use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'city',
        'country',
        'postal_code',
        'image',
        'username',
        'bio',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'youtube',
        'website',
        'status',
        'gender',
        'dob',
        'about',
        'experience',
        'education',
        'skills',
        'languages',
        'type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["user", "admin", "manager", "tourGuide"][$value],
            // The anonymous function fn ($value) => ["user", "admin"][$value] takes one argument, $value. This function returns a value from the array ["user", "admin"] based on the index provided by $value. If $value is 0, it will return "user", and if $value is 1, it will return "admin".
        );
    }
    public function tourGuide(): HasOne
    {
        return $this->hasOne(TourGuide::class, 'userId');
    }
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function sentMessages(): HasMany
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    /**
     * Get the messages received by the user.
     */
    public function receivedMessages(): HasMany
    {
        return $this->hasMany(Message::class, 'recipient_id');
    }
}
