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
		$data=DB::select("select product_id as id,product_name as name from product_master");
		return view('admin/upload')->with("product",$data);
	}
	public function UploadPost(Request $request){
		$counter=0;
		$paths=[];
		$quote_id=-1;
		
	// [userid] => 5 [firstname] => manish [email] => manish.dixit@rupeeboss.com [mobile] => 9821982346 [user_type_id] => 4 [branch_id] => 3 [empcode] => 101186 [vertical_id] => 2
		//$file=$request->file('policy');
		$userid=Session::get('userid');
		//print_r($request->all());exit();
		foreach ($request->policy as $photo) {
            $filename = $photo->store('policy_container');
            //print_r($filename);
            array_push($paths,$filename);
            try{
            $query=DB::select("call usp_insert_policy_upload_files(?,?,?,?,?,?,?,?)",array($userid,$filename,$quote_id,$request->client_name[$counter],$request->product[$counter],$request->policy_period[$counter],$request->net_premium[$counter],$request->policy_catg[$counter]));
            $counter++;
            }catch(\Exception $ee){
            	//print_r($ee->__toString());
            	continue;
            }
        }
		
	
        Session::flash('msg', $counter." Files Uploaded Successfully .....");
        return redirect('dashboard');
	}
	
	
}