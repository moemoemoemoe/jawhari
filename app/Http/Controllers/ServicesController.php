<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Validator;
use Redirect;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_services()
    {
        $services = Service::orderBy('id','DESC')->get();
        return view('services.manage_services',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_services_save(Request $r)
    {
       
         $foreign_name = mt_rand(11111,99999);
        $title = $r->input('title');
      $content = $r->input('content');
     $photo = $r->file('photo');

        $data = ['title' => $title,'content'=> $content, 'photo' => $photo];

      $rules = ['title' => 'required' ,'content' => 'required','photo'=> 'required'];

      $v = Validator::make($data, $rules);

      if($v->fails()){
        return Redirect::Back()->withErrors($v);
      }else
      {

            $destination = 'uploads/services';
            $photo_name = $foreign_name;
            $photo_name .= '.'.$photo->getClientOriginalExtension();
            $photo->move($destination, $photo_name);

     $work = new Service();
     $work->title = $title;
     $work->content = $content;
     
      $work->image_url_original = $photo_name;   
    $work->save();
        return Redirect::back()->with('success', 'New Service successfuly created');

      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete_service($id)
    {
        $work = Service::findOrFail($id);
 $work->delete();
     
        return Redirect::back()->with('success' , 'Service was Deleted successfuly!!');
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
