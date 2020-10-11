<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Impupdate;
class ImpupdateController extends Controller
{
    public function up(){
    	return view('/admin/impupd/add_imp');
    }

    public function add(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->all();
    		$up = new Impupdate;
    		$up->heading = $data['heading'];
    		$up->link = $data['link'];

    		$up->save();
    		return redirect('/admin/impupd/add-imp')->with('flash_message_success','Your updates has been submitted');
    	}
    }



    public function viewimp(){
    	 $up = Impupdate::get();
       return view('admin.impupd.view_imp')->with(compact('up'));
    }
    
    public function deleteimp($id)
    {
        $up=Impupdate::find($id);
        $deleted=$up->delete();
        if($deleted){
            return redirect('/admin/impupd/view-imp')->with('flash_message_success','Successfully Deleted');
        }
    }

}

