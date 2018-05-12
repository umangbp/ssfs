<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CMS;
use App\Services;

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

        try {
            
            $about_us = CMS::where('slug','home_about_us')->select('slug','title','content')->first();
            $services = Services::select('id', 'title', 'short_desc', 'description', 'position')->orderBy('position')->get();

            if(!empty($about_us) && !empty($services)){

                $content['about_us'] = $about_us;
                $content['services'] = $services;

                return view('front.index')->with('content', $content);
            }
            else{

            }

        } catch (Exception $e) {
            
        }
    }

}
