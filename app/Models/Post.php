<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function author(){
		return $this->belongsTo('App\\Models\\AdminUser','uid','id');
    }

    public function page(){
    	return self::paginate(1);
    }

    public function allPosts(){
    	$posts = $this->page();
    	$p = [];
    	foreach ($posts as $key => $value){
			foreach ($value->toArray() as $k => $v){
				if ($k == 'uid'){
					$p[$key][$k] = self::where('uid', '=', $v)->first()->author->name;
				}
				$p[$key][$k] = $v;
			}
	    }

	    return $p;
    }
}
