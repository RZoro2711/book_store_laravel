<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class FacebookAuthController extends Controller
{
    function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    function callbackFacebook(Request $request)
    {
        try {
            $facebookuser = Socialite::driver('facebook')->user();
            $user = User::where('email', $facebookuser->email)->first();
            if (!$user) {
                $user = User::create([
                    'name' => $facebookuser->name,
                    'email' => $facebookuser->email,
                ]);
            }
            auth()->login($user);
            return redirect(route('home'));
        } catch (Exception $e) {
            return redirect(route('login'))->with('fail', 'Something went wrong .Please try agian');
        }
    }
}
