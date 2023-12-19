<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Itinerary;
use App\Models\ItineraryBook;
use App\Models\ItineraryBookPlace;
use App\Models\ItineraryPlace;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

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
        $itineraryBook = ItineraryBook::create([
            'name' => $itinerary->name,
            'slug' => $itinerary->slug,
            'total_day' => $itinerary->total_day,
            'start_day' => $request->start_day,
            'thumbnail' => $itinerary->thumbnail,
            'user_id' => auth()->user()->id,
        ]);

        $itineraryPlaces = ItineraryPlace::where('itinerary_id', $itinerary->id)->get();

        foreach ($itineraryPlaces as $itineraryPlace) {
            ItineraryBookPlace::create([
                'itinerary_book_id' => $itineraryBook->id,
                'place_id' => $itineraryPlace->place_id,
                'day_to' => $itineraryPlace->day_to,
                'time' => $itineraryPlace->time
            ]);
        }

        return response()->json(['status' => 'success']);
    }

    public function booked(ItineraryBook $itinerary): JsonResponse
    {
        $itinerary->load(
            'itineraryBookPlaces',
            'itineraryBookPlaces.place'
        );

        $events[] = [
            "title" => $itinerary->name,
            "start" => $itinerary->start_day,
            "end" => date('Y-m-d', strtotime($itinerary->start_day . ' + ' . $itinerary->total_day . ' days'))
        ];

        foreach ($itinerary->itineraryBookPlaces as $itineraryPlace) {
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

    public function edit(ItineraryBookPlace $itineraryBookPlace): JsonResponse
    {
        return response()->json([
            'data' => [
                'itineraryBookPlace' => $itineraryBookPlace
            ]
        ]);
    }

    public function update(Request $request, ItineraryBookPlace $itineraryBookPlace): JsonResponse
    {
        $itineraryBookPlace->update([
            'day_to' => $request->day_to,
            'time' => $request->time,
        ]);

        session()->flash('success', 'Data successfuly updated!');

        return response()->json(['status' => 'success']);
    }

    public function delete(ItineraryBookPlace $itineraryBookPlace): JsonResponse
    {
        $itineraryBookPlace->delete();

        session()->flash('success', 'Data successfuly deleted!');

        return response()->json(['status' => 'success']);
    }

    public function deleteItinerary(ItineraryBook $itineraryBook): RedirectResponse
    {
        $itineraryBook->delete();

        return to_route('member.trips.index')->with('success', 'Data deleted successfuly');
    }

    public function create(Request $request)
    {
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'total_day' => $request->total_day,
            'start_day' => $request->start_day,
            'user_id' => auth()->user()->id,
        ];

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnail->storeAs('public/thumbnail-itinerary-books', $thumbnail->hashName());
            $data['thumbnail'] = $thumbnail->hashName();
        }

        ItineraryBook::create($data);

        return back()->with('success', 'Data created successfuly');
    }
}
