<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    // Funtion overriding showLoginForm() which is already defined inside vendors(C:\xampp\htdocs\madhuLaravelNewsHub\app\Http\Controllers\Auth\LoginController.php)-->C:\xampp\htdocs\madhuLaravelNewsHub\vendor\laravel\framework\src\Illuminate\Foundation\Auth\AuthenticatesUsers.php

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        // Previous code from vendor
        // return $this->loggedOut($request) ?: redirect('/');
        // our code logout bhayapachi login ma nai redirect garne k ok from our system
        return $this->loggedOut($request) ?: redirect()->route('login');
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

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
