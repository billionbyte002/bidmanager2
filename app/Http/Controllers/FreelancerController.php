<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FreelancerController extends Controller
{
    public function redirectToFreelancer()
    {
        $query = http_build_query([
            'client_id' => env('FREELANCER_CLIENT_ID'),
            'response_type' => 'code',
            'redirect_uri' => env('FREELANCER_REDIRECT_URI'),
            'scope' => 'basic profile email', // add scopes you need
        ]);

        return redirect("https://accounts.freelancer.com/oauth/authorize?" . $query);
    }

    public function handleCallback(Request $request)
    {
        $code = $request->get('code');

        $response = Http::asForm()->post('https://accounts.freelancer.com/oauth/token', [
            'grant_type' => 'authorization_code',
            'client_id' => env('FREELANCER_CLIENT_ID'),
            'client_secret' => env('FREELANCER_CLIENT_SECRET'),
            'redirect_uri' => env('FREELANCER_REDIRECT_URI'),
            'code' => $code,
        ]);

        $data = $response->json();

        // You get access_token, refresh_token, etc
        // Save tokens to user or session
        session([
            'freelancer_access_token' => $data['access_token'],
            'freelancer_refresh_token' => $data['refresh_token'],
        ]);

        return redirect('/dashboard')->with('message', 'Freelancer connected!');
    }
}
