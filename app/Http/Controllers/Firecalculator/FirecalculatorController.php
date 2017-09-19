<?php

namespace App\Http\Controllers\Firecalculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use PDF;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;
class FirecalculatorController extends Controller
{
         public function home(Request $req){

                
        	 return view('firecalculator.fire-cal');
        }


        public function firecal_sectionlist(){

        	      $array=array();
                $Query=DB::select('call usp_get_firecal_sectionlist()');
                foreach ($Query as $key => $value){
                	 $array[]=array('section_id' =>$value->section_id,'section_name'=>$value->section_name);
                }

                return  $array;

        }


        public function section(Request $req){


                  
                   $query=DB::table('section_master')->select('section_name','section_id')
                      ->where('section_id','=',$req->id)->first(); 

        	    return view('firecalculator.section-wise-fire',['query'=>$query,'pro_id'=>$req->pro_id]);
        }


        public function customerdetails(Request $req){
                     try {
                      $business_type=$req->business_type;
                      $frshcash=$req->frshcash;
                      $newcustomer=$req->newcustomer;
                      $period_from=$req->period_from?$req->period_from:0;
                      $period_to=$req->period_to?$req->period_to:0;
                      $current_insurer_id=$req->current_insurer_id?$req->current_insurer_id:0;
                      $pro_id=$req->pro_id; 
        
        	return view('firecalculator.customer-details',['section_id'=>$req->section_id,'business_type'=>$business_type,'frshcash'=>$frshcash,'newcustomer'=>$newcustomer,'period_from'=>$period_from,'period_to'=>$period_to,'current_insurer_id'=>$current_insurer_id,'pro_id'=>$pro_id]);
             }catch (\Exception $e) {
                   
                             return $e->getMessage();
                   }
      }


        public function quotes_add(Request $req){


               Session::forget('pdfarray');
               Session::forget('comapny_id');
               Session::forget('quote_id');


           try {


              $arr=Session::get('quote_dataValue');

              $quote_id=DB::select('call usp_insert_firecal_quote(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',$arr);

        

                         $quote_id=$quote_id[0]->quote_id;
                        

                         $is_selected= $req->comapny_id?$req->comapny_id:0;
                         $length=sizeof($req->c_name);
                         $pdfarray=array();
                         for ($i=0; $i < $length ; $i++) { 
                               if($req->c_id[$i]==$is_selected){  $selected=$is_selected; }else{  $selected=0;   }
                                  $pdfarray[]=array('quote_id'=>$quote_id,'c_id'=>$req->c_id[$i],'c_name'=>$req->c_name[$i],'p_amount'=>$req->p_amount[$i],'gst_amount'=>$req->gst_amount[$i],'net_p_amount'=>$req->net_p_amount[$i]);
                                $this->quotesQuery($quote_id,$req->c_id[$i],$req->c_name[$i],$req->p_amount[$i],$req->gst_amount[$i],$req->net_p_amount[$i],$selected);
                         }

                      
                      Session::put('pdfarray', $pdfarray);
                      Session::put('comapny_id', $is_selected);
                      Session::put('quote_id', $quote_id); 

                   }catch (\Exception $e) {
                             return $e->getMessage();
                   }
        }

   

   public function quotes_update(Request $req){

             $arr=Session::get('quote_dataValue');
             $is_selected= $req->comapny_id?$req->comapny_id:0;
             $length=sizeof($req->c_name);
             $pdfarray=array();

               $quote_id= $req->quote_id;

             
   }
  
 

        public function  quotesQuery($quote_id,$comapny_id,$company_name,$premium_amt,$gst_amt,$net_premium_amt,$is_selected){

                       DB::table('firecal_quote_detail')->insert([
                      ['quote_id' =>$quote_id,
                       'comapny_id' =>$comapny_id,
                       'company_name' =>$company_name,
                       'premium_amt' =>$premium_amt,
                       'gst_amt' =>$gst_amt,
                       'net_premium_amt' =>$net_premium_amt,
                       'is_selected' =>$is_selected,
                      ],
                      ]);

        }



         public function thank_You(Request $req){ 

 
                 
                  return view('thank-You');
         }

  
      public function downlaod_pdf(){
                  
            $quote_id=Session::get('quote_id');
            $query_master=DB::select('call usp_show_fircal_quote("'.$quote_id.'")');
            $query=$query_master[0];
// print_r($quote_id);exit;
 


              $loan_detail = DB::table('firecal_quote_detail')
            ->select('firecal_quote_detail.*')
            ->where('firecal_quote_detail.quote_id',$quote_id)
            ->get();

 

             
        try{
                $pdfarray=Session::get('pdfarray');
                $comapny_id=Session::get('comapny_id');
                  
                  if($comapny_id!=0){
          return  PDF::loadView('downloadpdf-first-com',['query_master'=>$query,'loan_detail'=>$loan_detail,'comapny_id'=>$comapny_id])->pageSize('A3')->download();
        }else{
           return  PDF::loadView('downloadpdf',['query_master'=>$query,'loan_detail'=>$loan_detail])->pageSize('A3')->download();
        }

        }catch (\Exception $e) { return $e->getMessage(); }
                   
   //return view('downloadpdf-first-com',['query_master'=>$query,'loan_detail'=>$loan_detail,'comapny_id'=>$comapny_id]);

 



   }

        
         

         
}
