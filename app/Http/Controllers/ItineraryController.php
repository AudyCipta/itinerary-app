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

        return view('itineraries.detail', compact('itinerary'));
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
            "end" => date('Y-m-d', strtotime($itinerary->start_day . ' + ' . ($itinerary->total_day + 1) . ' days'))
        ];

        foreach ($itinerary->itineraryPlaces as $itineraryPlace) {
            $events[] = [
                "title" => $itineraryPlace->place->name,
                "url" => route('places.detail', ['place' => $itineraryPlace->place->slug]),
                "start" => $itineraryPlace->start
            ];
        }

        return response()->json([
            'data' => [
                'events' => $events
            ]
        ]);
    }
}
