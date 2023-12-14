<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Collection;

class Itinerary extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function itineraryPlaces(): HasMany
    {
        return $this->hasMany(ItineraryPlace::class);
    }

    public function dayPlaces(int $day_to): Collection
    {
        $this->load([
            'itineraryPlaces' => function ($query) use ($day_to) {
                $query->where('day_to', $day_to)->orderBy('time', 'asc');
            }
        ])->with('itineraryPlaces.place.placeImages');

        return $this->itineraryPlaces;
    }
}
