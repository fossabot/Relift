<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	/*
	 * 注册页面
	 * */
    public function signUp(){
    	return view('theme::auth.register');
    }

	/*
	 * 登录页面
	 * */
    public function signIn(){
    	return view('theme::auth.login');
    }

    /*
     * 登出
     * */
    public function logout(){
	    Auth::logout();
	    session()->flash('success', '您已成功退出！');
	    return redirect('index.html');
    }
}
