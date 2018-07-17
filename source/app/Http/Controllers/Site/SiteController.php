<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CMS;
use App\Services;
use App\Settings;
use App\Banner;
use App\Careers;
use App\TeamMembers;
use App\MetaInfo;

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
            $services = Services::select('id', 'title', 'url','short_desc', 'description', 'position')->orderBy('position')->limit(3)->get();

            $banners = Banner::where('status', 1)->select('id', 'banner_text', 'banner_sub_text', 'banner_image')->orderBy('sequence_no')->get();
       
            // if records exist
            if(!empty($cms) && !empty($services) && !empty($banners)){

                $cms_array = [];
                $contacts_array = [];

                foreach ($cms as $key => $content) {
                    $cms_array[$content->slug] = $content->content;
                }

                foreach ($banners as $key => $banner) {
                    $banners[$key]->banner_image = url('front/images/home-slider/'.$banner->banner_image);
                }

                $content['cms'] = $cms_array;
                $content['services'] = $services;

                return view('front.index')->with('content', $content)
                                          ->with('banners', $banners)
                                          ->with('metaData', $this->fetchMetaData('home'))
                                          ->with('headerData', $this->fetchHeaderData());
            }
            else{
                return view('front.error');
            }

        } catch (\Exception $e) {
            return view('front.error');
        }
    }

    /**
     * Function to load service page
     * @param  string $name - name of service
     * @return view   service
     */
    public function loadServicePage($name){


        try {

            $service = Services::where('url',$name)->select('id','title','url','description', 'image')->first();

            if(!empty($service)){

                $service->image = url('front/images/services/'.$service->image);

                return view('front.service')->with('service_details', $service)
                                            ->with('metaData', $this->fetchMetaData($name))
                                            ->with('headerData', $this->fetchHeaderData());
            }
            else{
                return view('front.error');
            }

        } catch (\Exception $e) {
            return view('front.error');
        }

    }

    /**
     * Function to load about us page
     */
    public function loadAboutUsPage(){

        $about_us = CMS::whereIn('slug',['about-us','about-us-vision'])->select('id','slug','title','content')->get();

        if(!empty($about_us)){

            $about_us_content = [];

            foreach ($about_us as $key => $value) {
                $about_us_content[$value->slug] = $value;
            }

            return view('front.about')->with('headerData', $this->fetchHeaderData())
                                      ->with('metaData', $this->fetchMetaData('about-us')) 
                                      ->with('about_us', $about_us_content);
        }   
        else{
            return view('front.error');
        }
    }

    /**
     * Function to load contact us page
     * @return 
     */
    public function loadContactUsPage(){

        $contact_us_page = CMS::whereIn('slug', ['contact-us','short_address'])->get();


        if(!empty($contact_us_page)){

            $contact_us_data = [];

            foreach ($contact_us_page as $key => $data) {
                $contact_us_data[$data->slug] = $data; 
            }

            return view('front.contact')->with('headerData', $this->fetchHeaderData())
                                        ->with('metaData', $this->fetchMetaData('contact-us'))
                                        ->with('contact_us_data', $contact_us_data);
        }
        else{
            return view('front.error');
        }
    }

    /**
     * Function to load careers page
     * @return 
     */
    public function loadCareersPage(){

        try {
        
            $careers = Careers::where('status', 1)->select('job_title', 'job_description', 'job_location')->get();

            return view('front.careers')->with('careers', $careers)
                                        ->with('metaData', $this->fetchMetaData('careers'))
                                        ->with('headerData', $this->fetchHeaderData());

        } catch (Exception $e) {
            return view('front.error');
        }

    }

    /**
     * Function to load Team page
     * @return 
     */
    public function loadTeamPage(){

        try {
            
            $members = TeamMembers::where('status',1)->select('id', 'first_name', 'last_name', 'image', 'designation')->get();

            return view('front.team')->with('members', $members)
                                     ->with('metaData', $this->fetchMetaData('site'))   
                                     ->with('headerData', $this->fetchHeaderData());

        } catch (\Exception $e) {
            return view('front.error');
        }

    }

    /**
     * Function to fetch data to display in header
     * @return Array headerData
     */
    private function fetchHeaderData(){

        $headerData = [];

        try {

            // fetching contect info
            $contactInfo = Settings::whereIn('name', ['contact_email', 'contact_number', 'company_name','happy_clients_count','people_catered_count','receipes_count','whatsapp_number'])->select('id', 'name', 'value')->get();
            
            $cms = CMS::whereIn('slug',['short_address','full_address'])->select('slug','title','content')->get();

            $services = Services::select('id', 'title','url','short_desc', 'description', 'position')->orderBy('position')->limit(3 )->get()->toArray();


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
                return view('front.error');
            }

        } catch (\Exception $e) {
            return view('front.error');
        }
    }


    /**
     * Fetch Meda Data
     * @param  string $slug 
     * @return array       
     */
    public function fetchMetaData($slug=''){

        try {
            
            if($slug==''){
                $slug = 'site';
            }

            // check if slug exist
            if(MetaInfo::where('page_name', $slug)->exists()){
                $meta = MetaInfo::where('page_name', $slug)->select('page_name', 'meta_title', 'meta_description', 'meta_keywords')->first();                
            }
            else{
                $meta = MetaInfo::where('page_name', 'site')->select('page_name', 'meta_title', 'meta_description', 'meta_keywords')->first();
            }

            // check if meta is not empty
            if(!empty($meta)){
                return $meta->toArray();
            }
            else{
                return [];
            }
            

        } catch (\Exception $e) {
            return []; 
        }

    }
}
