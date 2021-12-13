<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }


    public function customLogin(Request $request)
       {
//             $request->validate([
//                      'name' => 'required',
//                      'password' => 'required'
//                  ]);

                 $credentials = $request->except(['_token']);

//                  $user = User::where('name',$request->name)->first();

                 if (auth()->attempt($credentials)) {

                     return redirect()->route('training')->withSuccess('Access');

                 }else{
                     session()->flash('message', 'Invalid credentials');
                     return redirect()->back();
                 }
       }


    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

}
