<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Collection;

class ItineraryBook extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function itineraryBookPlaces(): HasMany
    {
        return $this->hasMany(ItineraryBookPlace::class);
    }

    public function dayPlaces(int $day_to): Collection
    {
        $this->load([
            'itineraryBookPlaces' => function ($query) use ($day_to) {
                $query->where('day_to', $day_to)->orderBy('time', 'asc');
            }
        ])->with('itineraryBookPlaces.place.placeImages');

        return $this->itineraryBookPlaces;
    }
}
