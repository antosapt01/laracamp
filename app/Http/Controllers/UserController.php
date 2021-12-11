<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function google()
    {
        return Socialite::driver('google')->redirect();
    }
    
    public function handleProviderCallback()
    {
        $callback = Socialite::driver('google')->stateless()->user();
        $name = $callback->getName();
        $initial = "https://ui-avatars.com/api/?name=$name&background=0D8ABC&color=fff";

        $data = [
            'name' => $callback->getName(),
            'email' => $callback->getEmail(),
            'avatar' => $callback->getAvatar(),
            'initial' => $initial,
            'email_varified_at' => date('Y-m-d H:i:s', time()),
        ];
        $user = User::firstOrCreate(['email' => $data['email']], $data);
        Auth::login($user, true);
        return redirect('/');
    }
}
