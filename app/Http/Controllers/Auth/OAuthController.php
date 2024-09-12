<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class OAuthController extends Controller
{
    public function handleGoogleCallback(Request $request)
    {
        $code = $request->input('code');

        if (!$code) {
            return redirect('/')->with('error', 'Authorization code missing.');
        }

        $client = new Client();
        try {
            $response = $client->post('https://www.googleapis.com/oauth2/v4/token', [
                'form_params' => [
                    'grant_type' => 'authorization_code',
                    'code' => $code,
                    'redirect_uri' => env('GOOGLE_REDIRECT'),
                    'client_id' => env('GOOGLE_CLIENT_ID'),
                    'client_secret' => env('GOOGLE_CLIENT_SECRET'),
                ]
            ]);

            $data = json_decode($response->getBody(), true);

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
                    return redirect()->route('index'); // Redirect to the mobile update modal
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
                return redirect()->route('index');
            }

            // If the user is logged in, redirect to the dashboard
            return redirect()->route('index');

        } catch (RequestException $e) {
            return redirect('/')->with('error', 'Failed to authenticate with Google: ' . $e->getMessage());
        }
    }
}
