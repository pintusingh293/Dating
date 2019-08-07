<?php

namespace App\Http\Controllers;

use App\AboutSeriousDating;
use Illuminate\Http\Request;

class AboutSeriousDatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = AboutSeriousDating::all();
       return view('/admin/view-about-serious-dating' , compact('abouts'));
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
            if($request-> isMethod('post')){
                //$data = $request->input();

                $abouts= new AboutSeriousDating();
                $abouts->title = $request->input('title');
                $abouts->description = $request->input('description');

                if($request->hasfile('image')){
                    $file = $request->file('image');
                    $name = $file->getClientOriginalName();
                    $filename = time(). '.' . $name;
                    $file->move('uploads/abouts/',$filename);
                    $abouts->image = $filename;
               }
               else{
                   //return $request;
                   $abouts->image = '';
               }
                //$abouts->image = $data['image'];
                $abouts->save();
                return redirect('/admin/add-about-serious-dating')->with('flash_message_success','About Serious dating  is added' );
               }
               return view('admin.add-about-serious-dating');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\AboutSeriousDating  $aboutSeriousDating
     * @return \Illuminate\Http\Response
     */
    public function show(AboutSeriousDating $aboutSeriousDating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutSeriousDating  $aboutSeriousDating
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutSeriousDating $aboutSeriousDating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutSeriousDating  $aboutSeriousDating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutSeriousDating $aboutSeriousDating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutSeriousDating  $aboutSeriousDating
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $aboutcount = AboutSeriousDating::where('id' , $id)->count();
        if( $aboutcount > 0){
        AboutSeriousDating::find($id)->delete();
        }
        else{
            abort(404);
        }
        return redirect('/admin/view-about-serious-dating')->with('flash_message_success','Successfully Deleted');
    }
}
