<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function loginProcess(Request $request)
    {
        $input = $request->only(['email','password']);
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $check_credential = Auth::attempt($input);
        
        if($check_credential)
        {
            $role = Auth::user()->role;
            if($role == 'Admin'){
                return redirect()->route('dashboard');
            }
            if(in_array($role,['Teacher','Student'])){
                return \redirect()->route('home');
            }
        }else{
            return redirect()->route('login')->with('error','Email dan Password salah');
        }
    }

    public function logout()
    {   
        $role = Auth::user()->role;
        Auth::logout();

        if($role == 'Admin'){
            return redirect()->route('login');
            
            // dd('admin logout');
        }
        if(in_array($role,['Teacher','Student'])){
            return view('Users.home');

        }

        
        
    }
}
