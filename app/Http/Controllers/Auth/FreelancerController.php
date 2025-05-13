<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FreelancerController extends Controller
{
    /**
     * Redirect the user to the Freelancer authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToFreelancer()
    {
        return Socialite::driver('freelancer')->redirect();
    }

    /**
     * Obtain the user information from Freelancer.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleFreelancerCallback()
    {
        try {
            $freelancerUser = Socialite::driver('freelancer')->user();

            // Find or create user in your database
            $user = User::firstOrCreate([
                'freelancer_id' => $freelancerUser->id,
            ], [
                'name' => $freelancerUser->name,
                'email' => $freelancerUser->email,
                // Add more fields as necessary
            ]);

            Auth::login($user, true);

            return redirect()->intended('/home');
        } catch (\Exception $e) {
            return redirect('/login');
        }
    }
}


