<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $loginData = $request->only('email', 'password');
        try {
            if (Auth::attempt($loginData)) {
                $user = Auth()->user();
                return redirect('home')->with('success', 'Welcome ' . $user->name);
            } else {
                return back()->with('error', 'Incorrect email or password!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}