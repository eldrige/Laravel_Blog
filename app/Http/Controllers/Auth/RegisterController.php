<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // validate user
        // dd($request->email);
        $this->validate($request, [
            'username' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|confirmed',
        ]);
        // store user
        // redirect to login or dashboard
    }
}
