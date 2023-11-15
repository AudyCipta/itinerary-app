<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->with(["prompt" => "select_account"])->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'google_id' => $googleUser->id,
        ], [
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'email_verified_at' => now(),
            'password' => bcrypt('1234'),
            'picture' => $googleUser->avatar,
            'google_id' => $googleUser->id,
        ]);

        Auth::login($user);

        return to_route('home.index');
    }

    public function handleGooglePrompt(Request $request): JsonResponse
    {
        $user = User::updateOrCreate([
            'google_id' => $request->sub,
        ], [
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => bcrypt('1234'),
            'picture' => $request->picture,
            'google_id' => $request->sub,
        ]);

        Auth::login($user);

        return response()->json(['ok' => true, 'r' => $request->all()]);
    }
}
