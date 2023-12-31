<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function register(){
        return view('LLR.register');
    }
    function registration(Request $request){
        $user = new User();
        $user->name = request()->name;
        $user->email = request()->email;
        $user->password =Hash::make(request()->password);
        $user->save();
        return redirect(route('login'))->with('success', 'Register Successful!');
    }
}
