<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    function login() {
        return view('BackEnd.login');
    }
    function getIndex() {
        return view('BackEnd.index');
    }



    function postLogin(LoginRequest $r) {
        $email=$r->email;
        $password=$r->password;
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return  redirect('../admin');
        }else{
            return redirect('login')->withInput()->with('thongbao','Tài khoản hoặc mật khẩu không chính xác');
        }
    }

    function getLogout() {
        Auth::logout();
        return redirect('login');

    }
}

