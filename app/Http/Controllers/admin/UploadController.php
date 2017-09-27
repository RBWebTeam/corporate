<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class UploadController extends Controller{
	public function UploadPage(){
		//		print_r(Session::all());
		return view('admin/upload');
	}
	public function UploadPost(Request $request){
		
		$counter=0;
		$date=date("d-m-Y");
		$upload_path=Session::get('empcode')."/".$date;
		$data=$request->file('policy');
		foreach ($data as $key => $value) {
			print_r($value);
			print_r($key);
			echo "------------------";
			// $path=$request->file("'file[".$counter."]'")->store($upload_path);
			// return json_encode($path);
			exit();
		}
		
	// [userid] => 5 [firstname] => manish [email] => manish.dixit@rupeeboss.com [mobile] => 9821982346 [user_type_id] => 4 [branch_id] => 3 [empcode] => 101186 [vertical_id] => 2
		
	

        return json_encode($path);
	}
}