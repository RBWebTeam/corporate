<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use PDF;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;
use View;
class DashboardController extends Controller
{

 

    public function __construct() {
       // $is_approve=DB::table('firecal_quote_master')->where('is_approve','=',0)->get();
       // $count=$is_approve->count();
       
       // View::share (['is_approve'=>$is_approve,'count'=>$count] );
       
                  // $query=DB::select('call usp_get_quote_detail (101100,1,2,3,"All")');

                  // print_r($query);exit;


      // View::share ( 'variable4', ['name'=>'Franky','address'=>'Mars'] );
    }  

     public function dashboard(){
     	
      $emp=Session::get('empcode');
      $ver=Session::get('vertical_id');
      $type=Session::get('user_type_id');
      $branch=Session::get('branch_id');
      $count=DB::select('Call usp_get_quote_count(?,?,?,?)',array($emp,$ver,$type,$branch));
          
     	 return view('admin.index',['count'=>$count[0]]);

     }

     public function registration(){

         $user_type_master= DB::table('user_type_master')->get();
         $vertical_master= DB::table('vertical_master')->get();
         $branch_master= DB::table('branch_master')->get();
        

     	return view('admin.registration-form',['user_type_master'=>$user_type_master,'vertical_master'=>$vertical_master,'branch_master'=>$branch_master]);
     }

        public function user_show(){



             $queryuser = DB::table('user_master')
            ->leftjoin('firecal_quote_master', 'firecal_quote_master.userid', '=', 'user_master.userid')
            ->select('user_master.*','firecal_quote_master.*')
            ->where('firecal_quote_master.is_approve', 0)
           // ->where('user_master.is_approve','!=','NULL')
            ->orderBy('firecal_quote_master.userid', 'DESC')
            ->get();

             
             return view('admin.user-show',['queryuser'=>$queryuser]);
        }

         
         // public function approved(Request $req){
               
         //    DB::table('firecal_quote_master')
         //    ->where('quote_id', $req->approved_id)
         //    ->update(['is_approve' =>1]);


              // $data ="Please use   as password to login for ur email ";
              //   $email ="rajbhardp@gmail.com";
              //   $mail = Mail::send('admin.approvedmail',['data' => $data], function($message) use($email) {
              //   $message->from('scriptdp@gmail.com', 'RupeeBoss');
              //   $message->to($email)
              //   ->cc(['kishorall.sagar@gmail.com',])
              //   ->subject('Your New Password');
              //   });
              //       print_r($mail);
              //       if(Mail::failures()){
              //               $error=3;
              //              // echo $error;
              //       }else{

              //       // $query=DB::table('user_registration')
              //       //           ->where('email', $req->email)
              //       //           ->update(['password' => md5($password)]);
              //               $error=2;
              //             //  echo $error;
              //       }

                 
         	  
       //  }

}
