<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

class AdminLoginController extends Controller
{
    //GET|HEAD  | AdminLogin  | AdminLogin.index  | App\Http\Controllers\AdminLoginController@index
    public function index()
    {
        return view('admin/login');
    }
    //POST  | AdminLogin  | AdminLogin.store  | App\Http\Controllers\AdminLoginController@store
    public function store(Request $request)
    {
        dd($request);
//        dd(Crypt::encrypt(Input::get('password')));
//        dd(Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')]));
//        if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')]))
//        {
//            return redirect()->intended('dashboard');
//        }
    }
}
