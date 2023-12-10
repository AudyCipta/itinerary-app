<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

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
}
