<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Impupdate;
class IndexController extends Controller
{
    public function index(){
              $up= Impupdate::all();
    		return view('rapid.index')->with(compact('up'));
    }
}
