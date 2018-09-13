<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\SendCode;

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
    protected $redirectTo = '/posts';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function login(Request $requets){

    //     $this->validateLogin($requets);
    //     if($this->hasTooManyLoginAttemps($request)){
    //         $this->fireLockoutEvent($request);
    //         return $this->sendLockoutResponse($request);
    //     }

    //     //---------------------------------------

    //     if($this->guard()->validate($this->credentials($request))){

    //         $user = $this->guard()->getLastAttempted();
    //         if($user->active && $this->attemptLogin($request)){

    //             return $this->sendLoginResponse($request);

    //         } else {

    //             $this->incrementLoginAttempts($request);
    //             $user->code = SendCode::sendCode($user->mobile);
                
    //             if($user->save()){
    //                 return redirect('/verify?phone='.$user->mobile);
    //             }
    //         }
    //     }

    //     //---------------------------------------

    //     $this->incrementLoginAttempts($request);
    //     return $this->sendFailedLoginResponse($request);

    // }
}
