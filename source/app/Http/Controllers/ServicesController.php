<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Services;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        try {
            
            // fetch all services
            $services = Services::select('id','title','short_desc', 'description', 'position','updated_at')->orderBy('position')->get();

            return view('admin.services.services-list')->with('services', $services);

        } catch (Exception $e) {
            return redirect('ssfs-admin/not-found');
        }

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
        try {
            
            $service = Services::findOrFail($id);

            // if service found
            if(!empty($service)){
                return view('admin.services.services-edit')->with('service', $service);
            }
            else{
                return redirect('ssfs-admin/not-found');
            }

        } catch (Exception $e) {
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
        try {
            
            // validating the inputs            
            $validator = Validator::make($request->all(),[
                'title' => 'required | max:100',
                'short_desc' => 'required | max: 200',
                'description' => 'required'
            ]);

            // if validation rules are satisfied
            if(!$validator->fails()){

                $update = Services::where('id', $id)->update([
                    'title' => $request->title,
                    'short_desc' => $request->short_desc,
                    'description' => $request->description,
                ]);

                return redirect('ssfs-admin/services')->with('update_succ', 'Service updated successfully');
            }
            else{
                return back()->withInput()->withErrors($validator);
            }

        } catch (Exception $e) {
            return redirect('ssfs-admin/not-found');
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
