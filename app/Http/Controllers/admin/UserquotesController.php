<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
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

             
        return view('admin.user-quotes',['queryuser'=>$queryuser]);
              
               

     }

     public function quotes_details(Request $req){

              
               $query_master=DB::select('call usp_show_fircal_quote("'.$req->id.'")');
               $query=$query_master[0];

              $loan_detail = DB::table('firecal_quote_detail')
            ->select('firecal_quote_detail.*')
            ->where('firecal_quote_detail.quote_id',$req->id)
            ->get();

 $comapny_id=0;

             
        // try{
               
        //         
                  
        //           if($comapny_id!=0){
        //   return  PDF::loadView('downloadpdf-first-com',['query_master'=>$query,'loan_detail'=>$loan_detail,'comapny_id'=>$comapny_id])->pageSize('A3')->download();
        // }else{
        //    return  PDF::loadView('downloadpdf',['query_master'=>$query,'loan_detail'=>$loan_detail])->pageSize('A3')->download();
        // }

        // }catch (\Exception $e) { return $e->getMessage(); }
                   
     return view('downloadpdf',['query_master'=>$query,'loan_detail'=>$loan_detail,'comapny_id'=>$comapny_id]);

 

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



}