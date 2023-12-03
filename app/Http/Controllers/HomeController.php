<?php

namespace App\Http\Controllers;

use App\Models\DestinationCategory;
use App\Models\DestinationPreference;
use App\Models\Place;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $destinationCategories = DestinationCategory::all();

        return view('home.index', compact('destinationCategories'));
    }

    public function getPreference(): JsonResponse
    {
        $id = request()->id;
        $destinationPreferences = DestinationPreference::where('destination_category_id', $id)->get();

        return response()->json(['data' => $destinationPreferences]);
    }

    public function filter(): JsonResponse
    {
        $id = request()->id;
        $places = Place::with(['destinationPreference', 'destinationPreference.destinationCategory'])
            ->where('destination_preference_id', $id)
            ->get();

        return response()->json(['data' => $places]);
    }
}
