<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\User;
use TCG\Voyager\Models\Category;

class PageController extends Controller
{
    public function user(){
    	$users = User::all();
    	return view('theme::page.user' ,compact('users'));
    }
}
