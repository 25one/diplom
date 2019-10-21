<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nightworkday;
use Auth;
use User;


class FormsdayController extends Controller
{
    public function Getsurgery()
    {
        return view('nightworkday');
    }

    public function Postsurgery(Request $request)
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

        $nightworkday = new Nightworkday();

        $nightworkday->fio = $request->get('fio');
        $nightworkday->diagnoses = $request->get('diagnoses');
        $nightworkday->num_card = $request->get('num_card');
        $nightworkday->apdate = $request->get('apdate');
        $nightworkday->work = $request->get('work');
        $nightworkday->station = $request->get('station');

       $nightworkday->id_student = $currentUser->id;


        $nightworkday->save();
        return view('nightworkday');
    }


}
