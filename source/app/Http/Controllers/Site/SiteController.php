<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CMS;
use App\Services;
use App\Settings;

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
            
            // fetching CMS data
            $cms = CMS::whereIn('slug',['home_about_us'])->select('slug','title','content')->get();
            
            // fetching list of services
            $services = Services::select('id', 'title', 'url','short_desc', 'description', 'position')->orderBy('position')->get();
            
            // if records exist
            if(!empty($cms) && !empty($services)){

                $cms_array = [];
                $contacts_array = [];

                foreach ($cms as $key => $content) {
                    $cms_array[$content->slug] = $content->content;
                }


                $content['cms'] = $cms_array;
                $content['services'] = $services;

                return view('front.index')->with('content', $content)->with('headerData', $this->fetchHeaderData());
            }
            else{

            }

        } catch (Exception $e) {
            
        }
    }

    /**
     * Function to load service page
     * @param  string $name - name of service
     * @return view   service
     */
    public function loadServicePage($name){

    }

    /**
     * Function to load about us page
     */
    public function loadAboutUsPage(){

    }

    /**
     * Function to load contact us page
     * @return 
     */
    public function loadContactUsPage(){

    }

    /**
     * Function to load careers page
     * @return 
     */
    public function loadCareersPage(){

    }

    /**
     * Function to fetch data to display in header
     * @return Array headerData
     */
    private function fetchHeaderData(){

        $headerData = [];

        try {

            // fetching contect info
            $contactInfo = Settings::whereIn('name', ['contact_email', 'contact_number', 'company_name'])->select('id', 'name', 'value')->get();
            $cms = CMS::whereIn('slug',['short_address','full_address'])->select('slug','title','content')->get();
            $services = Services::select('id', 'title','url','short_desc', 'description', 'position')->orderBy('position')->get()->toArray();


             // if records exist
            if(!empty($cms) && !empty($contactInfo) && !empty($services)){

                foreach ($cms as $key => $content) {
                    $headerData[$content->slug] = $content->content;
                }

                foreach ($contactInfo as $key => $info) {
                    $headerData[$info->name] = $info->value;
                }

                $headerData['services'] = $services;

                return $headerData;
            }
            else{

            }

        } catch (Exception $e) {
            
        }
    }

}
