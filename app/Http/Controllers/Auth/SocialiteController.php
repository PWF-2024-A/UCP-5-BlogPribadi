<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SocialiteController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $githubUser = Socialite::driver('github')->user();

            // Find or create user
            $user = User::firstOrCreate([
                'email' => $githubUser->getEmail(),
            ], [
                'name' => $githubUser->getName(),
                'github_id' => $githubUser->getId(),
                'avatar' => $githubUser->getAvatar(),
                'password' => bcrypt(Str::random(16)), // Use Str::random
            ]);

            // Log in the user
            Auth::login($user, true);

            return redirect()->intended('/');
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors(['msg' => 'Unable to login with GitHub.']);
        }
    }
}
