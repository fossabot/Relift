<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'post';

    public function author(){
		return $this->belongsTo('Users','uid','id');
    }
}
