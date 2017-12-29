<?php

namespace App\Http\Controllers\Firecalculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use PDF;
use Session;
class ProfileController extends Controller
{
     public function my_profile(Request $request){
                
                $query=DB::table('user_master')->where('userid','=',Session::get('userid'))->first();

       	    return view('firecalculator.my-profile',['query'=>$query]);
       } 
}
