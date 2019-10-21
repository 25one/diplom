<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Formsnight;
use Auth;
use User;


class FormsnightController extends Controller
{
    public function Nightsurgery()
    {
        return view('nightwork');
    }

    public function Worksurgery(Request $request)
    {
        $currentUser = Auth::user();

        $validateData = $request->validate([
            'diagnoses' => 'required|max:1000',
            'apdate' => 'required',
            'fio' => 'required|max:255',
            'work' => 'required|max:255',
            'station' => 'required|max:255'

        ]);

        $data = $request->all();

        $formsnight = new Formsnight();

        $formsnight->fio = $request->get('fio');
        $formsnight->diagnoses = $request->get('diagnoses');
        $formsnight->num_card = $request->get('num_card');
        $formsnight->apdate = $request->get('apdate');
        $formsnight->work = $request->get('work');
        $formsnight->station = $request->get('station');

       $formsnight->id_student = $currentUser->id;


        $formsnight->save();
        return view('nightwork');
    }


}
