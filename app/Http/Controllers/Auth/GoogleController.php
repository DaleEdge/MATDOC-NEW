<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            // Fetch Google user data
            $googleUser = Socialite::driver('google')->stateless()->user();

            // Check if the user already exists by email
            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                // Update google_user_id if it's not set
                if (!$user->google_user_id) {
                    $user->google_user_id = $googleUser->getId();
                    $user->save();
                }

                // Log in the existing user
                Auth::login($user, true);

                // Check if mobile number exists; if not, redirect to mobile update modal
                if (is_null($user->mobile)) {
                    return redirect()->route('console'); // Redirect to the mobile update modal
                }

            } else {
                // User doesn't exist, create a new user
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_user_id' => $googleUser->getId(),
                ]);

                // Log in the newly created user
                Auth::login($user, true);

                // Redirect to the mobile update modal to capture the mobile number
                return redirect()->route('console');
            }

            // If the user is logged in, redirect to the dashboard
            return redirect()->route('index');
        } catch (Exception $e) {
            return redirect()->route('index');
        }
    }
}
