<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $events = Event::all();
       return view('/admin/view_events' , compact('events'));
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
               $events= new Event();
               $events->title = $request->input('title');
               $events->short_description = $request->input('short_description');
               $events->long_description = $request->input('long_description');
               if($request->hasfile('featuredimage')){
                $file = $request->file('featuredimage');
                $name = $file->getClientOriginalName();
                $filename = time(). '.' . $name;
                $file->move('uploads/events/',$filename);
                $events->featuredimage = $filename;
           }
           else{
               //return $request;
               $events->featuredimage = '';
           }
               //$events->featuredimage = $data['featuredimage'];
               $events->save();
               return redirect('/admin/add_events')->with('flash_message_success','New Event is added' );
           }
           return view('admin.add_events')->with('flash_message_success','New event is not added' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventCount = Event::where('id',$id)->count();
        if($eventCount > 0){
        Event::find($id)->delete();
        }else{
            abort(404);
        }
        return redirect('/admin/view_events')->with('flash_message_success','Successfully Deleted');
    }
}
