<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PlaceController extends Controller
{
    public function index(): View
    {
        return view('places.index');
    }

    public function detail(Place $place): View
    {
        return view('places.detail', compact('place'));
    }
}
