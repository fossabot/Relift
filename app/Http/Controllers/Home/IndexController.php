<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use VoyagerThemes\Models\ThemeOptions;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\User;
use TCG\Voyager\Models\Category;

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
	    	$p[$key]['category_slug'] = $post->category->slug;
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
		$post->_category_slug = $post->category->slug;

		return view('theme::home.post', ['post' => $post->toArray()]);
    }

    public function user($name){
	    $user = User::where('name', $name)->first();

	    return view('theme::home.user', ['user' => $user]);
    }

    public function category($slug){
	    $category = Category::where('slug', $slug)->first();
		$num = count($category->posts);
		$posts = [];
	    foreach ($category->posts as $key => $post){
	    	$posts[$key]['title'] = $post->title;
	    	$posts[$key]['slug'] = $post->slug;
		    $posts[$key]['author'] = $post->authorId->name;
		    $posts[$key]['image'] = $post->image;
		    $posts[$key]['body'] = $post->body;
		    $posts[$key]['category'] = $category->name;
	    }
	    return view('theme::home.category', ['num' => $num, 'posts' => $posts, 'category' => $category->name]);
    }
}
