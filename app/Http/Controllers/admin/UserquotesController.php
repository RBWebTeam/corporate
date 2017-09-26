<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use Redirect;
use Session;
use URL;
use Mail;
use PDF;
use Storage;
use GrahamCampbell\Flysystem\Facades\Flysystem;

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;
class UserquotesController extends Controller
{
     public function user_quotes(Request $req){
                    
                 $usertypeid=Session::get('user_type_id');
                 $emp_code=Session::get('empcode');
                 $verticalid=Session::get('vertical_id');
                 $branchid=Session::get('branch_id');
                  
 
                    if($req->id==0){
                        $all='All';
                    }elseif($req->id==1){
                        $all='Approved';
                    }elseif($req->id==2){
                        $all='Pending';
                    }elseif($req->id==3){
                        $all='All';
                    }

                  $queryuser=DB::select('call usp_get_quote_detail ("'.$emp_code.'","'.$usertypeid.'","'.$verticalid.'","'.$branchid.'","'.$all.'")');

           
                  

     	 // $queryuser = DB::table('user_master')
       //      ->leftjoin('firecal_quote_master', 'firecal_quote_master.userid', '=', 'user_master.userid')
       //      ->select('user_master.*','firecal_quote_master.*')
       //      ->where('firecal_quote_master.userid',Session::get('userid'))
       //     // ->where('user_master.is_approve','!=','NULL')
       //      ->orderBy('firecal_quote_master.userid', 'DESC')
       //      ->get();

        $comments=DB::select('Select * from quote_comment_thread');
       // print "<pr>";
        //print_r(json_encode($comments));
        //exit();
        return view('admin.user-quotes',['queryuser'=>$queryuser,'comments'=>($comments)]);
              
               

     }

     public function quotes_details(Request $req){

              
               $query_master=DB::select('call usp_show_fircal_quote("'.$req->id.'")');
               $query=$query_master[0];

              $loan_detail = DB::table('firecal_quote_detail')
            ->select('firecal_quote_detail.*')
            ->where('firecal_quote_detail.quote_id',$req->id)
            ->get();
              $comapny_id=0;


             foreach ($loan_detail as $key => $value) {
                      
                         if($value->is_selected!=0){
                            $comapny_id=$value->is_selected;

                            break;
                         }
             }

        
           if($comapny_id!=0){
             
              return view('downloadpdf-first-com',['query_master'=>$query,'loan_detail'=>$loan_detail,'comapny_id'=>$comapny_id]);

           }else{
             return view('downloadpdf',['query_master'=>$query,'loan_detail'=>$loan_detail,'comapny_id'=>$comapny_id]);

           }

             
        // try{
               
        //         
                  
        //           if($comapny_id!=0){
        //   return  PDF::loadView('downloadpdf-first-com',['query_master'=>$query,'loan_detail'=>$loan_detail,'comapny_id'=>$comapny_id])->pageSize('A3')->download();
        // }else{
        //    return  PDF::loadView('downloadpdf',['query_master'=>$query,'loan_detail'=>$loan_detail])->pageSize('A3')->download();
        // }

        // }catch (\Exception $e) { return $e->getMessage(); }
                   
     

 

     }


     public function approved(Request $req){


      $time_ago = strtotime('2017-09-18 23:60:60');  
      $current_time = time();  
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
       $days          = round($seconds / 86400);   

         if($days>=1) {  
      
          // echo "24 hours";
             }


              $queryuser = DB::table('user_master')
            ->leftjoin('firecal_quote_master', 'firecal_quote_master.userid', '=', 'user_master.userid')
            ->select('user_master.*','firecal_quote_master.*')
           // ->where('user_master.is_approve','!=','NULL')
            ->orderBy('firecal_quote_master.userid', 'DESC')
            ->get();


           return view('admin.approvel-quotes',['queryuser'=>$queryuser]);

     }


