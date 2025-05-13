<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class Helper
{
    /**
     * Get the Freelancer access token of the authenticated user.
     */
    public static function getFreelancerAccessToken()
    {
        $user = Auth::user();
        return $user ? $user->freelancer_access_token : null;
    }

    /**
     * Fetch and return skills from Freelancer API.
     */
    public static function fetchAndStoreSkills()
    {
        try {
            $url = 'https://www.freelancer-sandbox.com/api/users/0.1/users/25959427?jobs=true';

            // Get the access token from the helper method
            $accessToken = self::getFreelancerAccessToken();

            if (!$accessToken) {
                Log::error('No freelancer access token found for the authenticated user.');
                return false;
            }

            // Make the API request
            $response = Http::withHeaders([
                'freelancer-oauth-v1' => $accessToken,
                'Content-Type' => 'application/json',
            ])->get($url);

            // Log response status and body
            Log::info('API Response Status', ['status' => $response->status()]);
            Log::info('API Raw Response', ['response' => $response->body()]);

            if ($response->successful()) {
                $jsonResponse = $response->json();

                // Log parsed JSON response
                Log::info('Parsed API Response', ['data' => $jsonResponse]);

                if (isset($jsonResponse['result']['jobs']) && is_array($jsonResponse['result']['jobs'])) {
                    return $jsonResponse['result']['jobs']; // Return the skills array
                } else {
                    Log::error('Invalid API response structure.', ['response' => $jsonResponse]);
                    return false;
                }
            } else {
                Log::error('Failed to fetch skills. HTTP Status Code: ' . $response->status(), [
                    'response' => $response->body() ?: 'No response body'
                ]);
                return false;
            }
        } catch (\Exception $e) {
            Log::error('An error occurred while fetching skills: ' . $e->getMessage());
            return false;
        }
    }
}
