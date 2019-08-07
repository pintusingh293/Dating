<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Contact_us;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
             if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'admin' => '1'])) {
                //echo "Success"; die;
                /*Session::put('adminSession',$data['email']);*/
                return redirect('/admin/dashboard');
            }else{
                //echo "failed"; die;
                return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
            }
        }
        return view('admin.admin_login');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function settings(){
        return view('admin.settings');
    }

    public function chkPassword(Request $request){
        $data = $request->all();
        $current_password = $data['current_pwd'];
        $check_password = User::where(['admin'=>'1'])->first();
        if(Hash::check($current_password,$check_password->password)){
            echo "true"; die;
        }else {
            echo "false"; die;
        }
    }

    public function updatePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $check_password = User::where(['email' => Auth::user()->email])->first();
            $current_password = $data['current_pwd'];
            if(Hash::check($current_password,$check_password->password)){
                $password = bcrypt($data['new_pwd']);
                User::where(['id'=>Auth::user()['id'],'admin'=>1])->update(['password'=>$password]);
                return redirect('/admin/settings')->with('flash_message_success','Password updated Successfully!');
            }else {
                return redirect('/admin/settings')->with('flash_message_error','Incorrect Current Password!');
            }
        }
    }


    public function edit($id){
        $userCount = User::where('id',$id)->count();
        if($userCount>0 ){
             $users = User::find($id);
        }else{
            abort(404);
        }
        return view('admin.edit_users',compact('users'));
    }


    public function view_user(){
       $users = User::with('details')->where('admin','!=','1')->get();
       //$users=User::all();
        $users = json_decode(json_encode($users),true);
        /*echo "<pre>"; print_r($users); die;*/
        return view('admin.view_users')->with(compact('users'));
    }


    public function contactuser(){
        $contacts = Contact_us::all();
        return view('/admin/contactuser', compact('contacts'));
    }


    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Logged out Successfully');
    }
}
