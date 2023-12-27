<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItineraryController;
use App\Http\Controllers\Member\TripController;
use App\Http\Controllers\PlaceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Auth
Auth::routes(['verify' => true]);
Route::get('/auth/google', [SocialiteController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [SocialiteController::class, 'handleGoogleCallback'])->name('google.callback');
Route::post('/auth/google/prompt', [SocialiteController::class, 'handleGooglePrompt'])->name('google.prompt');

// Home
Route::get('/', [HomeController::class, 'index'])->name('home.index'); // ->middleware('verified')
Route::post('/preferences', [HomeController::class, 'getPreference'])->name('home.get_preference');
Route::post('/filter', [HomeController::class, 'filter'])->name('home.filter');

// Itineraries
Route::get('/itineraries', [ItineraryController::class, 'index'])->name('itineraries.index');
Route::get('/itineraries/get-all', [ItineraryController::class, 'getAll'])->name('itineraries.get_all');
Route::get('/itineraries/{itinerary:slug}', [ItineraryController::class, 'detail'])->name('itineraries.detail');
Route::get('/itineraries/{itinerary:slug}/booked', [ItineraryController::class, 'booked'])->name('itineraries.booked');

// Places
Route::get('/places', [PlaceController::class, 'index'])->name('places.index');
Route::get('/places/search', [PlaceController::class, 'search'])->name('places.search');
Route::get('/places/get-all', [PlaceController::class, 'getAll'])->name('places.get_all');
Route::get('/places/itinerary-book', [PlaceController::class, 'itineraryBook'])->name('places.itinerary_book');
Route::get('/places/itinerary-book/{itineraryBook}', [PlaceController::class, 'itineraryBookDetail'])->name('places.itinerary_book_detail');
Route::get('/places/{place:slug}', [PlaceController::class, 'detail'])->name('places.detail');
Route::post('/places', [PlaceController::class, 'store'])->name('places.store');
Route::post('/places/create-trip', [PlaceController::class, 'storeTrip'])->name('places.create_trip');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/get-all', [BlogController::class, 'getAll'])->name('blog.get_all');
Route::get('/blog/{post:slug}', [BlogController::class, 'detail'])->name('blog.detail');

// Admin
Route::prefix('admin')->name('admin.')->group(function () {
  // Dashboard
  Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});

// Trips
Route::prefix('trips')->middleware('auth')->name('trips.')->group(function () {
  Route::get('/', [TripController::class, 'index'])->name('index');
  Route::post('/add-place', [TripController::class, 'addPlace'])->name('add_place');
  Route::get('/{itineraryBook:slug}', [TripController::class, 'detail'])->name('detail');
  Route::post('/{itinerary}', [TripController::class, 'store'])->name('store');
  Route::get('/{itineraryBook:slug}/booked', [TripController::class, 'booked'])->name('booked');
  Route::get('/{itineraryBookPlace}/edit', [TripController::class, 'edit'])->name('edit');
  Route::put('/{itineraryBookPlace}/update', [TripController::class, 'update'])->name('update');
  Route::delete('/{itineraryBookPlace}/delete', [TripController::class, 'delete'])->name('delete');
  Route::delete('/{itineraryBook}/delete-itinerary', [TripController::class, 'deleteItinerary'])->name('delete_itinerary');
  Route::get('/{itineraryBook}/edit-itinerary', [TripController::class, 'editItinerary'])->name('edit_itinerary');
  Route::put('/{itineraryBook}/update-itinerary', [TripController::class, 'updateItinerary'])->name('update_itinerary');
  Route::post('/', [TripController::class, 'create'])->name('create');
});
