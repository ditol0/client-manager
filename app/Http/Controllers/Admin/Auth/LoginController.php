<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;



class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(Request $request ){

        $key = Str::lower($request->email).'|'.$request->ip();

        if(RateLimiter::tooManyAttempts($key, 5)){
            return back()->with('error','Too many attempts. Please try again later.');
        }

        $userdata = $request->validate([
            'email' => 'required|email',
            'password' => 'required',]);

            if(Auth::attempt($userdata)){
                RateLimiter::clear($key);

                $request ->session()->regenerate();

                return redirect()->route('home');
            }


            RateLimiter::hit($key, 60);

            return back()->with('error', 'Invalid login details');
    }




    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
