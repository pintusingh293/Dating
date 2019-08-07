<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_details;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Country;
use App\Language;
use Symfony\Component\HttpFoundation\Session\Session;
use App\User;
use App\Friend;

class UserDetailsController extends Controller
{
    public function registration(Request $request){



        $userProfileCount = User_details::where(['user_id'=>Auth::user()['id'],'status'=>0])->count();
        if($userProfileCount>0){
            return redirect('/review');
        }
        $userProfileCount1 = User_details::where(['user_id'=>Auth::user()['id'],'status'=>1])->count();
        if($userProfileCount1>0){
            return redirect('/my-profile');
        }


        if($request->isMethod('post')){
            $data = $request->all();

            if(empty($data['user_id'])){
                $details = new User_details();
                $details->user_id = Auth::User()['id'];
            }else{
                $userDetail = User_details::where('user_id',$data['user_id'])->first();
                $userDetail->status = 0;
            }

            //$details->username = Session::get('frontSession');
            $details->firstname = $data['firstname'];
            $details->lastname = $data['lastname'];
            $details->dob = $data['dob'];
            $details->gender = $data['gender'];
            $details->seeking = $data['seeking'];
            $details->height = $data['height'];
            $details->marital_status = $data['marital_status'];
            $details->body_type = $data['body_type'];
            $details->city = $data['city'];
            $details->state = $data['state'];
            $details->country = $data['country'];
            $details->language = $data['languages'];
            $details->phone = $data['phone'];
            if($request->hasfile('image')){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $filename = time(). '.' . $name;
                $file->move('uploads/users/',$filename);
                $details->image = $filename;
           }
           else{
               //return $request;
               $details->image = '';
           }

            //$details->image = $data['image'];
            $details->partnerDependability = $data['partnerDependability'];
            $details->occupation = $data['occupation'];
            $details->friendshipBetweenPartners = $data['friendshipBetweenPartners'];
            $details->income = $data['income'];
            $details->sexual_compatibility = $data['sexual_compatibility'];
            $details->exercise = $data['exercise'];
            $details->longest_relationship = $data['longest_relationship'];
            $details->education_level = $data['education_level'];
            $details->medication = $data['medication'];

            $details->save();

            return redirect('/review')->with('flash_message_success','Successfully registered and is in review');

        }
        $countries = Country::get();
        $languages = Language::orderBy('name','ASC')->get();

        return view('Public.users.registration',compact('countries','languages'));
    }

    public function checkEmail(Request $request){
        $data = $request->all();
        $usersCount = User_details::where('email',$data['email'])->count();
        if($usersCount>0){
            echo 'false';
        }else{
            echo 'true';
        }
    }


    public function destroy($id){
        $userCount = User::where('id',$id)->count();
        if($userCount > 0){
        User::with('details')->find($id)->delete();
        }else{
            abort(404);
        }
        return redirect()->back()->with('flash_message_success', 'Your users details has been successfully deleted');
    }



    public function addfriend($id){
        $userCount = User_details::where('id',$id)->count();
        if($userCount > 0){
            $user_id = Auth::user()->id;
            $friend_id = User_details::getUserId($id);
            $friend = new Friend();
            $friend->user_id = $user_id;
            $friend->friend_id = $friend_id;
            $friend->save();
            //echo "friend request sended";
            return redirect()->back()->with('flash_message_success', 'Friend request send');
        }else{
            abort(404);
        }
    }

    public function removefriend($id){
        $userCount = User_details::where('id',$id)->count();
        if($userCount > 0){
            $user_id = Auth::user()->id;
            $friend_id = User_details::getUserId($id);
            Friend::where(['user_id' =>$user_id,'friend_id'=>$friend_id])->delete();
            return redirect()->back()->with('flash_message_success', 'You are no longer friend');
        }else{
            abort(404);
        }
    }


    public function pendingRequest(){

        $userProfileCount = User_details::where(['user_id'=>Auth::user()['id'],'status'=>0])->count();
        if($userProfileCount>0){
            return redirect('/review');
        }

        $user_id = Auth::user()->id;
        $myfriends = Friend::where(['friend_id'=> $user_id,'accept'=>0])->get();

        $details = User_details::where('user_id','=',Auth::User()['id'])->get();
        return view('Public.users.pending-requests')->with(compact('details','myfriends'));

    }


    public function accept($sender_id){
        $reciever_id = Auth::user()->id;
        Friend::where(['user_id'=>$sender_id , 'friend_id'=> $reciever_id])->update(['accept'=>1]);
        return redirect()->back()->with('flash_message_success','Friend Request Successfully accepted');
    }

    public function reject($sender_id){

        $reciever_id = Auth::user()->id;
        Friend::where(['user_id'=>$sender_id , 'friend_id'=> $reciever_id])->delete();
        return redirect()->back()->with('flash_message_success','Successfully rejected');
    }

    public function myfriends(){

        $userProfileCount = User_details::where(['user_id'=>Auth::user()['id'],'status'=>0])->count();
        if($userProfileCount>0){
            return redirect('/review');
        }
        $user_id = Auth::user()->id;
        $myfriends = Friend::where(['friend_id'=> $user_id])->get();

        $details = User_details::where('user_id','=',Auth::User()['id'])->get();
        return view('Public.users.myfriends')->with(compact('details','myfriends'));
    }

    public function chat(){

    }
    public function gifts(){

    }



}
