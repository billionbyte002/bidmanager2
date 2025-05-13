<?php

namespace App\Providers\Socialite;

use Laravel\Socialite\Two\ProviderInterface;
use Laravel\Socialite\Two\AbstractProvider;
use Laravel\Socialite\Two\User;

class FreelancerProvider extends AbstractProvider implements ProviderInterface
{
    protected $scopes = ['basic'];

    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase('https://accounts.freelancer.com/oauth/authorize', $state);
    }

    protected function getTokenUrl()
    {
        return 'https://accounts.freelancer.com/oauth/token';
    }

    protected function getUserByToken($token)
    {
        $response = $this->getHttpClient()->get('https://api.freelancer.com/users/me', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    protected function mapUserToObject(array $user)
    {
        return (new User)->setRaw($user)->map([
            'id' => $user['id'],
            'name' => $user['display_name'],
            'email' => $user['email'],
            // Add more fields as necessary
        ]);
    }
}
