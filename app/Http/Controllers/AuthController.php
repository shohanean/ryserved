<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function register(){
        $host_types = json_decode(Http::get('http://159.223.62.74:8080/api/v1/hosts/host_type'))->data;
        $countries = json_decode(Http::get('http://159.223.62.74:8080/api/v1/loc/countries'))->data;
        return view('auth.register', compact('host_types', 'countries'));
    }
    function register_post(Request $request){
        // return $request;
        $response = Http::post('http://159.223.62.74:8080/api/v1/auth/host_sign_up', [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'hostType' => $request->hostType,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $request->password,
            'tin' => $request->tin,
            'tid' => $request->tid,
            'bin' => $request->bin,
            'trade_license' => $request->trade_license,
            'country' => $request->country,
            'city' => $request->city,
            'area' => $request->area,
            'road' => $request->road,
            'plot' => $request->plot,
            'subLocality' => $request->subLocality,
            'address' => $request->address,
            'img' => $request->file('img'),
            'hostUniqueId' => "b9a13d60-b107-11ed-afa1-0242ac120002",
            'createdBy' => "b9a13d60-b107-11ed-afa1-0242ac120002",
        ]);
        return $response;
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
