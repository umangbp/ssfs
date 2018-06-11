<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MetaInfo;
use Exception;
use Validator;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $meta = MetaInfo::where('status',1)->select('id', 'page_name', 'meta_keywords', 'meta_description', 'meta_title', 'created_at')->get()->toArray();

            
            return view('admin.meta.list-meta')->with('meta', $meta);   
        
        } catch (\Exception $e) {
            return view('admin.meta.list-meta')->with('meta', [])->with('err_message', 'Something went wrong. Please try again');
        } 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.meta.add-meta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page_name' => 'required | max:20',
            'meta_title' => 'required | max:100',
            'meta_description' => 'required | max:500',
            'meta_keywords' => 'required'
        ]);

        // if all the validation passed
        if(!$validator->fails()){

            try {
                
                $meta = MetaInfo::create([
                    'page_name' => $request->page_name,
                    'meta_title' => $request->meta_title,
                    'meta_description' => $request->meta_description,
                    'meta_keywords' => $request->meta_keywords
                ]);

                if(!empty($meta)){
                    return redirect('meta.list')->with('message', 'Meta information added successfully');
                }
                else{
                    return redirect('meta.list')->with('err_message', 'Something went wrong. Please try again');
                }

            } catch (\Exception $e) {
                return redirect('meta.list')->with('err_message', 'Something went wrong. Please try again');
            }

        }
        else{
            return back()->withInput()->with($validator);
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
        //
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
        //
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
