<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminConfig extends Model
{
	protected $table = 'admin_config';

	protected $fillable = [
		'name', 'value', 'description',
	];
}
