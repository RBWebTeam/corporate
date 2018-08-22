<?php

namespace App\Http\Controllers\Firecalculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use PDF;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;

use Ddeboer\Tesseract\Tesseract;
use TesseractOCR;
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



 // $query=DB::table('section_master')->select('section_name','section_id')
 // ->where('section_id','=',$req->id)->first(); 

 $lead_query=DB::table('policy_lead_data')->select('lead_id','document_path','userid','group_id','client_name','renewal_date')->where('userid','=',Session::get('userid'))->get();

 return view('firecalculator.section-wise-fire',['lead_query'=>$lead_query]);
}

public $pattern = "/(?:[a-z0-9!#$%&'*+=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/";

public function customerdetails(Request $req){
  Session::forget('policy_copy');
  Session::forget('visiting');
  Session::forget('mandate');
  Session::forget('inspection_report');
  Session::forget('lead_id');
  //Session::forget('uniqid');
  //$uniqid_arr=array();
  
  // $uniqid=hexdec(uniqid());
  // Session::put('uniqid',$uniqid);
  $string=array();
  $str=0;

  
  $destinationPath = public_path(). '/upload/policy_documents/';
  $policy_copy_arr=array();
  $policy_copy = $req->file('policy_copy');
  $visiting_arr=array();
  $visiting = $req->file('visiting');
  $mandate_arr=0;
  $mandate = $req->file('mandate');
  $report_arr=0;
  $inspection_report = $req->file('inspection_report');
  $lead_id=$req->lead_id;



// $tsaInstance = new TesseractOCR($destinationPath."text.jpeg");
// $executablePath = '"C:/Program Files (x86)/Tesseract-OCR/tesseract.exe"';
// $tsaInstance->executable($executablePath);
// echo $tsaInstance->run();
//   exit;



  if($policy_copy!=null || $policy_copy!=0){
    foreach ($policy_copy as $file) {
     $fileName = rand(1, 999) . $file->getClientOriginalName();
     $file->move($destinationPath, $fileName);  
     $policy_copy_arr[]= $fileName ; 
   }}else{ $file=0;  } 
   

   if($visiting!=null || $visiting!=0){
    foreach ($visiting as $filefilevisiting) {
     $filevisiting = rand(1, 999) . $filefilevisiting->getClientOriginalName();
     $filefilevisiting->move($destinationPath, $filevisiting);  
     $visiting_arr[]=$filevisiting;


     $tsaInstance = new TesseractOCR($destinationPath.$filevisiting);
     $executablePath = '"C:/Program Files (x86)/Tesseract-OCR/tesseract.exe"';
     $tsaInstance->executable($executablePath)
     ->whitelist(range('A', 'Z'))
     ->lang('eng', 'jpn', 'por');
     $str=$tsaInstance->run();
     $string = explode("\n", $str);
     $get_num=$this->In_textfile_get_num($string);
     $get_gmail=$this->In_textfile_get_gmail($str);
     $this->visiting_card_detail(implode(',',$get_num),implode(',',$get_gmail),$str,$filevisiting);

     
  //$str=(new TesseractOCR($destinationPath.$filevisiting ))->run();

   }}else{ $filefilevisiting=0;  } 


 



   if($mandate!=null || $mandate!=0){
     $file_mandate = rand(1, 999) . $mandate->getClientOriginalName();
     $mandate->move($destinationPath, $file_mandate);  
     $mandate_arr=$file_mandate;





   }else{ $file_mandate=0;  } 

   if($inspection_report!=null || $inspection_report!=0){
     $report = rand(1, 999) . $inspection_report->getClientOriginalName();
     $inspection_report->move($destinationPath, $report);  
     $report_arr=$report;



   }else{ $report_arr=0;  } 



   Session::put('policy_copy',implode(',',$policy_copy_arr));
   Session::put('visiting',implode(',',$visiting_arr));
   Session::put('mandate', $file_mandate);
   Session::put('inspection_report',$report_arr);
   Session::put('lead_id',$lead_id);



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


public function In_textfile_get_num($string){

  $phonea = array();
  foreach ($string as $key => $value) {
    $number=preg_replace("/[^0-9]/", '', $value);
    if(9<strlen((int)$number) && 12>strlen((int)$number) ){
      $phonea[]=$number;
    }
  }


  return $phonea;

}


public function In_textfile_get_gmail($str){

 $emaila = array();
 preg_match_all($this->pattern, $str, $matches);
 foreach($matches[0] as $email){
  if($email!=null && $email!=0)
   $emaila[]=$email;


}

return $emaila;

}


public function  visiting_card_detail ($num,$email,$text,$filevisiting){

  DB::table('visiting_card_detail')->insert([
    ['description' =>$text,
    'name' =>0,
    'company_name' =>0,
    'email_ids' =>$email,
    'mobile_nos' =>$num,
    'designation' =>0,
    'address' =>0,
    'quote_id' =>0,
    'userid' =>Session::get('userid'),
    'run_time_id' =>$filevisiting,
    ]
    ]);


}

public function quotes_add(Request $req){
 Session::forget('pdfarray');
 Session::forget('comapny_id');
 Session::forget('quote_id');
 $true=0;

  

 
 try {
  $arr=Session::get('quote_dataValue');
  $quote_id=DB::select('call usp_insert_firecal_quote(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',$arr);
  

  $quote_id=$quote_id[0]->quote_id;

  

  $is_selected= $req->comapny_id?$req->comapny_id:0;

  $length=sizeof($req->c_name);
  $pdfarray=array();
  for ($i=0; $i < $length ; $i++) { 
   if($req->c_id[$i]==$is_selected){  $selected=$is_selected; }else{  $selected=0;   }
   $pdfarray[]=array('quote_id'=>$quote_id,'c_id'=>$req->c_id[$i],'c_name'=>$req->c_name[$i],'p_amount'=>$req->p_amount[$i],'gst_amount'=>$req->gst_amount[$i],'net_p_amount'=>$req->net_p_amount[$i]);
   $this->quotesQuery($quote_id,$req->c_id[$i],$req->c_name[$i],$req->p_amount[$i],$req->gst_amount[$i],$req->net_p_amount[$i],$selected);
 }

 $this->risk_location_address(Session::get('risk_location'),$quote_id);
 $this->visiting_card_quotes_update($quote_id);
 $this->policy_documents($quote_id);

 

 Session::put('pdfarray', $pdfarray);
 Session::put('comapny_id', $is_selected);
 Session::put('quote_id', $quote_id); 

 

}catch (\Exception $e) {
// return $e->getMessage();
 return response(['status' =>'error']); 
}

 if($is_selected!=0){
     return response(['status' =>$quote_id]); 
    }else{
      return response(['status' =>'success']); 
    }

}


public function policy_documents($quote_id){

 DB::select('call usp_insert_policy_docs(?,?,?,?,?,?)',array(Session::get('policy_copy'),Session::get('visiting'),Session::get('mandate'),Session::get('inspection_report'),Session::get('lead_id'),$quote_id));
 

}



public function visiting_card_quotes_update($quote_id){


  $qu_id=explode(',',Session::get('visiting'));
  foreach ($qu_id  as $key => $value) {
   DB::table('visiting_card_detail')
 ->where('run_time_id',$value)
 ->update(['quote_id' =>$quote_id]);
  }
  


}

public function quotes_update(Request $req){

 $arr=Session::get('quote_dataValue');
 unset($arr[57]);
 $is_selected= $req->comapny_id?$req->comapny_id:0;
 $length=sizeof($req->c_name);
 $pdfarray=array();
 $quote_id= $req->quote_id;
 
 $quote_id=array($quote_id);
 $result = array_merge($quote_id, $arr);
 
    //print_r($result);exit;
 
 
 $quote_id=DB::select('call usp_update_quote(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',$result);


 
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

public function risk_location_address($risk_location,$quote_id){

  DB::select('call usp_insert_floater_riskaddress(?,?,?,?,?)',array($risk_location['riskaddress'],$risk_location['riskstates'],$risk_location['riskdistricts'],$risk_location['riskpincodes'],$quote_id));

}


public function thank_You(Request $req){ 



                //  return view('thank-You');

 Session::flash('msg', "Your Quotes Successfully Added.....");
 return redirect('dashboard');

 
}


public function downlaod_pdf(Request $req){



            // $quote_id=Session::get('quote_id');
            // $query_master=DB::select('call usp_show_fircal_quote("'.$quote_id.'")');
            // $query=$query_master[0];


            //   $loan_detail = DB::table('firecal_quote_detail')
            // ->select('firecal_quote_detail.*')
            // ->where('firecal_quote_detail.quote_id',$quote_id)
            // ->get();




  try{
                // $pdfarray=Session::get('pdfarray');
                // $comapny_id=Session::get('comapny_id');

    $query_master=DB::select('call usp_show_fircal_quote("'.$req->quote_id.'")');
    $query=$query_master[0];

    $loan_detail = DB::table('firecal_quote_detail')
    ->select('firecal_quote_detail.*')
    ->where('firecal_quote_detail.quote_id',$req->quote_id)
    ->get();
    $comapny_id=0;


    foreach ($loan_detail as $key => $value) {

     if($value->is_selected!=0){
      $comapny_id=$value->is_selected;

      break;
    }
  }
  
  if($comapny_id!=0){
    return  PDF::loadView('downloadpdf-first-com',['query_master'=>$query,'loan_detail'=>$loan_detail,'comapny_id'=>$comapny_id]) ->download();
  }else{
   return  PDF::loadView('downloadpdf',['query_master'=>$query,'loan_detail'=>$loan_detail]) ->download();
 }

}catch (\Exception $e) { return $e->getMessage(); }

   //return view('downloadpdf-first-com',['query_master'=>$query,'loan_detail'=>$loan_detail,'comapny_id'=>$comapny_id]);





}



public function downlaod_rfq_pdf(Request $req){
 

  try{
                
 $query_master=DB::select('call usp_show_fircal_rfq("'.$req->rfq_id.'")');
   $query=$query_master[0];
   $loan_detail = DB::table('firecal_rfq_detail')
   ->select('firecal_rfq_detail.*')
   ->where('firecal_rfq_detail.rfq_id',$req->rfq_id)
   ->get();
 
 
 
  return  PDF::loadView('downloadpdf_rfq',['query_master'=>$query,'loan_detail'=>$loan_detail]) ->download();
 

       }catch (\Exception $e) { return $e->getMessage(); }

}




public function test(){

 
$note="<<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>
XML";

$xml=new SimpleXMLElement($note);
echo $xml->asXML();
 
}



}
