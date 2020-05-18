<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            return view('success_login');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
        
    }

    public function successlogin()
    {
        return view('success_login');
    }

    public function logout()
    {
        Auth::logout();
        return view('welcome');
    }
}
