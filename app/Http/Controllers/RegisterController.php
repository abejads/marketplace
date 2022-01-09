<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', 
            [
                "title"=> "Register"
            ]
        );
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|confirmed|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/'

        ]);

        $validated['password'] = Hash::make($validated['password']);

        $result = User::create($validated);
        // dd($result);
        if($result) {
            return  redirect('/login')->with('success', 'Registration Successfull! Please login');
        }
        else{
            return back()->with('fail','Something went wrong');
        }
    }

}
