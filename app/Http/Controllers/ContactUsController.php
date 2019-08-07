<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact_us;

class ContactUsController extends Controller
{
    public function contact_us(Request $request){

        if( $request->isMethod('post')){
            $data = $request->all();
            // dd($data);
            $contact = new Contact_us;
            $contact->fullname = $data['fullname'];
            $contact->email = $data['email'];
            $contact->sub = $data['sub'];
            $contact->comments = $data['comments'];

            $contact->save();
            return redirect('/contact-us')->with('flash_message_success','Your message has been send to the admin. Admin will contact to u as soon as possible ');
        }

        return view('Public.users.contact-us');
    }


    public function delete($id ){
        $contactCount = Contact_us::where('id',$id)->count();
        if($contactCount > 0){
        Contact_us::find($id)->delete();
        }else{
            abort(404);
        }
        return redirect('/admin/contactuser');
    }
}
