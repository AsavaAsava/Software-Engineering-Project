<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('pages/homepage');
    }
    public function dashboard()
    {
        
        return view('dashboard');
    }

    public function redirect() {
        $usertype=Auth::user()->user_type;
        if($usertype==10){
            return view('dashboard');
        }
        elseif($usertype==20){
            return view('pages/homepage');
        }
        elseif($usertype==30){
            return view('pages/homepage');
        }
    }
}
