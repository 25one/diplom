<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserProfile;
use Auth;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
	//private $data = [];

	public function profileAction()//($id)
	{
		//$this->data['profileData'] = UserProfile::find($id);
		return view('user_profile'/*, $this->data*/);

		// <input type="email" class="form-control" name=""  id="inputEmail4" placeholder="Email" required value="{$profileData->email}">
	}

	public function userAction(Request $request)
	{
        $currentUser = Auth::user();
        $data=$request->all();
		$userprofile = new UserProfile();

		$userprofile->email = $request->get('email');
		$userprofile->surname = $request->get('surname');
		$userprofile->name = $request->get('name');
		//$userprofile->user_id = $currentUser->id;
	    $userprofile->lastname = $request->get('lastname');
        $userprofile->gender = $request->get('gender');
        $userprofile->surnamefirst = $request->get('surnamefirst');
        $userprofile->fullname_en = $request->get('fullname_en');

        $userprofile->country = $request->get('country');
            
        $userprofile->city = $request->get('city');
            $userprofile->village = $request->get('village');
            $userprofile->index = $request->get('index');
            $userprofile->adress = $request->get('adress');
            $userprofile->house = $request->get('house');
            $userprofile->apartment = $request->get('apartment');
            $userprofile->telc = $request->get('telc');
            $userprofile->telm = $request->get('telm');

            $userprofile->country1 = $request->get('country1');
            
            $userprofile->city1 = $request->get('city1');
            $userprofile->village1 = $request->get('village1');
            $userprofile->index1 = $request->get('index1');
            $userprofile->adres1 = $request->get('adres1');
            $userprofile->house1 = $request->get('house1');
            $userprofile->apartment1 = $request->get('apartment1');
            $userprofile->country2 = $request->get('country2');
            $userprofile->city2 = $request->get('city2');
            $userprofile->village2 = $request->get('village2');
            $userprofile->index2 = $request->get('index2');
            $userprofile->adres2 = $request->get('adres2');
            $userprofile->tel1 = $request->get('tel1');

        $userprofile->save();
		return view('user_profile'); 
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UserupdateRequest $request
     * @param  \App\UserProfile $modeluserprofile
     * @return \Illuminate\Http\Response
     */
    public function userUpdate(ProfileRequest $request, UserProfile $userprofile)
    {
        $userprofile->update($request->all());

        return redirect('/admink.user_details/' . $request->id)->with('message-updated', __('Запись была успешно отредактированна...'));

    }   

 }  
