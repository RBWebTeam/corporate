<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use DB;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class LeadController extends Controller{
	public function generation_page(){

		$category=DB::table('policy_category_master')
		->select('category_id','policy_category')->get();


		$insurer=DB::table('company_master')
		->select('company_id','company_name')->get();

		return view("admin/lead-generation",["catg"=>$category,"insurer"=>$insurer]);
	}
	public function group_auto_complete(Request $req){


		$group = $req['term'];
		$products=DB::table('group_master')->select('group_name')
		->where('group_name', 'LIKE', '%'.$group.'%')
		->take(5)->get();
        //print_r( $products);
		$data=array();
		foreach ($products as $product) {
			$data[]=array('value'=>$product->group_name);
		}
		if(count($data)){
             // print_r($data);
			return $data;
		}
		else
			return ['value'=>''];
	}
	public function generate(Request $req){
		//print "<pre>";print_r($req->all());exit();
		try{
				$uid=Session::get('userid');
				$path = $req->file('file')->store('public/lead_documents');
				$url=Storage::url($path);
				$query=DB::select('call usp_insert_policy_lead_data(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',array($req['catg'],$req['type'],$req['group'],$req['name'],$req['business'],$req['insurer'],$req['renew_date'],$req['sum_insured'],$req['premium'],$url,$uid,$req['make'],$req['model'],$req['variant'],$req['mfg_year'],$req['registration'],$req['idv'],$req['ncb']));
				$msg=" Lead Uploaded Successfully .....";
			}catch(\Exception $ee){
				//print_r($ee->getMessage());
				$msg="something went Wrong";
			}

		Session::flash('msg', $msg);
		return LeadController::generation_page();


	}
	public function fetch_product_by_catg(Request $req){

		$product=DB::table('product_master')
		->select('product_id','product_name')
		->where('category_id','=',$req['catg'])
		->get();
		return ($product);
	}
	public function show_leads(){
		$emp_code=Session::get('empcode');
		$user_type=Session::get('user_type_id');
		$vertical=Session::get('vertical_id');
		$branch=Session::get('branch_id');
		//print_r($emp_code);exit();
		$leads=DB::select('call usp_show_lead_data (?,?,?,?)',[$emp_code,$user_type,$vertical,$branch]);
		// print "<pre>";
		// print_r($leads);exit();
		return view('admin/show-leads',["lead"=>$leads]);
	}

	public function bulk_upload(){
		return view('admin/bulk-lead-upload');
	}
	public function upload_excel(Request $req){

		$userid=Session::get('userid');
		$file=Input::file('excel');

		$data = \Excel::load($file)->toObject();
		$msg="Data Uploaded Successfully. \n ";
		 //print "<pre>";
		 //print_r($data);exit();
		if($data){
			$count=0;
			//try{
				foreach ($data as $k => $value) {
				//foreach ($val as $key => $value) {
	                		# code...
					//try{
						$id=DB::select('call usp_insert_bulk_upload(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$value->group_name,$value->name_of_insured,$value->occupancy_business,$value->policy_category,$value->policy_type,$value->renewal_date,$value->current_insurer,$value->sum_insured,$value->pre_tax_premium,$value->idv,$value->ncb ,$value->make , $value->model,$value->variant_sub_model ,$value->year_of_mfg, $value->registration_no,$userid,0]);
							$count++;
					// }catch(\Exception $ee){
					// 	print_r($ee->getMessage());exit();
					// 	if(isset($value->name_of_insured)){
								
					// 		$msg+="but lead of ".$value->name_of_insured."Not uploaded \n";
					// 	}
					// 	else{
					// 		$msg+="but your XL break down something hence partial data uploaded";
					// 		continue;
					// 	}
					// }
				}
				$update=DB::select('call usp_insert_bulk_lead_data()');
			//}
			// }catch(\Exception $ee){
   //          		//$print_r($ee);
			// 	$msg+="but your XL breaks down something";
			// }

			Session::flash('msg',$msg);
			return redirect('dashboard');
		}
	}
	public function show_xl_data(){
		$data=DB::table('bulk_upload')->get();
		return $data;
	}


	public function document_upload_leads(Request $req){

		try{
			$path = $req->file('file')->store('public/lead_documents');
			if($path){
				$url=Storage::url($path);
				$query=DB::table('policy_lead_data')->where('lead_id', '=',$req->lead_id)
				->update(['document_path' =>$url]);
				$msg="Document Uploaded Successfully...";
			}else{
				$msg="please fill form carefully !..";
			}

		}catch(\Exception $ee){
            		//$print_r($ee);
			$msg="please fill form carefully !..";
		}

		  Session::flash('msg',$msg);
		 return redirect('dashboard');

	}


}