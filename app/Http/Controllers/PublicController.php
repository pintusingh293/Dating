<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\User_details;
use App\Event;
use App\Post;

class PublicController extends Controller
{
    public function index(){
        return view('public.index');
    }

    public function registration(){
        return view('Public.users.registration');
    }

    public function search_user(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            /*echo "<pre>"; print_r($data); die;*/
            $searched_users = User_details::
                //join('user_details','user_details.user_id','=','users.id')
                where('user_details.gender',$data['gender']);
            if(!empty($data['country'])){
                $searched_users = $searched_users->where('user_details.country',$data['country']);
            }
            $searched_users = $searched_users->orderBy('user_details.id','Desc')->get();
            $searched_users = json_decode(json_encode($searched_users));
            /*echo "<pre>"; print_r($searched_users); die;*/
            $minAge = $data['minAge'];
            $maxAge = $data['maxAge'];
            return view('public.users.search-user')->with(compact('searched_users','minAge','maxAge'));
        }
    }

    public function about(){
        return view('/public.users.about-us');
    }

    public function policy(){
        return view('/public.users.policy');

    }

    public function tnc(){
        return view('/public.users.terms-and-conditions');
    }



    public function events(){
        return view('public.users.view-events');
    }

    public function single_events($id){
        $eventcount = Event::where('id' , $id)->count();
        if($eventcount > 0){
        $events=Event::find($id);
        }else{
            return abort(404);
        }
        return view('public.users.single-event', compact('events'));

    }

    public function posts(){
        return view('public.users.view-posts');
    }

    public function single_posts($id){
        $postcount = Post::where('id' , $id)->count();
        if($postcount > 0){
        $posts=Post::find($id);
        }else{
            abort(404);
        }
        return view('public.users.single-post', compact('posts'));
    }

    }
