<?php

namespace App\Http\Controllers;

use App\Models\FoodModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert2\Facades\Alert;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    //
    public function indexlogin()
    {
        return view('signup');
    }
    public function validate(Request $request)
    {
        $validated = $request->only('email', 'password');

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard')->with('Login Success', 'Welcome');
        }
        return redirect()->route('login')->with('Login Failed', 'Please check your email or password again!');


    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back('/')->with('Logout', 'Nice to see you again');
    }
}
