<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
	public function download($refid,$filename) {
		$file = public_path().'/uploads/'.$refid.'/'.$filename;
		if(file_exists($file)){
			$fileinfo = pathinfo($file);
			$filename = $fileinfo['basename'];
			$headers = array(
				'Content-Type: application/pdf',
				"Content-Disposition: attachment; filename=\"$filename\"",
				'Content-Length: ' . filesize($file),
				);
			return response()->file($file, $headers);
		}
		else
			return abort(404);
	}
}
