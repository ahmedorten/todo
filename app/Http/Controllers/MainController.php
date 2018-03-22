<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserLoginRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index () {
        return view('index');
    }

    public function loginPage(){
        return Auth::check() ? redirect()->route('index') : view('login');
    }

    public function login(UserLoginRequest $request){
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('index');
        }

        return redirect()->back()->with(['fail' => 'invalid Username or Password !']);
    }

    public function getRegister(){
        return Auth::check() ? redirect()->route('index') : view('register');;
    }

    public function register(RegisterRequest $request){
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('login')->with(['success' => 'Register successfully!']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
