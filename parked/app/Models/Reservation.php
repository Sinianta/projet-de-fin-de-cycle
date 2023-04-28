<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'email',
        'telphone',
        'date_res',
        'date_arrive',
        'date_depart',
        'nin',
        'marque',
        'plaque',
        'place_id',
        'place_numero',
        'parking_id',

    ];


    /**
     * Get the place that owns the Reservation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function place(): BelongsTo
    {
        return $this->belongsTo(Place::class);
    }
}
