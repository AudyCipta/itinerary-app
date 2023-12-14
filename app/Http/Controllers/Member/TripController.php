<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Itinerary;
use App\Models\ItineraryBook;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class TripController extends Controller
{
    public function index(): View
    {
        $itineraryBook = ItineraryBook::all();

        return view('members.trips.index', compact('itineraryBook'));
    }

    public function detail(ItineraryBook $itineraryBook): View
    {
        $itineraryBook->load(
            'itineraryBookPlaces',
            'itineraryBookPlaces.place',
            'itineraryBookPlaces.place.placeImages'
        );

        return view('members.trips.detail', compact('itineraryBook'));
    }

    public function store(Request $request, Itinerary $itinerary): JsonResponse
    {
        ItineraryBook::create([
            'name' => $itinerary->name,
            'slug' => $itinerary->slug,
            'total_day' => $itinerary->total_day,
            'start_day' => $request->start_day,
            'thumbnail' => $itinerary->thumbnail,
            'user_id' => auth()->user()->id,
        ]);

        return response()->json(['status' => 'success']);
    }
}
