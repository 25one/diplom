<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Formspracticeday;

use Auth;



class FormspracticedayController extends Controller
{
	public function Practicegetsurgery() {
	 return view('formspracticeday');
	}



	public function Practicesurgery (Request $request)
	{

		$currentUser = Auth::user();
		

		$validateData = $request->validate([
			'get_skills'=>'required|max:255',
			'sum_number'=>'required'
			
		]);

			
		$data=$request->all();

		$formssurgeryday = new Formspracticeday();

		$formssurgeryday->get_skills = $request->get('get_skills');
		$formssurgeryday->sum_number = $request->get('sum_number');
		$formssurgeryday->id_student = $currentUser->id;

		$formssurgeryday->save();
		return view('formspracticeday');
	}
}