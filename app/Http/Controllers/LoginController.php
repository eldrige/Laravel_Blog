<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|max:255',
            'password' => 'required',
        ]);

        // this signs in a user

        if (!auth()->attempt($request->only('email', 'password'))) {
            // returns it to the last route
            return back()->with('status', 'Invalid login details');
        }



        return redirect()->route('dashboard');
    }
}
