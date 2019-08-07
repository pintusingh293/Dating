<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
       return view('/admin/view_posts' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){
           $posts= new Post();
           $posts->title = $request->input('title');
           $posts->short_description = $request->input('short_description');
           $posts->long_description = $request->input('long_description');

           if($request->hasfile('featuredimage')){
                $file = $request->file('featuredimage');
                $name = $file->getClientOriginalName();
                $filename = time(). '.' . $name;
                $file->move('uploads/posts/',$filename);
                $posts->featuredimage = $filename;
           }
           else{
               //return $request;
               $posts->featuredimage = '';
           }
           //$posts->featuredimage = $request->input('featuredimage');
           $posts->save();
           return redirect('/admin/add_posts')->with('flash_message_success','New Post is added' );
       }
        return view('admin.add_posts')->with('flash_message_success','New Post is not added' );
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postCount = Post::where('id',$id)->count();
        if($postCount > 0){
        Post::find($id)->delete();
        }else{
            abort(404);
        }
        return redirect('/admin/view_posts');
    }
}
