<?php

namespace App\Http\Controllers\Auth;

use TCG\Voyager\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
	public function reg(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|string|max:24|min:6|unique:users',
			'email' => 'required|string|email|max:140|unique:users',
			'password' => 'required|string|max:60|min:6|confirmed',
		],[
			'name.required' => '用户名不能为空',
			'name.max' => '用户名不能超过24个字',
			'name.min' => '用户名不能小于6个字',
			'name.unique' => '用户名已被注册',
			'email.required' => '邮箱不能为空',
			'email.email' => '邮箱格式不对',
			'email.max' => '邮箱过长',
			'email.unique' => '邮箱已被注册',
			'password.required' => '密码不能为空',
			'password.max' => '密码不能超过60个字符',
			'password.min' => '密码不能少于6个字符',
			'password.confirmed' => '两次密码不相同',
		]);

		$user = User::create([
			'role_id' => 2,
			'name' => $request->name,
			'email' => $request->email,
			'password' => bcrypt($request->password),
			'created_ip' => getIP(),
		]);

		Auth::login($user);
		return redirect()->route('user',['name' => Auth::user()->name]);
	}
}
