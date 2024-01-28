<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Itinerary;
use App\Models\Place;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $totalUsers = User::all()->count();
        $totalItineraries = Itinerary::all()->count();
        $totalPlaces = Place::all()->count();
        $totalBlogs = Blog::all()->count();

        return view('admin.dashboard.index', compact('totalUsers', 'totalItineraries', 'totalPlaces', 'totalBlogs'));
    }
}
