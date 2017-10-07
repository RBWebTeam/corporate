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

                        
             
               return view ('groupHealthInsurance.ghi-quote-view',['business_type'=>$business_type,'newcustomer'=>$newcustomer,'period_from'=>$period_from,'period_to'=>$period_to,'current_insurer_id'=>$current_insurer_id,'floater_id'=>$floater_id]);


               }catch (\Exception $e) {
                   
                             return $e->getMessage();
                   }

        }

}
