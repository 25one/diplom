<?php

namespace App\Http\Controllers\Admink;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DownloadProfile;

class UploadoneController extends Controller
{
    public function getDetails(Request $request){
    	$nameimage = 'tmp' . date('YmdHis') . '.' . $request->file($request->whatimage)->getClientOriginalExtension(); 
        $request->file($request->whatimage)->move(public_path() . '/uploads/', $nameimage);
    	return view('admink.user_upload', ['file' => 'public/uploads/' . $nameimage, 'whatimage' => $request->whatimage]);
    }

    public function setDetails(Request $request){
    	$model_downloadprofile = new DownloadProfile;
    	if($request->id) {
    	   $downloadprofile = $model_downloadprofile->find($request->id);
    	   $downloadprofile->update($request->all());
        }
        else DownloadProfile::create($request->all());
        return redirect("/admink.user_download/?id_student=" . $request->id_student);
    }    

}