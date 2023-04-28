<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;

    protected $fillable = [
        'etiquette',
        'nbrPlace',
        'adresse',
        'description',
    ];

    /**
     * Get all of the user for the Parking
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
    /**
     * Get all of the place for the Parking
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function place(): HasMany
    {
        return $this->hasMany(Place::class);
    }
    /**
     * Get all of the reservation for the Parking
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservation(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
