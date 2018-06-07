<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeamMembers;
use Validator;
use DB;
use File;
use Exception;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        try {

            // fetching team members
            $team_members = TeamMembers::select('id', 'first_name', 'last_name', 'image','designation', 'designation', 'status','created_at')->get();
            
            return view('admin.team.list-team-member')->with('team_members',$team_members->toArray());

        } catch (\Exception $e) {
            print_r($e->getMessage());
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.add-team-member');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $name = '';
        
        $validator = Validator::make($request->all(), [
            'first_name' => 'required | max:50',
            'last_name' => 'required | max:50',
            'image' => 'required | image',
            'designation' => 'required'
        ]);

        // check if all the data are validated
        if(!$validator->fails()){

            try {
                
                // if user has uploaded the file
                if($request->hasFile('image')){

                    // if uploaded file is valid
                    if($request->file('image')->isValid()){

                        $image = $request->file('image');
                        $name = $request->first_name.'_'.time().'.'.$image->getClientOriginalExtension();
                        $destinationPath = public_path('/front/uploads/team');
                        
                        // if file successfully uploaded
                        if($image->move($destinationPath, $name)){
                             // change permission of uploaded file
                            chmod($destinationPath.'/'.$name, 0777);
                        }
                        else{
                            return redirect('ssfs-admin/team-members')->with('err_message', 'Failed to upload image. Please try again');
                        }
                    }
                    else{
                        return redirect('ssfs-admin/team-members')->with('err_message', 'Invalid image. Please upload a valid image');
                    }
                }


                // add member to database
                $member = TeamMembers::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'designation' => $request->designation,
                    'image' => $name
                ]);
                
                // if member added successfully
                if(!empty($member)){
                     return redirect('ssfs-admin/team-members')->with('message', 'Team member added successfully');
                }
                else{

                    $image_path = public_path('/front/uploads/team/'.$name);

                    // removing uploaded file if failed to create banner in database
                    if (File::exists($image_path)) {
                        File::delete($image_path);
                    }

                    return redirect('ssfs-admin/team-members')->with('err_message', 'Something went wrong. Please try again');
                }

            } catch (\Exception $e) {
                return redirect('ssfs-admin/team-members')->with('err_message', 'Something went wrong. Please try again');
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
            
            $member = TeamMembers::findOrFail($id);

            if(!empty($member)){
                return view('admin.team.edit-team-member')->with('member', $member);
            }
            else{
                return redirect('ssfs-admin/team-members')->with('err_message', 'Something went wrong. Please try again');
            }

        } catch (\Exception $e) {
            return redirect('ssfs-admin/team-members')->with('err_message', 'Something went wrong. Please try again');
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

        $validator = Validator::make($request->all(),[
            'first_name' => 'required | max:50',
            'last_name' => 'required | max:50',
            'image' => 'image',
            'designation' => 'required'
        ]);

        // if data validated successfully
        if(!$validator->fails()){

            try {
                
                $member = TeamMembers::findOrFail($id);

                $member->first_name = $request->first_name;
                $member->last_name = $request->last_name;
                $member->designation = $request->designation;

                // if user has uploaded the file
                if($request->hasFile('image')){

                    // if uploaded file is valid
                    if($request->file('image')->isValid()){

                        $image = $request->file('image');
                        $name = $request->first_name.'_'.time().'.'.$image->getClientOriginalExtension();
                        $destinationPath = public_path('/front/uploads/team');
                        
                        // if file successfully uploaded
                        if($image->move($destinationPath, $name)){
                             
                            // change permission of uploaded file
                            chmod($destinationPath.'/'.$name, 0777);
                            
                            // removing existig file
                            if (File::exists($destinationPath.'/'.$member->image)) {
                                File::delete($destinationPath.'/'.$member->image);
                            }                        

                            // update the name of image and save record
                            $member->image = $name;
                            $member_updated = $member->save();

                            
                            // if member info updated successfully
                            if($member_updated){
                                return redirect('ssfs-admin/team-members')->with('message', 'Team member updated successfully');
                            }
                            else{
                                return redirect('ssfs-admin/team-members')->with('err_message', 'Failed to update team member. Please try again');
                            }

                        }
                        else{
                            // if failed to upload image
                            return redirect('ssfs-admin/team-members')->with('err_message', 'Something went wrong. Please try again');
                        }
                    }
                    else{
                        // if uploaded image is invalid
                        return redirect('ssfs-admin/team-members')->with('err_message', 'Invalid image. Please upload a valid image');
                    }
                }
                else{

                    $member_updated = $member->save();

                    // if member info updated successfully
                    if($member_updated){
                        return redirect('ssfs-admin/team-members')->with('message', 'Team member updated successfully');
                    }
                    else{
                        return redirect('ssfs-admin/team-members')->with('err_message', 'Failed to update team member. Please try again');
                    }

                }

            } catch (\Exception $e) {
                return redirect('ssfs-admin/team-members')->with('err_message', 'Something went wrong. Please try again');   
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
            
            $deleted = TeamMembers::where('id', $id)->delete();

            if($deleted){
                return redirect('ssfs-admin/team-members')->with('message', 'Team member deleted successfully');
            }
            else{
                return redirect('ssfs-admin/team-members')->with('err_message', 'Failed to delete team member. Please try again');
            }

        } catch (\Exception $e) {
            return redirect('ssfs-admin/team-members')->with('err_message', 'Something went wrong. Please try again');
        }
    }
}
