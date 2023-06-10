<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(){
        return view('LLR.login');
    }
    function validate_login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $data = $request->only('email' , 'password');
        if(Auth::attempt($data)){
            return redirect(route('home'));
        }
        return redirect(route('login'))->with('fail', 'Your Login is not valid');
    }
}
