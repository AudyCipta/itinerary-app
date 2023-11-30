<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TripController extends Controller
{
    public function index(): View
    {
        return view('members.trips.index');
    }

    public function detail(string $id): View
    {
        return view('members.trips.index', compact('id'));
    }
}
