<?php

namespace App\Http\Controllers;

use App\CMS;
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
            return redirect('not-found');
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

                return redirect('cms')->with('update_status', 'CMS content updated successfully');

            } catch (Exception $e) {
                
                return back()->with('update_failed', 'Something went wrong. Please try again in a while')->withInput();

            }

        }
        else{

            return back()->withErrors($validator)
                        ->withInput();

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
}
