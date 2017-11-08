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
use Carbon\Carbon;
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
   try{
  $query=DB::table('company_age_band_mapping')->where('company_id','=',$req->company_id)->first();
  $query_slab=DB::table('company_slab_mapping')->where('company_id','=',$req->company_id)->first();

  return  $arr[]=array('age_bands'=> explode(",",$query->age_bands),'query_slab'=>explode(",",$query_slab->company_slabs));

         //  return explode(",",$query->age_bands);
 }catch(\Exception $ee){
                 $ee->getMessage();
              
              }


}

public $temp=0;
public $temp_array=array();
public function insurde_ublk_upload(Request $req){
   date_default_timezone_set('Asia/Kolkata');
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

public function ghi_xl_upload(Request $req){
      $userid=Session::get('userid');
      $file=$req['file'];//Input::file('excel');
      $counter_ghi=[];
      $data = \Excel::load($file)->toObject();
      $msg="Data Upload Intruptted. \n ";
      $last_self_id=0;
      $status=1;
            if($data){
              
              try{
                foreach ($data as $key => $value) {
                  foreach ($value as $k => $val) {
                    if($val->relation=='SELF' || $val->relation=='self'){
                      if(isset($get_id))
                        $last_self_id=0;
                    }
                    $dob=date_format($val->date_of_birth_ddmmyyyy,"Y-m-d");
                    $doj=date_format($val->date_of_joining_ddmmyyyy,"Y-m-d");
                    $dob_at=date_format((Carbon::now()),"Y-m-d");
                    $age=($dob_at-$dob);
                   $relation=($val->relation=="Spouse" || $val->relation=="spouse" || $val->relation=="Husband" || $val->relation=="Wife" || $val->relation=="husband" || $val->relation=="wife" || $val->relation=="son" || $val->relation=="Son" || $val->relation=="Daughter" || $val->relation=="daughter")?"Non-parental":"Parental";
                    //$age=Carbon::createFromDate($dob)->diff(Carbon::now())->format('%y years, %m months and %d days');
                    $str=$val->grade."_".$val->sum_insured."_".$relation."_".$age; 
                    if(! isset($counter_ghi[$str])){
                        $counter_ghi[$str]=1;
                    }else{
                      $counter_ghi[$str]++;
                    }

                    
                    
                     
                     $get_id=DB::table('ghi_xl_data')->insertGetId(['employee_id'=>$val->employee_id, 'grade'=>$val->grade, 'name_of_insured'=>$val->name_of_insured, 'date_of_birth'=> $dob, 'gender'=>$val->gender, 'relation'=>$val->relation, 'date_of_joining'=>$doj, 'sum_insured'=>$val->sum_insured, 'related_to'=>$last_self_id,'created_by'=>$userid]);
                      if($val->relation=='SELF' || $val->relation=='self'){
                          $last_self_id=$get_id;
                      }
                    
                    }
                }
                 
              }catch(\Exception $ee){
                $status=0 ;
               
              }
<<<<<<< HEAD
            $result="{'status'=>".$status.",'data'=>".json_encode($counter_ghi)."}";
            return $result;
=======
                $result="{'status'=>".$status.",'data'=>".json_encode($counter_ghi)."}";
                
              return $result;
>>>>>>> 055114ddb880fc0a4394a75a34450300de8515f5
    }
}


}
