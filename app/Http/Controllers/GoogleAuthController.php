<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class GoogleAuthController extends Controller
{
    function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    function callbackGoogle(Request $request)
    {
        try {
            $googleuser = Socialite::driver('google')->user();
            $user = User::where('email', $googleuser->email)->first();
            if (!$user) {
                $user = User::create([
                    'name' => $googleuser->name,
                    'email' => $googleuser->email,
                ]);
            }
            auth()->login($user);
            return redirect(route('home'));
        } catch (Exception $e) {
            return redirect(route('login'))->with('fail', 'Something went wrong .Please try agian');
        }
    }
}
