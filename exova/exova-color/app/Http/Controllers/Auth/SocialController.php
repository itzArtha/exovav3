<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends LoginController
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        if($provider === env('TWITTER_PROVIDER_NAME')) {
            $userSocial = Socialite::driver($provider)->user();
        } else if($provider === env('GOOGLE_PROVIDER_NAME')) {
            $userSocial = Socialite::driver($provider)->stateless()->user();
        }

        $user = User::where('provider_id', $userSocial->getId())->first();

        if(! blank($user)) {
            auth()->login($user);

            return redirect($this->redirectTo);
        }

        $user = User::create([
            'name'          => $userSocial->getName(),
            'email'         => $userSocial->getEmail(),
            'username'      => explode('@', $userSocial->getEmail())[0],
            'photo'         => $userSocial->getAvatar(),
            'provider_id'   => $userSocial->getId(),
            'provider_name' => $provider,
        ]);

        auth()->login($user);

        return redirect($this->redirectTo);
    }
}
