<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Formssurgeryday;
use Auth;



class FormssurgerydayController extends Controller
{
	public function Formindex() {
	 return view('formssurgeryday');
	}



	public function postAction(Request $request)
	{

		$currentUser = Auth::user();
		

		$validateData = $request->validate([
			'viewsurgery'=>'required|max:255',
			'num_card'=>'required|:unique:formssurgery',
			'type_work'=>'required'
		]);

			
		$data=$request->all();

		$formssurgeryday = new Formssurgeryday();

		$formssurgeryday->viewsurgery = $request->get('viewsurgery');
		$formssurgeryday->num_card = $request->get('num_card');
		$formssurgeryday->type_work = $request->get('type_work');
		$formssurgeryday->id_student = $currentUser->id;

		$formssurgeryday->save();
		return view('formssurgeryday');
	}


		
}



	
