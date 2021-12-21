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
        if (Auth::check()) {
            return redirect(route('index'));
        } else {
            return view('auth.login');
        }
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

            if (!session()->has('url.intended')) {
                session(['url.intended' => url()->previous()]);
            }
            return redirect(session('url.intended'))->withSuccess('Access');
        } else {
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }


    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
}
