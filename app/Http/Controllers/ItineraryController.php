<?php

namespace App\Http\Controllers;

use App\Models\Itinerary;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
}
