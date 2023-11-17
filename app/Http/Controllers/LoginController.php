<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }
    public function login(Request $request)
    {   

        // dd($request->all());
        $this->validate($request, [
            'username' => 'required|max:255',
            'password' => 'required'
        ]);

        if(auth()->attempt($request->only('username','password'))){
            return redirect()->route('dashboard');
        }
        return back()->with('status', 'Invalid login credentials!');
    }

    public function logout(Request $request){
        auth()->logout();

        return redirect()->route('dashboard');
    }
}
