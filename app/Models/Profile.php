<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $fillable = [
		'uid', 'age', 'sex', 'nickname', 'avatar', 'background', 'ip', 'mobile',
	];
}
