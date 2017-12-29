<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class ReportController extends Controller
{	
	public function show_intimation(Request $req){
		$id=$req->id;

        $emp_code=Session::get('empcode');
        $data=DB::select("call usp_get_lead_".$id."daystat('".$emp_code."')");
      	
      	return view('intimation-data')->with('data',$data);
	}

}