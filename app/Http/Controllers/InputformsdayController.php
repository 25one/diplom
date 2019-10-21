<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Inputformsday;
use Auth;
use User;


class InputformsdayController extends Controller
{
    public function Formindex()
    {
        return view('inputformsday');
    }

    public function postAction(Request $request)
    {
        $currentUser = Auth::user();

        $validateData = $request->validate([
            'fio'=>'required|max:255',
            'diagnoses' => 'required|max:255',
            'num_card' => 'required|:unique:inputforms',
            'apdate' => 'required'
        ]);

        $data = $request->all();

        $inputFormsday = new Inputformsday();

        $inputFormsday->fio = $request->get('fio');
        $inputFormsday->diagnoses = $request->get('diagnoses');
        $inputFormsday->num_card = $request->get('num_card');
        $inputFormsday->apdate = $request->get('apdate');
        $inputFormsday->id_student = $currentUser->id;


        $inputFormsday->save();
        return view('inputformsday');
    }


}
