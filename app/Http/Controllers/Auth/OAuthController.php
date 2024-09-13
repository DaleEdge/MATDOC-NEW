<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    
        return $this->exchangeCodeForToken($code);
    }
    
    protected function exchangeCodeForToken($code)
    {
        $client = new Client();
    
        try {
            $response = $client->post('https://www.googleapis.com/oauth2/v4/token', [
                'form_params' => [
                    'grant_type' => 'authorization_code',
                    'code' => $code,
                    'redirect_uri' => env('GOOGLE_REDIRECT_URI'),
                    'client_id' => env('GOOGLE_CLIENT_ID'),
                    'client_secret' => env('GOOGLE_CLIENT_SECRET'),
                ]
            ]);
    
            $data = json_decode($response->getBody(), true);
    
            // Store tokens and other data
            session(['google_access_token' => $data['access_token']]);
            if (isset($data['refresh_token'])) {
                session(['google_refresh_token' => $data['refresh_token']]);
            }
    
            return redirect('/')->with('success', 'Authenticated with Google successfully.');
    
        } catch (RequestException $e) {
            $errorMessage = $e->hasResponse() ? $e->getResponse()->getBody()->getContents() : $e->getMessage();
            return redirect('/')->with('error', 'Failed to authenticate with Google: ' . $errorMessage);
        }
    }
}    