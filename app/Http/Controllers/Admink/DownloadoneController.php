<?php

namespace App\Http\Controllers\Admink;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DownloadProfile;

class DownloadoneController extends Controller
{
    public function getDetails(Request $request){
    	$model_downloadprofile = new DownloadProfile;
    	$images = $model_downloadprofile->where('id_student', $request->id_student)->get();
    	if(count($images)) $id = $images[0]->id; else $id = '';
    	return view('admink.user_download', ['id_student' => $request->id_student, 'images' => $images, 'id' => $id]);    
    }

}