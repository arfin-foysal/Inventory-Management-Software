<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function dashboard(){
        return view('pages.admin.dashboard');
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('login');
    }


}
