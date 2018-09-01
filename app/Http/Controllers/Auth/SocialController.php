<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

use App\User;
use App\SocialAccount;


class SocialController extends Controller
{

    use AuthenticatesUsers;
    protected $redirectTo = '/home';

    //facebook

    public function getFacebookAuth()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function getFacebookAuthCallBack()
    {
        $facebookUser = Socialite::driver('facebook')->stateless()->user(); // (1)
        $user = $this->createOrGetUser($facebookUser, 'facebook');

        Auth::login($user, true);
        return redirect()->route('home', ['user' => $user]);
    }

    //google

    public function getGoogleAuth()
    {
        return Socialite::driver('google')->redirect();
    }

    public function getGoogleAuthCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = $this->createOrGetUser($googleUser, 'google');
        Auth::login($user, true);

        return redirect()->route('home', ['user' => $user]);
    }

    public function createOrGetUser($providerUser, $provider)
    {
        $account = SocialAccount::firstOrCreate([
            'provider_user_id' => $providerUser->getId(),
            'provider' => $provider,
        ]);

        if (empty($account->user)) {
            $user = User::create([
                'name' => $providerUser->getName(),
                'email' => $providerUser->getEmail(),
                'avatar' => $providerUser->getAvatar(),
            ]);
            $account->user()->associate($user);
        }

        $account->provider_access_token = $providerUser->token;
        $account->save();

        return $account->user;
    }
}