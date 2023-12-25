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
        return view('itineraries.index');
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

    public function getAll(): JsonResponse
    {
        $itineraries = Itinerary::all();

        return response()->json([
            'status' => 'success',
            'data' => [
                'itineraries' => $itineraries
            ]
        ]);
    }
}
