<?php

namespace App\Http\Controllers;

use App\Models\Itinerary;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class ItineraryController extends Controller
{
    public function index(): View
    {
        $itineraries = Itinerary::all();

        return view('itineraries.index', compact('itineraries'));
    }

    public function detail(Itinerary $itinerary): View
    {
        $itinerary->load(
            'itineraryPlaces',
            'itineraryPlaces.place',
            'itineraryPlaces.place.placeImages'
        );

        for ($i = 0; $i < $itinerary->total_day; $i++) {
            $place = [];
            for ($j = 0; $j < $itinerary->itineraryPlaces[$i]->day_to; $j++) {
                $place[] = [
                    'days' => $itinerary->itineraryPlaces[$j]->day_to,
                    'title' => $itinerary->itineraryPlaces[$j]->place->name,
                    'slug' => $itinerary->itineraryPlaces[$j]->place->slug,
                    'picture' => $itinerary->itineraryPlaces[$j]->place->placeImages[0]->picture,
                    'description' => $itinerary->itineraryPlaces[$j]->place->description
                ];
            }
            $days[] = $place;
        }

        return view('itineraries.detail', compact('itinerary', 'days'));
    }

    public function booked(Itinerary $itinerary): JsonResponse
    {
        $itinerary->load(
            'itineraryPlaces',
            'itineraryPlaces.place'
        );

        $events[] = [
            "title" => $itinerary->name,
            "start" => $itinerary->start_day,
            "end" => date('Y-m-d', strtotime($itinerary->start_day . ' + ' . $itinerary->total_day . ' days'))
        ];

        foreach ($itinerary->itineraryPlaces as $itineraryPlace) {
            $start = date('Y-m-d', strtotime($itinerary->start_day . ' + ' . ($itineraryPlace->day_to - 1) . ' days'));

            $events[] = [
                "title" => $itineraryPlace->place->name,
                "url" => route('places.detail', ['place' => $itineraryPlace->place->slug]),
                "start" => $start . 'T' . $itineraryPlace->time
            ];
        }

        return response()->json([
            'data' => [
                'events' => $events
            ]
        ]);
    }
}
