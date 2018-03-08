<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }

    public function profile($name){
    	$user = User::where('name','=',$name)->first();
    	$profile = $user->profile;
    	$data['name'] = $profile->nickname;
    	$data['description'] = $profile->description;
    	$data['avatar'] = $profile->avatar;
    	$data['background'] = $profile->background;
    	return view('home.profile',['data' => $data]);
    }
}
