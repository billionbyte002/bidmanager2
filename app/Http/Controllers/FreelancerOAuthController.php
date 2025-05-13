<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class FreelancerOAuthController extends Controller
{
    /**
     * Redirect the user to Freelancer's OAuth authorization page.
     */
    public function redirectToFreelancer()
    {
        
        $clientId = env('FREELANCER_CLIENT_ID');
        $redirectUri = env('FREELANCER_REDIRECT_URI');
        $freelancer_url = env('FREELANCER_AUTH_URL');
        $finalUrl = $freelancer_url.'/oauth/authorize?'.http_build_query([
            'response_type' => 'code',
            'client_id' => $clientId,
            'redirect_uri' => $redirectUri,
            'scope' => 'basic',
        ]);
        return redirect($finalUrl);
    }

    /**
     * Handle the OAuth callback from Freelancer.
     */
    public function handleCallback(Request $request)
    {
        $code = $request->input('code');
        $clientId = env('FREELANCER_CLIENT_ID');
        $redirectUri = env('FREELANCER_REDIRECT_URI');
        $freelancer_url = env('FREELANCER_AUTH_URL');
        $clientSecret = env('FREELANCER_CLIENT_SECRET');
        $response = Http::withHeaders(['Content-Type' => 'application/x-www-form-urlencoded'])->asForm()->post($freelancer_url.'/oauth/token', [
            'grant_type'    => 'authorization_code',
            'code'          => $code,
            'client_id'     => $clientId,
            'client_secret' => $clientSecret,
            'redirect_uri'  => $redirectUri
        ]);
        if ($response->successful()) {
            $data = $response->json();

            $accessToken  = $data['access_token'];
            $refreshToken = $data['refresh_token'];

            // Fetch user info
            $userInfo = Http::withToken($accessToken)->get(env('FREELANCER_API_URL') . 'users/0.1/self/');

            if ($userInfo->successful()) {
                $info = $userInfo['result'];

                $freelancerId   = $info['id'] ?? null;
                $freelancerUser = $info['username'] ?? null;

                $user = Auth::user();
                $user->freelancer_access_token  = $accessToken;
                $user->freelancer_refresh_token = $refreshToken;
                $user->freelancer_id            = $freelancerId;
                $user->freelancer_username      = $freelancerUser;
                $user->save();

                return redirect()->route('dashboard2')->with('success', 'Freelancer account connected successfully!');
            }
        }

        return redirect()->route('freelancer.redirect')->withErrors(['OAuth failed.']);
    }
}
