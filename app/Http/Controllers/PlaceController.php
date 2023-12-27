<?php

namespace App\Http\Controllers;

use App\Models\ItineraryBook;
use App\Models\ItineraryBookPlace;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PlaceController extends Controller
{
    public function index(): View
    {
        return view('places.index');
    }

    public function detail(Place $place): View
    {
        $place->load('placeImages')->get();

        return view('places.detail', compact('place'));
    }

    public function getAll(): JsonResponse
    {
        $places = Place::with(['destinationPreference', 'destinationPreference.destinationCategory', 'placeImages'])->get();

        return response()->json([
            'status' => 'success',
            'data' => [
                'places' => $places
            ]
        ]);
    }

    public function search(Request $request): JsonResponse
    {
        $key = $request->input('key');
        $places = Place::with(['destinationPreference', 'destinationPreference.destinationCategory', 'placeImages'])->where('places.name', 'LIKE', '%' . $key . '%')->get();

        return response()->json([
            'status' => 'success',
            'data' => [
                'places' => $places
            ]
        ]);
    }

    public function itineraryBook(): JsonResponse
    {
        $itineraryBook = ItineraryBook::where('user_id', auth()->user()->id)->get();

        return response()->json([
            'status' => 'success',
            'data' => [
                'itineraryBook' => $itineraryBook
            ]
        ]);
    }

    public function itineraryBookDetail(ItineraryBook $itineraryBook): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'data' => [
                'itineraryBook' => $itineraryBook
            ]
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        ItineraryBookPlace::create([
            'itinerary_book_id' => $request->name,
            'place_id' => $request->place_id,
            'day_to' => $request->day_to,
            'time' => $request->time
        ]);

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function storeTrip(Request $request): JsonResponse
    {
        $rules = [
            'name' => 'required|unique:itinerary_books,name',
        ];

        $messages = [
            'name.unique' => 'Name already exists.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['status' => 'failed', 'message' => 'Name already exists.']);
        }

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

        return response()->json(['status' => 'success']);
    }
}
