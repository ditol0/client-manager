<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\datauser;

class HomeController extends Controller
{
    public function index(){
        $data = datauser::all();
        return view('User.home', compact('data'));
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'server'=>'required',
            'platform'=>'required',
            'email'=>'required',
        ]);

        // if($request['email']==userdata::where('email', $request['email'])->first()->email){
        //     return back()->with('error', 'Email already exists');
        // }
       
        datauser::create([
           'name'=>$request['name'],
           'server'=>$request['server'],
           'platform'=>$request['platform'],
           'email'=>$request['email'],
        ]);

        return back()->with('success', 'User added successfully');
    }

    public function delete($id){
        datauser::find($id)->delete();
        return back()->with('success', 'User deleted successfully');
    }
}
