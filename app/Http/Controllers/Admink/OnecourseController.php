<?php

namespace App\Http\Controllers\Admink;

use App\User;
use App\UserProfile;
use App\Http\Controllers\Controller;

class OnecourseController extends Controller
{
    /**
     * @param $course
     * @param $form
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCourse($course,$form)
    {
        $form=='fulltime'?$form='очная':$form='заочная';
       $students=User::where('course',$course)->where('form',$form)->pluck('id');
       $profiles=UserProfile::whereIn('user_id',$students)->get();
    	return view('admink.onecourse')->with('profiles',$profiles);
    }

}
    