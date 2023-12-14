<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItineraryBook extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function itineraryBookPlaces(): HasMany
    {
        return $this->hasMany(ItineraryBookPlace::class);
    }
}
