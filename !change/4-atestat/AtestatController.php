<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AtestatProfile;
use Auth;
use DB;
use App\User;
//use App\SpDiplom;
use App\Course;

class AtestatController extends Controller
{	
	

    //public function getAtestat(SpDiplom $request)
    public function getAtestat(Course $model_course)
    {
        
        $currentUser = Auth::user();
        $id_user= $currentUser->id;


 //$details = SpDiplom::select('id_name','course_title')->get()->values()->all();
 $details = $model_course->select('id','course_title')->get()->values()->all();


return view('atestat_profile')->with('details',$details)->with('id_user', $id_user);   	
    }

public function updateAtestat (Request $request, AtestatProfile $atestat) 
    {

    //print_r($request->all()); die;
    
    $data_request = $request->all(); 
    $data_insert = array(); 
    foreach($data_request as $key1 => $value1) {
       if($key1 != '_token' && $key1 != 'sub') {
          foreach($value1 as $key2 => $value2) { 
             $data_insert[$key2][$key1] = $value2;
          }          
       }     
    }
    //$atestat = new AtestatProfile;
    $atestat_remove = $atestat->where('user_id', $data_request['user_id']);
    $atestat_remove->delete();
    //print_r($data_insert); die;
    $atestat->insert($data_insert);

 // dump($request->all());        
        /*
        $data = $request->all();
        $currentUser = Auth::user();
        if($request['sub']) {
            foreach ($request->course_title as  $value) {
             
               
             
            }
 

     //       $query = new AtestatProfile;
     // $query->id_name = $request->get('course_title');

     //     $validateData = $request->validate([
     //       'course_title' => 'required',
     //       'hours' => 'required',
     //      'credits' => 'required',
     // 'marks' => 'required',
     //   'nac_grade' => 'required'
     //    ]);

       // // dump($data);
       //  if($request['sub']) {
       //      $query = new AtestatProfile;
       //      $query->user_id = $request->get('user_id');
       //      $query->id_name = $request->get('course_title');
       //      $query->credits = $request->get('credits');
       //      $query->hours   = $request->get('hours');
       //      $query->marks   = $request->get('marks');
       //      $query->nac_grade = $request->get('nac_grade');
       //      $query->ects_grade = $request->get('ects_grade');
       //     // dump($query);
       //      $query->save();

      
        // $atestat->id_student = $currentUser->id;


      
         
    
        
    
      //  return view('atestat_profile');
        
      }
      */


}
}