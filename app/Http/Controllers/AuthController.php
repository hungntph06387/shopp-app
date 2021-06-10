<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6', 'max:18']
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->put('LoggedUser', $request->email);
            $user = User::where('email', '=', session('LoggedUser'))->first();
            if ($user->role == 1) {

                return redirect()->intended('admin');
            }

            return redirect()->intended('/');
        }

        return back()->with('fail', 'Email or password fail!');
    }


    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'max:18'],
            'pwcf' => ['required'],

        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->verification_code = sha1(time());    
        if ($user->save()) {
            MailController::sendSingupEmail($user->name, $user->email, $user->verification_code);
            return redirect()->back()->with('success', 'Create account success. Please check email!');
        }
        
    }


    public function verifyAccount(Request $request)
    {
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = User::where(['verification_code' => $verification_code])->first();
        if ($user != null) {
            $user->is_verifited = 1;
            $user->save();
            return redirect()->intended('login');
        }
    }


    public function logout()
    {
        if (session()->has('LoggedUser') || session()->has('cart')) {
            session()->pull('LoggedUser');
            session()->pull('cart');
            return redirect()->intended('/');
        }
    }

    public function fail()
    {
        $user = User::where('email', '=', session('LoggedUser'))->first();

        return view('auth.fail', compact('user'));
    }
}
