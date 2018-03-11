<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class LoginController extends Controller
{
	protected $email_regex = '/([\w\-]+\@[\w\-]+\.[\w\-]+)/';

	public function login(Request $request)
	{
		if (preg_match($this->email_regex,$request->email)){
			$va = 'required|email|max:255';
			$attempt = 'email';
		}else{
			$va = 'required';
			$attempt = 'name';
		}

		$this->validate($request, [
			'email' => $va,
			'password' => 'required',
		],[
			'email.required' => '请填写邮箱/用户名',
			'email.email' => '邮箱格式不正确',
			'email.max' => '邮箱过长',
			'password.required' => '请填写密码'
		]);

		if (Auth::attempt([
			$attempt => $request->email,
			'password' => $request->password
		],$request->has('remember'))) {
			Profile::find(Auth::id())->save(['ip' => getIP()]);
			return redirect()->route('profile',['name' => Auth::user()->name]);
		} else {
			session()->flash('danger', '很抱歉，你的邮箱/用户名和密码不匹配');
			return redirect()->back();
		}
	}
}
