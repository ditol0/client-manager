<?php

namespace App\Http\Controllers\Admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
       
        $request->validate([
            'user' => 'required',
            'email' => 'required|email',
            'phone' => 'required|',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            
  ]);


    
    if($request['is_admin'] == 1){
             $user = User::create([
            'user' => $request->user,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
         $user = Auth::login($user);
        
    }
    else{
        $user = User::create([
            'user' => $request->user,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        $user = Auth::login($user);
    }
   

       
      
        return redirect()->route('home');

       
    }
}
