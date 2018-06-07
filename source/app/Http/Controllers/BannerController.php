<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use Exception;
use Validator;
use File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            
            $banners = Banner::select('id', 'banner_text', 'banner_sub_text', 'banner_image', 'status', 'sequence_no')->orderBy('sequence_no')->get();

            // if banners are not empty
            if(!empty($banners)){

                // creating image path
                foreach ($banners as $key => $banner) {
                    $banners[$key]->banner_image = url('/front/images/home-slider/'.$banner->banner_image);
                }


                return view('admin.banner.list-banner')->with('banners', $banners);
            }
            else{
                return view('admin.banner.list-banner')->with('banners', []);
            }

        } catch (Exception $e) {
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
        return view('admin.banner.add-banner');
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
            'sequence_no' => 'required | numeric',
            'banner_image' => 'required | image'
        ]);


        // if all the validation rules are satisfied
        if(!$validator->fails()){

            try {
                    
                // checking if user has uploaded corrent photo
                if($request->file('banner_image')->isValid()){

                    $image = $request->file('banner_image');
                    $name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/front/images/home-slider');
                    
                    // if file successfully uploaded
                    if($image->move($destinationPath, $name)){
                        
                        // change permission of uploaded file
                        chmod($destinationPath.'/'.$name, 0777);
                        
                        // insert the banner details 
                        $banner = Banner::create([
                            'banner_text' => $request->banner_text,
                            'banner_sub_text' => $request->banner_sub_text,
                            'sequence_no' => $request->sequence_no,
                            'banner_image' => $name,
                            'status' => '1'
                        ]);

                        // if banner inserted successfully in database
                        if(!empty($banner)){
                            return redirect('ssfs-admin/banners')->with('message', 'Banner Uploaded Successfully');
                        }
                        else{

                            $image_path = public_path('/front/images/home-slider/'.$name);

                            // removing uploaded file if failed to create banner in database
                            if (File::exists($image_path)) {
                                File::delete($image_path);
                            }

                            return redirect('ssfs-admin/banners')->with('err_message', 'Failed to upload new banner. Please try again');
                        }

                    }
                    else{
                        return redirect('ssfs-admin/banners')->with('err_message', 'Failed to upload new banner. Please try again');
                    }

                }
                else{
                    return back()->withErrors('invalid_file', 'File you have uploaded is invalid. Please upload valid image file');
                }

            } catch (\Exception $e) {
                print_r($e->getMessage());
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


            
            $banner = Banner::findOrFail($id);
            
            // creating full image path 
            $banner->banner_image = url('front/images/home-slider/'.$banner->banner_image);

            // returning view with banner data
            return view('admin.banner.edit-banner')->with('banner',$banner);

        } catch (\Exception $e) {
            return redirect('ssfs-admin/banners')->with('err_message', $e->getMessage());
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
            'sequence_no' => 'required | numeric',
            'banner_image' => 'image',
            'status' => 'required | boolean'
        ]);

        // if all the data validated successfully then upate them in database
        if(!$validator->fails()){

            try {
                
                $banner = Banner::findOrFail($id);

                $banner->banner_text = $request->banner_text;
                $banner->banner_sub_text = $request->banner_sub_text;
                $banner->sequence_no = $request->sequence_no;
                $banner->status = $request->status;

                // if user has uploaded the file
                if($request->hasFile('banner_image')){

                    // if uploaded file is valid
                    if($request->file('banner_image')->isValid()){

                        $image = $request->file('banner_image');
                        $name = time().'.'.$image->getClientOriginalExtension();
                        $destinationPath = public_path('/front/images/home-slider');
                        
                        // if file successfully uploaded
                        if($image->move($destinationPath, $name)){
                            
                            // change permission of uploaded file
                            chmod($destinationPath.'/'.$name, 0777);

                            // delete the existing file
                            $existing_image_path = public_path('/front/images/home-slider/'.$banner->banner_image);

                            if (File::exists($existing_image_path)) {
                                File::delete($existing_image_path);
                            }

                            // save the new file name in db
                            $banner->banner_image = $name;
                            
                            $isSaved = $banner->save();

                            // if updated successfully
                            if($isSaved){
                                return redirect('ssfs-admin/banners')->with('message', 'Banner updated successfully');
                            }
                            else{

                                // delete the existing file
                                $image_path = public_path('/front/images/home-slider/'.$name);

                                if (File::exists($existing_image_path)) {
                                    File::delete($existing_image_path);
                                }

                                return back()->withErrors('update_error', 'Failed to update banner');
                            }
                        }
                        else{

                            // if failed to upload new image

                            return back()->withErrors('update_error', 'Failed to update banner');
                        }
                    }
                    else{
                        return back()->withErrors('invalid_file','File you have uploaded is invalid.')->withInput();
                    }
                }
                else{
                    
                    // if file is not uploaded and data saved successfully

                    $isSaved = $banner->save();

                    if($isSaved){
                                return redirect('ssfs-admin/banners')->with('message', 'Banner updated successfully');
                            }
                            else{

                                return back()->withErrors('update_error', 'Failed to update banner');
                            }

                }

            } catch (\Exception $e) {
                return redirect('ssfs-admin/banners')->with('err_message', $e->getMessage());
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
