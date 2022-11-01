<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */


    public function login_redirect($request){
        
        $user = User::where('email',$request->email && 'password','=',$request->password)->first();

        if($user!= null && $user->user_type == 10){

            redirect()->view('dashboard');
        }
        elseif($user!= null && $user->user_type == 20){

            redirect()->view('orders');
        }
        elseif($user!= null && $user->user_type == 30){

            redirect()->view('homepage');
        }
    }
     
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