     public function quotes_edite(Request $req){
              $getdetail = DB::table('firecal_quote_master')
            ->select('firecal_quote_master.*')
            ->where('firecal_quote_master.quote_id',$req->id)
            ->first();
          
            $state_id=$this->getstate($getdetail->state_id);
            $data['st_name']=$state_id->state;
            $district_id=$this->getcity($getdetail->district_id); 
            $data['dis_name']=$district_id->district_name;

            $risktate_id=$this->getstate($getdetail->risk_state_id);
            $data['rst_name']=$risktate_id->state;
            $riskdistrict_id=$this->getcity($getdetail->risk_district_id); 
 
            $data['rdt_name']=$riskdistrict_id->district_name;  
              
            $occupancy_name=$this->geoccu($getdetail->occ_id);
            $data['occupancy_name']= $occupancy_name->occupancy_name;
            
           // $data['quote_id']= $getdetail->quote_id;


        
 
      
       

           return view('firecalculator.quotes-edite',['getdetail'=>$getdetail,'data'=>$data]);
              


     }

     public function approve_specific_quote(Request $req){
      //print_r(Session::all());exit();
        try{
          $id=$req['approved_id'];
          $user_type=Session::get('user_type_id');
          $user=Session::get('empcode');
          $date=date('Y-m-d H:i:s');
          $is_approve=1;
          $query_output=DB::select('Call usp_approve_quote(?,?,?,?)',array($id,$is_approve,$user,$user_type));
          }catch(\Exception $ee){
              return 0;
          }
        return 1;
     }



 public function getstate($risk_state_id){
        return  DB::table('state_master')->select('state','state_id')
         ->where('state_id','=',$risk_state_id)
         ->first();
 }


 public function getcity($district_id){
        return DB::table('districtwise_zone_master')->select('district_name','district_id')
         ->where('district_id','=',$district_id)
         ->first();
 }


public function geoccu($occup_id){
        return DB::table('occupancy_master')->select('occupancy_name','occup_id')
        ->where('occup_id', '=',$occup_id)->first();
 }



 public function mail_to_customer(Request $req){
   $adapter = new Local(public_path('pdf'));
   $filename=date('Y-m-d-h-i-s'); 
 


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
             PDF::loadView('downloadpdf-first-com',['query_master'=>$query,'loan_detail'=>$loan_detail,'comapny_id'=>$comapny_id])->save($filename.".pdf",$adapter);
        }else{
            PDF::loadView('downloadpdf',['query_master'=>$query,'loan_detail'=>$loan_detail])->save($filename.".pdf",$adapter);
        } 

       
            
 
 
        
     
                  $attac=url('pdf'."/".$filename.".pdf");
                  $to_email=$req->to_email?$req->to_email:NULL;
                  $cc_email=$req->cc_email?$req->cc_email:NULL;
                  $bcc_email=$req->bcc_email?$req->bcc_email:NULL;
                  $data=$req->mail_ms?$req->mail_ms:NULL;
                  $subject_email=$req->subject_email?$req->subject_email:NULL;
              
              
                // $mail = Mail::send('admin.approvedmail',['data' => $data], function($message) use($email) {
                // $message->from('scriptdp@gmail.com', 'RupeeBoss');
                // $message->to($to_email)
                // ->subject($subject_email);
                // $message->cc($cc_email );
                // $message->bcc($bcc_email);
                // $message->attach($pdf);
                // });

 
            
               
                $email = $req->to_email;
                $mail = Mail::send('admin.approvedmail',['data' => $data], function($message) use($email) {
                $message->from('scriptdp@gmail.com', 'RupeeBoss');
                $message->to($email)
              // ->bcc(array('rajbhardp@gmail.com','TESsdT@example.com','TESjxfjT@example.com','TESfssdT@example.com'))
               ->subject('Welcome!');
                $message->attach($attac);

                });
                


                    if(Mail::failures()){
                            $error=3;
                            echo $error;
                    }else{

                    
                            $error=2;
                            echo $error;
                    }
                 
                   


                 

      

         



   //  try{
   //     $quote_id=$req->quote_id;
   //       $userid=Session::get('userid');
   // $query_output=DB::select('Call usp_update_mail_status(?,?)',array($quote_id,$userid));
   //               Session::flash('msg', "Mail Sent Successfully .....");
   //        return redirect('dashboard');
   //  }catch (\Exception $e) { return $e->getMessage(); }


}

 public function pdf_f(){
     return  PDF::loadHTML('<strong>Hello World</strong>')->lowquality()->pageSize('A2')->download();
 }



}