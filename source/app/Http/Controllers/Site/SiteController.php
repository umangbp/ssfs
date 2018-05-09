<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{	
	/**
	 * Default Class constructor
	 */
    public function __construct(){

    }

    /**
     * Function to load home page
     * @return view index.blade
     */
    public function loadHomePage(){
    	return view('front.index');
    }

}
