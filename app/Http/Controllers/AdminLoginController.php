<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminLoginController extends Controller
{
    //GET|HEAD  | AdminLogin  | AdminLogin.index  | App\Http\Controllers\AdminLoginController@index
    public function index()
    {
        return view('admin/login');
    }
    //POST  | AdminLogin  | AdminLogin.store  | App\Http\Controllers\AdminLoginController@store
    public function store()
    {
        dd(Input::all());
    }
}
