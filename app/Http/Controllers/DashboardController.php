<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    function dashboard(){
        if(session('generated_uuid')){
            $hosts = Http::get('159.223.62.74:8080/api/v1/user_list/host_list/2')->collect('data');
            return view('authenticated.dashboard', compact('hosts'));
        }
        else{
            return redirect('login');
        }
    }
}
