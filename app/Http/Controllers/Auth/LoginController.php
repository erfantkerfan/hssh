<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use http\Env\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hekmatinasser\Verta\Verta;

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

    protected function attemptLogin(Request $request)
    {
        $messages  = [
            'valid_captcha' => 'Wrong code. Try again please.'
        ];
        $this->validate($request, [
            'g-recaptcha-response' => 'required',
        ],$messages);
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    public function username()
    {
        return 'username';
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    public function redirectTo()
    {
        auth()->user()->last_login = auth()->user()->login;
        auth()->user()->login = Verta::now();
        auth()->user()->save();
        return Route('panel');
    }

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
