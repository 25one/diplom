<?php

namespace App\Http\Controllers\Admink;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserProfile;

class DetailsoneController extends Controller
{
    public function getDetails(UserProfile $details)
    {
    	return view('admink.user_details', compact('details'));    	
    }

    public function getDetailsPrint(UserProfile $details)
    {
    	return view('admink.user_print', compact('details'));    	
    }    

}