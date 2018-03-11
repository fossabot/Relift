<?php

namespace App\Http\Controllers\Tool;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function uploadTinyImage(){
		$imageFolder = storage_path('app/public/uploads/images/contents/') . date('Ymd', time());
		if (! is_dir($imageFolder)){
			mkdir($imageFolder,0755);
		}

		$temp = $_FILES['file'];
		$image = $imageFolder . '/' . $temp['name'];
		move_uploaded_file($temp['tmp_name'], $image);

		echo json_encode('/storage/uploads/images/contents/' . date('Ymd', time()) . '/' . $temp['name']);
	}
}
