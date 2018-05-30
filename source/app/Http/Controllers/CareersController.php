<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Careers;
use Exception;
use Validator;
use Banner;
use File;

class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            
            $careers = Careers::select('id', 'job_title', 'job_description', 'job_location','status', 'created_at')->get();

            // if banners are not empty
            if(!empty($careers)){
                return view('admin.careers.list-career')->with('careers', $careers);
            }
            else{

                echo "something went wrong";
            }

        } catch (\Exception $e) {
            print_r($e->getMessage());die;
            echo "exception occured";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.careers.add-career');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // validating the input 
        $validator = Validator::make($request->all(),[
            'job_title' => 'required | max:50',
            'job_description' => 'max:500',
            'job_location' => 'required | max:100'
        ]);


        // if all the validation rules are satisfied
        if(!$validator->fails()){

            try {

                // insert the banner details 
                $career = Careers::create([
                    'job_title' => $request->job_title,
                    'job_description' => $request->job_description,
                    'job_location' => $request->job_location,
                    'status' => '1'
                ]);

                // if banner inserted successfully in database
                if(!empty($career)){
                    return redirect('ssfs-admin/careers')->with('message', 'Job opening posted successfully');
                }
                else{
                    return back()->withInput()->with('error', 'Failed to post new job opening. Please try again');
                }
                    
            } catch (\Exception $e) {
                print_r($e->getMessage());die;
            }

        }
        else{
            return back()->withErrors($validator)->withInput();
        }
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
        try {

            $career = Careers::findOrFail($id);
            
            // returning view with banner data
            return view('admin.careers.edit-career')->with('career',$career);

        } catch (\Exception $e) {
            return redirect('ssfs-admin/careers')->with('err_message', 'Job opening not found. Please try again');
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
        
        // validating the data before storing it in database
        $validator = Validator::make($request->all(), [
            'job_title' => 'required | max:50',
            'job_description' => 'max:500',
            'job_location' => 'required | max:100',
            'status' => 'required | boolean'
        ]);

        // if all the data validated successfully then upate them in database
        if(!$validator->fails()){

            try {
                
                $career = Careers::findOrFail($id);

                $career->job_title = $request->job_title;
                $career->job_description = $request->job_description;
                $career->job_location = $request->job_location;
                $career->status = $request->status;


                // if file is not uploaded and data saved successfully
                $isSaved = $career->save();

                if($isSaved){
                    return redirect('ssfs-admin/careers')->with('message', 'Job opening updated successfully');
                }
                else{
                    return back()->withErrors('update_error', 'Failed to update job opening');
                }

            } catch (\Exception $e) {
                return redirect('ssfs-admin/careers')->with('err_message', 'Something went wrong while updating job opening. Please try again');
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
        try {
            
            $banner = Banner::findOrFail($id);
            
            $isDeleted = $banner->delete();

            // if banner deleted successfully
            if($isDeleted){
                return redirect('ssfs-admin/banners')->with('err_message', 'Banner deleted successfully');
            }
            else{
                return redirect('ssfs-admin/banners')->with('err_message', 'Failed to delete banner. Please try again');
            }

        } catch (\Exception $e) {
            return redirect('ssfs-admin/banners')->with('err_message', 'Failed to delete banner. Please try again');
        }
    }
}
