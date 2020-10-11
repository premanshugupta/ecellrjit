<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;
class ContactusController extends Controller
{

    public function addcontact(Request $request){

        if($request->isMethod('post')){
    		$data = $request->all();
    		$contact = new Contactus;
    		$contact->name = $data['contact_name'];
    		$contact->email = $data['contact_email'];
    		$contact->subject = $data['contact_subject'];
    		$contact->message = $data['contact_message'];

    		$contact->save();
    		return redirect('/rapid/index')->with('flash_message_success','Your feedback has been submitted');
    	}
    	// return view('rapid.index');
    }


    public function viewcontactus(){
    	$contact = Contactus::get();
    	return view('admin.contactus.view')->with(compact('contact'));
    }

public function delete($id)
    {
        $contact=Contactus::find($id);
        $deleted=$contact->delete();
        if($deleted){
            return redirect('/admin/contactus/view')->with('flash_message_success','Successfully Deleted');
        }
    }
}