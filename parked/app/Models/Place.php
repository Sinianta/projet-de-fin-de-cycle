<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'disponibilite',
        'parking_id',

    ];

    /**
     * Get the parking that owns the Place
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parking(): BelongsTo
    {
        return $this->belongsTo(Parking::class);
    }

    /**
     * Get all of the reservation for the Place
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservation(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
