<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    //GET | App\Http\Controllers\AdminLoginController@index
    public function index()
    {
        return view('admin/login');
    }
    //POST | App\Http\Controllers\AdminLoginController@login
    public function login()
    {
        /*
         * attempt 方法接收键值数组对作为第一个参数，数组中的值被用于从数据表中查找用户，因此，在上面的例子中，用户将会通过email 的值获取，如果用户被找到，经哈希运算后存储在数据中的密码将会和传递过来的经哈希运算处理的密码值进行比较。如果两个经哈希运算的密码相匹配那么将会为这个用户开启一个认证Session。
         *                                                                             ————laravel学院文档
         * */
        //通过哈希值比较，所以数据库存入Hash::make()的返回值
        //dd(Hash::make(Input::get('password')));
        //laravel使用Crypt门面对数据进行加密
        //dd(Crypt::encrypt(Input::get('password')));
        //使用Auth门面进行用户认证，如果认证成功的话 attempt 方法将会返回 true。否则，返回 false。
        if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')]))
            return $status = 1;
        else
            return $status = 0;
    }
    //GET | App\Http\Controllers\AdminLoginController@logout
    public function logout()
    {
        dd(Auth::user());
    }
}
