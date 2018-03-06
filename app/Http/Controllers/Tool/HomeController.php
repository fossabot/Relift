<?php

namespace App\Http\Controllers\Tool;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function uploadTinyImage(){
		$imageFolder = storage_path('app/public/uploads/images/contents/') . date('Ymd', time()) . '/';

		reset ($_FILES);
		$temp = current($_FILES);
		if (is_uploaded_file($temp['tmp_name'])){

			/*
			  If your script needs to receive cookies, set images_upload_credentials : true in
			  the configuration and enable the following two headers.
			*/
			// header('Access-Control-Allow-Credentials: true');
			// header('P3P: CP="There is no P3P policy."');

			// Sanitize input
			if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
				header("HTTP/1.1 400 Invalid file name.");
				return;
			}

			// Verify extension
			if (!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))) {
				header("HTTP/1.1 400 Invalid extension.");
				return;
			}

			// Accept upload if there was no origin, or if it is an accepted origin
			$filetowrite = $imageFolder . $temp['name'];
			move_uploaded_file($temp['tmp_name'], $filetowrite);

			// Respond to the successful upload with JSON.
			// Use a location key to specify the path to the saved image resource.
			// { location : '/your/uploaded/image/file'}
//			echo json_encode(['location' => 'storage/uploads/images/contents/' . date('Ymd', time()) . '/' . $temp['name']]);
			echo json_encode($temp);
		} else {
			// Notify editor that the upload failed
			header("HTTP/1.1 500 Server Error");
		}
	}
}
