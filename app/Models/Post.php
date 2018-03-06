<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    public function author(){
		return $this->belongsTo('App\\Models\\User','uid','id');
    }
}
