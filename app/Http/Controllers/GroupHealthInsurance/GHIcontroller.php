<?php

namespace App\Http\Controllers\GroupHealthInsurance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use Redirect;
use Session;
use URL;
use Mail;
use PDF;
use Illuminate\Support\Facades\Input;

class GHIcontroller extends Controller
{
 public function policy_type(Request $req){

   if($req->id==1){
     $t_type="Group Health Insurance(GHI) Floater";

   }if($req->id==2){
     $t_type="Group Health Insurance(GHI) Floater";
   }


   return  view('groupHealthInsurance.transaction-type',['t_type'=>$t_type,'floater_id'=>$req->id]);
 }


 public function ghi_quote(Request $req){

  try {
    $business_type=$req->business_type;
    $frshcash=$req->frshcash;
    $newcustomer=$req->newcustomer;
    $period_from=$req->period_from?$req->period_from:0;
    $period_to=$req->period_to?$req->period_to:0;
    $current_insurer_id=$req->current_insurer_id?$req->current_insurer_id:0;
    $floater_id= $req->floater_id;

    $company_query=DB::table('company_master')->get();


    return view ('groupHealthInsurance.ghi-quote-view',['business_type'=>$business_type,'newcustomer'=>$newcustomer,'period_from'=>$period_from,'period_to'=>$period_to,'current_insurer_id'=>$current_insurer_id,'floater_id'=>$floater_id,'company_query'=>$company_query]);


  }catch (\Exception $e) {

   return $e->getMessage();
 }

}


public function sum_insured_graded(Request $req){

  $arr=array();
  $query=DB::table('company_age_band_mapping')->where('company_id','=',$req->company_id)->first();
  $query_slab=DB::table('company_slab_mapping')->where('company_id','=',$req->company_id)->first();

  return  $arr[]=array('age_bands'=> explode(",",$query->age_bands),'query_slab'=>explode(",",$query_slab->company_slabs));

         //  return explode(",",$query->age_bands);



}

public $temp=0;
public $temp_array=array();
public function insurde_ublk_upload(Request $req){
 $query=\Excel::load(Input::file('file'), function ($reader )   {
  foreach ($reader->toArray() as $ke=>$row) {
    foreach ($row as $key => $value) {
      $this->temp_array[]=$value;
      $this->tamp=array_keys($value);
    }
  }
});

  
  return $array[]=array('key' =>$this->tamp,'temp_array'=>$this->temp_array);

}




}
