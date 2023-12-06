<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PlaceController extends Controller
{
    public function index(): View
    {
        $places = Place::with(['destinationPreference', 'destinationPreference.destinationCategory', 'placeImages'])->get();

        return view('places.index', compact('places'));
    }

    public function detail(Place $place): View
    {
        $place->load('placeImages')->get();

        return view('places.detail', compact('place'));
    }
}
