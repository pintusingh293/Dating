<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Redirect;
use App\User_details;
use Illuminate\Support\Facades\Session;
use Cache;
use Illuminate\Support\Facades\Hash;
use App\Friend;

//use App\Http\Controllers\Flash;
//use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function register(Request $request){
        //$request->validate(['email' => 'required|unique:users|email',]);
        if($request->isMethod('post')){
    		$data = $request->all();
            $user = new User;
    		$user->name = $data['name'];
    		$user->email = $data['email'];
    		$user->password = bcrypt($data['password']);
    		$user->save();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'0'])){
                Session::put('frontSession',$data['email']);
                return redirect('/registration')->with('flash_message_success','Successfully register for 2nd step');
            }
    	}
    	return view('Public.users.register')->with('flash_message_error','Somthing is missing please fill all details correctly');

    }

    public function checkEmail(Request $request){
        $data = $request->all();
        $usersCount = User::where('email',$data['email'])->count();
        if($usersCount>0){
            echo 'false';
        }else{
            echo 'true';
        }
    }

    public function loginpage(){
        return view('Public.users.login');
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'0'])){
                Session::put('frontSession',$data['email']);

                return redirect('/')->with('flash_message_success','Successfully loggedin');

            }else{

                return Redirect::back()->with('flash_message_error','Invalid Username or Password');
            }
        }
    }


    public function review(){
        $userProfileCount1 = User_details::where(['user_id'=>Auth::user()['id'],'status'=>1])->count();
        if($userProfileCount1>0){
            return redirect('/my-profile');
        }
            return view('public.users.review');
    }

    public function logout(){
        Auth::logout();
        //Session::forget('frontSession');
        //Session::forget('current_url');
        return redirect()->action('PublicController@index')->with('flash_message_success','Successfully logout');
    }


    public function delete($id){
        $usercount = User::where('id',$id)->count();
        if($usercount >0){
        User::find($id)->delete();
        }else{
            abort(404);
        }
        return redirect('/admin/view_users')->with('flash_message_success','Successfully Deleted');
    }


    public function edit($id){
        $usercount = User::where('id',$id)->count();
        if($usercount >0){
            $users = User::find($id);
            $users->name = request('name');
            $users->email = request('email');
            $users->password = bcrypt(request('password'));
            $users->save();
        }else{
            abort(404);
        }
        return redirect('/admin/view_users')->with('flash_message_success','Successfully updated');
    }




    public function updateUserStatus(Request $request){

        $data = $request->all();
        User_details::where('user_id',$data['user_id'])->update(['status'=>$data['status']]);
    }

    public function change_password(Request $request){
        $userProfileCount = User_details::where(['user_id'=>Auth::user()['id'],'status'=>0])->count();
        if($userProfileCount>0){
            return redirect('/review');
        }

        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $check_password = User::where(['email' => Auth::user()->email])->first();
            $current_password = $data['current_pwd'];
            if(Hash::check($current_password,$check_password->password)){
                $password = bcrypt($data['new_pwd']);
                User::where(['id'=>Auth::user()['id'],'admin'=>0])->update(['password'=>$password]);
                return redirect('/change-password')->with('flash_message_success','Password updated Successfully!');
            }else {
                return redirect('/change-password')->with('flash_message_error','Incorrect Current Password!');
            }
        }
        $details = User_details::where('user_id','=',Auth::User()['id'])->get();
        return view('Public.users.change-password' , compact('details'));
    }


    public function forget_password(){
        $userProfileCount = User_details::where(['user_id'=>Auth::user()['id'],'status'=>0])->count();
        if($userProfileCount>0){
            return redirect('/review');
        }
        $details = User_details::where('user_id','=',Auth::User()['id'])->get();
        return view('Public.users.forgot-password', compact('details'));
    }

    public function edit_account(){
        $userProfileCount = User_details::where(['user_id'=>Auth::user()['id'],'status'=>0])->count();
        if($userProfileCount>0){
            return redirect('/review');
        }

        $details = User_details::where('user_id','=',Auth::User()['id'])->get();
        return view('Public.users.edit-account', compact('details'));
    }

    public function view_profile($id){
        $profileCount = User_details::where('id',$id)->count();
        if($profileCount >0){
            $profiles = User_details::find($id);
            if(Auth::check()){
                $user_id = Auth::user()->id;
                $friend_id = User_details::getUserId($id);
                $friendCount = Friend::where(['user_id'=>$user_id,'friend_id'=>$friend_id])->count();
                if($friendCount>0)
                {
                    $friendDetails = Friend::where(['user_id'=>$user_id,'friend_id'=>$friend_id])->first();
                    if($friendDetails->accept == 1){
                        $friendrequest = "Unfriend";
                    }else{
                        $friendrequest = "Friend Request Send";
                    }
                }else{
                    $friendrequest = "AddFriend";
                }

                //$friendrequest = true;
            }else{
                $friendrequest = "";
            }
        }else{
            abort(404);
        }

        return view('/Public.users.view-profile', compact('profiles','friendrequest'));
    }

    public function updateuseraccount(Request $request, $id){

            $request->validate([
                'firstname' =>'required',
                'lastname' => 'required',
                'dob' => 'required',
                'gender'  => 'required',
                'seeking' => 'required',
                'height' => 'required',
                'marital_status' => 'required',
                'body_type' => 'required',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
                'languages' => 'required',
                'phone' => 'required',
                'partnerDependability' => 'required',
                'occupation' => 'required',
                'friendshipBetweenPartners' => 'required',
                'income' => 'required',
                'sexual_compatibility' => 'required',
                'exercise' => 'required',
                'longest_relationship' => 'required',
                'education_level' => 'required',
                'medication' => 'required'
            ]);

            $details = User_details::find($id);

            $details->update($request->all());
            return Redirect::to('/edit-account')->with('flash_message_success','Your profile details has been successfully Updated' );

    }

    public function membership_status(){
        $userProfileCount = User_details::where(['user_id'=>Auth::user()['id'],'status'=>0])->count();
        if($userProfileCount>0){
            return redirect('/review');
        }
        $details = User_details::where('user_id','=',Auth::User()['id'])->get();
        return view('Public.users.membership-status' , compact('details'));
    }


    public function myprofile(){
        $userProfileCount = User_details::where(['user_id'=>Auth::user()['id'],'status'=>0])->count();
        if($userProfileCount>0){
            return redirect('/review');
        }
        $details = User_details::where('user_id','=',Auth::User()['id'])->get();
        return view('public.users.my-profile' , compact('details'));
    }


}
