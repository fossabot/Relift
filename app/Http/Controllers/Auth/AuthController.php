<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	/*
	 * 注册页面
	 * */
    public function signup(){
    	return view('home.auth.signup');
    }

	/*
	 * 登录页面
	 * */
    public function signin(){
    	return view('home.auth.signin');
    }

    /*
     * 登出
     * */
    public function logout(){
	    Auth::logout();
	    session()->flash('success', '您已成功退出！');
	    return redirect()->route('login');
    }
}
