<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Auth;
use App\Models\User;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        // Check if the user already exists
        $user = User::where('email', $googleUser->getEmail())->first();

        if ($user) {
            // Log in the existing user
            Auth::login($user, true);
            return redirect('/home');
        } else {
            // Store Google user data temporarily in session
            session([
                'google_user' => $googleUser
            ]);

            // Redirect to a form to capture additional fields
            return redirect('/register');
        }
    }

    public function completeRegistration(Request $request)
    {
        $googleUser = session('google_user');

        // Create a new user with the additional fields
        $user = User::create([
            'name' => $request->name,
            'email' => $googleUser->getEmail(),
            'google_id' => $googleUser->getId(),
            'avatar' => $googleUser->getAvatar(),
            'password' => bcrypt(\Illuminate\Support\Str::random(16)),  // Updated password generation
            'exam_type' => $request->exam_type,
            'score' => $request->score,
            'phone' => $request->phone,
        ]);

        // Log in the new user
        Auth::login($user, true);

        return redirect('/console');
    }
}
