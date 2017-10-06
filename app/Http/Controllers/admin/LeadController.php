<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use DB;
use Session;
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
		
		try{
				$uid=Session::get('userid');
				$path = $req->file('file')->store('public/lead_documents');
				$url=Storage::url($path);
				$query=DB::select('call usp_insert_policy_lead_data(?,?,?,?,?,?,?,?,?,?,?)',array($req['catg'],$req['type'],$req['group'],$req['name'],$req['business'],$req['insurer'],$req['renew_date'],$req['sum_insured'],$req['premium'],$url,$uid));
				$msg=" Lead Uploaded Successfully .....";
			}catch(\Exception $ee){
				$status="something went Wrong";
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
		return view('admin/show-leads',["lead"=>$leads]);
	}

}