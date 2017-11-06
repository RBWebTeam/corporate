<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Response;
use Validator;
use Redirect;
use Session;
use URL;
use Mail;

class LoginController extends Controller
{



 public function calculator_login(Request $request){


  $validator = Validator::make($request->all(), [
    'email' => 'required',
    'password' => 'required',
    ]);

  if ($validator->fails()) {
    return redirect('/')
    ->withErrors($validator)
    ->withInput();
  }else{
   $value=DB::table('user_master')->select('userid','email','password','firstname','mobile','user_type_id','branch_id')->where('email','=',$request->email)
   ->where('password','=', $request->password)
          //->where('is_admin','!=','0')
   ->first();
   if($value!=''){ 
    $request->session()->put('userid',$value->userid);
    $request->session()->put('userfirstname',$value->firstname);
    $request->session()->put('useremail',$value->email);
    $request->session()->put('usermobile',$value->mobile);
    $request->session()->put('mobile',$value->mobile);
    $request->session()->put('user_type_id',$value->user_type_id);
    $request->session()->put('branch_id',$value->branch_id);
    $request->session()->put('empcode',$value->empcode);
    
    return redirect()->intended('home');
  }else{
   Session::flash('msg', "Invalid email or password. Please Try again! ");
   return Redirect::back();
 }
}

                // if($request->email=="admin" &&  $request->password=="123"){

                //        $request->session()->put('admin', 'admin');
                //        $request->session()->put('userid',2);



                //         return redirect()->intended('home');
                // }else{

                //        return redirect('/');
                // }
}







public function register_form(){
  
  return view('register_form');
}

public function fire_calculator(){

 
  return view('firecalculator');
}

public function corporate(Request $req){
  Session::forget('quote_dataValue');
  Session::forget('risk_location');
  $riskaddress_add=0;
  $riskstatename=0;
  $riskcityname=0;
  $riskpinname=0;
  $min_zone_id=999999;

//try {

  if($req->is_floater!=0 && $req->riskstatename!=0){
    $riskaddress_add=implode(",",$req->riskaddress_add);
    $riskstatename=implode(",",$req->riskstatename);
    $riskcityname=implode(",",$req->riskcityname);
    $riskpinname=implode(",",$req->riskpinname);
    foreach ($req->riskcityname as $key => $value) {
     $qury=DB::table('districtwise_zone_master')->where('district_id','=',$value)->first();
     if($min_zone_id>$qury->zone_id){
      $min_zone_id=$qury->zone_id;
    }
    
  }
}




$section_id=$req['section_id'];
$transaction_type=$req['frshcash'];
$cust_action=$req['business_type'];
$customer_type=$req['newcustomer'];
$period_from=$req['period_from'];
$period_to=$req['period_to'];
$current_insurer_id=$req['current_insurer_id'];


$customer_name=$req['insure_name']?$req['insure_name']:0;
$address1=$req['address_one']?$req['address_one']:0;
$address2=$req['address_two']?$req['address_two']:0;
$district_id=$req['districtid']?$req['districtid']:0;
$state_id=$req['stateid']?$req['stateid']:0;
$pincode=$req['pincode']?$req['pincode']:0;
$country=$req['country_name']?$req['country_name']:0;

$risk_address1=$req['riskaddress_one']?$req['riskaddress_one']:0;
$risk_address2=$req['riskaddress_two']?$req['riskaddress_two']:0;
$risk_district_id=$req['risksdistrictid']?$req['risksdistrictid']:0;
$risk_state_id=$req['riskstateid']?$req['riskstateid']:0;
$risk_pincode=$req['riskpincode']?$req['riskpincode']:0;
$risk_country=$req['riskcountry_name']?$req['riskcountry_name']:0;

$occup_desc=$req['occup_desc']?$req['occup_desc']:0;

$occ_id=$req['occ_id']?$req['occ_id']:0;
$storage_type=$req['storage_type']?$req['storage_type']:0;

$sum_building=$req['sum_building']?$req['sum_building']:0;

$sum_plith=$req['sum_plith']?$req['sum_plith']:0;
$sum_plant=$req['sum_plant']?$req['sum_plant']:0;
$sum_electric=$req['sum_electric']?$req['sum_electric']:0;
$sum_fff=$req['sum_fff']?$req['sum_fff']:0;
$sum_others=$req['sum_others']?$req['sum_others']:0;
$sum_stock=$req['sum_stock']?$req['sum_stock']:0;




$is_stfi=$req['is_stfi']?$req['is_stfi']:0;
$sum_stfi=$req['sum_stfi']?$req['sum_stfi']:0;
$is_earthquake=$req['is_earthquake']?$req['is_earthquake']:0;
$sum_earthquake=$req['sum_earthquake']?$req['sum_earthquake']:0;
$is_terrorism=$req['is_terrorism']?$req['is_terrorism']:0;
$sum_terrorism=$req['sum_terrorism']?$req['sum_terrorism']:0;
$is_escalation  =$req['is_escalation']?$req['is_escalation']:0;
$escalation_percent= $req['escalper']?$req['escalper']:0;
$sum_escalation  =$req['sum_escalation']?$req['sum_escalation']:0;
$is_omission=  $req['is_omission']?$req['is_omission']:0;
$sum_omission=  $req['sum_omission']?$req['sum_omission']:0;
$is_lossrent=$req['is_lossrent']?$req['is_lossrent']:0;
$sum_lossrent=$req['sum_lossrent']?$req['sum_lossrent']:0;
$is_accommodation=$req['is_accommodation']?$req['is_accommodation']:0;
$sum_accommodation=$req['sum_accommodation']?$req['sum_accommodation']:0;
$is_architect=$req['is_architect']?$req['is_architect']:0;
$sum_architect=$req['sum_architect']?$req['sum_architect']:0;
$is_removedebris=$req['is_removedebris']?$req['is_removedebris']:0;
$sum_removedebris=$req['sum_removedebris']?$req['sum_removedebris']:0;
$is_spontcomb=$req['is_spontcomb']?$req['is_spontcomb']:0;
$sum_spontcomb=$req['sum_spontcomb']?$req['sum_spontcomb']:0;
$is_startup  =$req['is_startup']?$req['is_startup']:0;
$sum_startup  =$req['sum_startup']?$req['sum_startup']:0;
$is_floater=  $req['is_floater']?$req['is_floater']:0;
$sum_floater=  $req['sum_floater']?$req['sum_floater']:0;
$is_impactdamage=$req['is_impactdamage']?$req['is_impactdamage']:0;
$sum_impactdamage=$req['sum_impactdamage']?$req['sum_impactdamage']:0;

$userid=$req['userid']?$req['userid']:0;
$datetime_created=$req['datetime_created']?$req['datetime_created']:0;

$contact_person=$req['contact_person']?$req['contact_person']:0;
$designation=$req['designation']?$req['designation']:0;
$email=$req['email']?$req['email']:0;
$mobile=$req['mobile']?$req['mobile']:0;
$pro_id=$req['pro_id'];



$arr= array('section_id' =>$section_id,
 'transaction_type' =>$transaction_type,
 'cust_action' =>$cust_action,
 'customer_type' =>$customer_type,
 'period_from' =>$period_from,
 'period_to' =>$period_to,
 'current_insurer_id' =>$current_insurer_id,
 'customer_name' =>$customer_name,
 'address1' =>$address1,
 'address2' =>$address2,
 'district_id' =>$district_id,
 'state_id' =>$state_id,
 'pincode' =>$pincode,
 'country' =>$country,
 'risk_address1' =>$risk_address1,
 'risk_address2' =>$risk_address2,
 'risk_district_id' =>$risk_district_id,
 'risk_state_id' =>$risk_state_id,
 'risk_pincode' =>$risk_pincode,
 'risk_country' =>$risk_country,
                      //'description'=>$description,
 'occ_id' =>$occ_id,
 'storage_type' =>$storage_type,
 'sum_building' =>$sum_building,
 'sum_plith' =>$sum_plith,
 'sum_plant' =>$sum_plant,
 'sum_electric' =>$sum_electric,
 'sum_fff' =>$sum_fff,
 'sum_others' =>$sum_others,
 'sum_stock' =>$sum_stock,
 'is_stfi' =>$is_stfi,
 'sum_stfi' =>$sum_stfi,
 'is_earthquake' =>$is_earthquake,
 'sum_earthquake' =>$sum_earthquake,
 'is_terrorism' =>$is_terrorism,
 'sum_terrorism' =>$sum_terrorism,
 'is_escalation' =>$is_escalation,
 'escalation_percent' =>$escalation_percent,         
 'sum_escalation' =>$sum_escalation,
 'is_omission' =>$is_omission,
 'sum_omission' =>$sum_omission,
 'is_lossrent' =>$is_lossrent,
 'sum_lossrent' =>$sum_lossrent,
 'is_accommodation' =>$is_accommodation,
 'sum_accommodation' =>$sum_accommodation,
 'is_architect' =>$is_architect,
 'sum_architect' =>$sum_architect,
 'is_removedebris' =>$is_removedebris,
 'sum_removedebris' =>$sum_removedebris,
 'is_spontcomb' =>$is_spontcomb,
 'sum_spontcomb' =>$sum_spontcomb,
 'is_startup' =>$is_startup,
 'sum_startup' =>$sum_startup,
 'is_floater' =>$is_floater,
 'sum_floater' =>$sum_floater,
 'is_impactdamage' =>$is_impactdamage,
 'sum_impactdamage' =>$sum_impactdamage,
 'userid' =>Session::get('userid'),
 'occup_desc' =>$occup_desc,
//'is_approve' =>0,
 'contact_person' =>$contact_person,
 'designation' =>$designation,
 'email' =>$email,
 'mobile' =>$mobile,
 'product_id' =>$pro_id,
 );



$array = array_values($arr);
Session::put('quote_dataValue', $array);
Session::put('risk_location',array('riskaddress' =>$riskaddress_add ,'riskstates' =>$riskstatename ,'riskdistricts' =>$riskcityname ,'riskpincodes' =>$riskpinname ));






$quote_data=DB::select('call usp_get_firecal_quote ('.$occ_id.',"'.$section_id.'","'.$sum_building.'","'.$sum_plith.'","'.$sum_plant.'","'.$sum_electric.'","'.$sum_fff.'","'.$sum_others.'","'.$sum_stock.'","'.$is_stfi.'","'.$sum_stfi.'","'.$is_earthquake.'","'.$sum_earthquake.'","'.$is_terrorism.'","'.$sum_terrorism.'","'.$is_escalation.'","'.$sum_escalation.'","'.$is_omission.'","'.$sum_omission.'","'.$is_lossrent.'","'.$sum_lossrent.'","'.$is_accommodation.'","'.$sum_accommodation.'","'.$is_architect.'","'.$sum_architect.'","'.$is_removedebris.'","'.$sum_removedebris.'","'.$is_spontcomb.'","'.$sum_spontcomb.'","'.$is_startup.'","'.$sum_startup.'","'.$is_floater.'","'.$sum_floater.'","'.$is_impactdamage.'","'.$sum_impactdamage.'","'.$req['risksdistrictid'].'","'.$storage_type.'",'.$min_zone_id.')');

           //$this::CorporateSave($req);
return $quote_data;
//}catch (\Exception $e) {
 //return $e->getMessage();
   //return $true=0;
//}

}

public function CorporateSave($req){
 print_r($req->all());exit;


 
 

}






}

