<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function register(){
        return view('auth.register');
    }
    function login(){
        if (session('generated_uuid')) {
            return redirect('dashboard');
        } else {
            return view('auth.login');
        }
    }
    function login_post(Request $request){
        $request->validate([
            '*' => 'required'
        ]);
        $response = Http::post('159.223.62.74:8080/api/v1/auth/host_sing_in?phone='. $request->phone .'&password='. $request->password);
        if(json_decode($response)->success){
            session(['generated_uuid' => Str::uuid()]);
            session(['auth_user' => json_decode($response)]);
            return redirect('dashboard');
        }
        else{
            return back()->with('login_error', 'Your phone number or password wrong!');
        }
    }
    function logout(){
        Session::flush();
        return redirect('login');
    }
}
