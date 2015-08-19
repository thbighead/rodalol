<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    //coisos da documentacao
    protected $redirectPath = 'quemsomos';
    protected $loginPath = 'contato';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'login' => 'required | max:255 | email',
            'modalPassword' => 'required | min:5 | max:20'
        ]);

        $user = User::where('email', $request->login)->first();

//      dd($user);
        if( !is_null($user) && Hash::check($request->modalPassword, $user->password) ) {
            Auth::login($user);
//            Auth::attempt(['email' => $request->login, 'password' => $request->modalPassword]);
//            header('Location: '.$_SERVER['REQUEST_URI']);
            return 'logou, porra!';
        } else {
            dd(Hash::check($request->modalPassword, $user->password));
            return 'num logou';
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return 'dislogô';
    }
}