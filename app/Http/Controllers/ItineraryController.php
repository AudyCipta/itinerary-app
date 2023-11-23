<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ItineraryController extends Controller
{
    public function index(): View
    {
        return view('itineraries.index');
    }

    public function detail($id): View
    {
        return view('itineraries.detail', compact('id'));
    }
}
