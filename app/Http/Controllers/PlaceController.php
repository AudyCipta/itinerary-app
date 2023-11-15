<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PlaceController extends Controller
{
    public function index(): View
    {
        return view('places.index');
    }

    public function detail($id): View
    {
        return view('places.detail', compact('id'));
    }
}
