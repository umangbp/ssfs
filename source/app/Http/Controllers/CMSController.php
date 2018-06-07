<?php

namespace App\Http\Controllers;

use App\CMS;
use App\Settings;
use App\Careers;
use App\Banner;
use App\Services;
use App\TeamMembers;

use Illuminate\Http\Request;
use Validator;

class CMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cms_data = CMS::where('status',1)->get()->toArray();

        return view('admin.cms.cms-list')->with('cms_pages', $cms_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // fetch content from data for edited record
        $cms = CMS::find($id);

        // if record exist and data fetched successfully 
        if(!empty($cms)){
            return view('admin.cms.cms-edit')->with('cms_data',$cms);    
        }
        else{
            // if record does not exist of error while fetching record 
            return redirect('ssfs-admin/not-found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        // validate the data before saving
        $validator = Validator::make($request->all(), [
            'title' => 'required | max:200',
            'content' => 'required'
        ]);

        // if all the validation rules are satisfied
        if(!$validator->fails()){

            try {
                
                // update the information
                $updated_cms = CMS::where('id', $id)->update([
                    'title' => $request->title,
                    'content' => $request->content
                ]);

                return redirect('ssfs-admin/cms')->with('update_status', 'CMS content updated successfully');

            } catch (Exception $e) {
                
                return back()->with('update_failed', 'Something went wrong. Please try again in a while')->withInput();

            }

        }
        else{
            return back()->withErrors($validator)->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Function to load settings page
     * @return settings view
     */
    public function loadSettings(){

        $settings = Settings::where('status', 1)->select('id', 'label', 'name', 'value', 'field_type')->orderBy('seq_no')->get();

        return view('admin.settings.settings')->with('settings', $settings);
    }

    /**
     * Function to update the settings
     * @param  
     * @return 
     */
    public function updateSettings(Request $request){

        foreach ($request->all() as $key => $value) {
            
            if($key !== '_token'){
                $settings = Settings::where('name', $key)->update(['value'=>$value]);
            }
        }

        return redirect('ssfs-admin/settings')->with('message', 'Settings updated successfully');
    }

    /**
     * Function to load dashboard
     * @return [type] [description]
     */
    public function loadDashboard(){

        try {
            
            $services_count = Services::where('status', 1)->count();
            $careers_count = Careers::where('status', 1)->count();
            $banners_count = Banner::where('status', 1)->count();
            $members_count = TeamMembers::where('status', 1)->count();

            $members = TeamMembers::select('id', 'first_name', 'last_name', 'designation', 'image')->limit(8)->get();
            
            return view('admin.theme.index')->with('services_count', $services_count)
                                            ->with('careers_count', $careers_count)
                                            ->with('banners_count', $banners_count)
                                            ->with('members_count', $members_count)
                                            ->with('members', $members);

        } catch (\Exception $e) {
            
            return view('admin.theme.index')->with('services_count', 0)
                                            ->with('careers_count', 0)
                                            ->with('banners_count', 0)
                                            ->with('members_count', 0)
                                            ->with('members', []);            
        }
    }

    /**
     * Function to load 404 not found page
     * @return [type] [description]
     */
    public function loadNotFoundPage(){
        return view('admin.theme.404-page');
    }

}
