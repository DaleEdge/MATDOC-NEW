<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Exception;

class GoogleController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle the Google callback.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            // Check if user exists
            $existingUser = User::where('google_id', $user->getId())->first();

            if ($existingUser) {
                // Log in the user
                Auth::login($existingUser);
            } else {
                // Create a new user
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'google_id' => $user->getId(),
                    'avatar' => $user->getAvatar(), // optional
                ]);

                Auth::login($newUser);
            }

            return redirect()->route('dashboard');
        } catch (Exception $e) {
            // Log the exception details for debugging
            Log::error('Google OAuth Error: ' . $e->getMessage());

            // Handle exception or error
            return redirect()->route('login')->withErrors('Unable to authenticate using Google.');
        }
    }
}
