<?php

namespace App\Http\Controllers\Back;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller


{

	 public function __construct()
    {
        $this->middleware('auth');
    }


    public function getDashboard(){

    	// if (Auth::check()) {
    	// $user = Auth::user();
    	return view('back.pages.dashboard', compact('user'));

		// }else{
		// 	return view('auth.login');
		// }

    	
    }
}
