<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use VoyagerThemes\Models\ThemeOptions;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\User;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $carousel_num = ThemeOptions::where('key', 'carousel_num')->first()->value;
	    $posts = Post::where('status', 'PUBLISHED')->latest()->paginate(3);
	    foreach ($posts as $key => $post){
	    	$p[$key]['author'] = $post->authorId->name;
	    	$p[$key]['category'] = $post->category->name;
	    	$p[$key]['title'] = $post->title;
	    	$p[$key]['content'] = $post->body;
	    	$p[$key]['image'] = $post->image;
	    	$p[$key]['slug'] = $post->slug;
	    	$p[$key]['created'] = $post->created_at;
	    }
        return view('theme::home.home', ['num' => $carousel_num, 'paginate' => $posts, 'posts' => $p]);
    }

    public function post($slug){
		$post = Post::where('slug', $slug)->first();
		$post->_author = $post->authorId->name;
		$post->_category = $post->category->name;

		return view('theme::home.post', ['post' => $post->toArray()]);
    }

    public function user($name){
	    $user = User::where('name', $name)->first();

	    return view('theme::home.user', ['user' => $user]);
    }
}
