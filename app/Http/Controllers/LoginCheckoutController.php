<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginCheckoutController extends Controller
{
    public function index()
    {
        return view("checkout.login");
    }

    /*
     *
     */
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('checkout/tablet');
        } else {
            return redirect()->route('index');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');

    }
}
