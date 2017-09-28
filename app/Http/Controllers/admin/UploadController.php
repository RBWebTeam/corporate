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
		
	// [userid] => 5 [firstname] => manish [email] => manish.dixit@rupeeboss.com [mobile] => 9821982346 [user_type_id] => 4 [branch_id] => 3 [empcode] => 101186 [vertical_id] => 2
		$file=$request->file('policy');
		foreach ($file as $key => $value) {
			# code...
			$date=date("d-m-Y");
			$upload_path=Session::get('empcode')."/".$date;
			$path=$request->file($value->$counter)->store($upload_path);
			$counter++;
			// print_r($key);
			// print_r($value);
		}
		
	

        return json_encode($path);
	}
}