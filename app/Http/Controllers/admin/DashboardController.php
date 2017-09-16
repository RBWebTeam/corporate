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
       $is_approve=DB::table('firecal_quote_master')->where('is_approve','=',0)->get();
       $count=$is_approve->count();
       
       View::share (['is_approve'=>$is_approve,'count'=>$count] );
       
     
      // View::share ( 'variable4', ['name'=>'Franky','address'=>'Mars'] );
    }  

     public function dashboard(){
     	

        //   print_r($query);exit;

     	 return view('admin.index');

     }

     public function registration(){


      

     	return view('admin.registration-form');
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

         
         public function approved(Request $req){
               
            DB::table('firecal_quote_master')
            ->where('quote_id', $req->approved_id)
            ->update(['is_approve' =>1]);


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

                 
         	  
         }

}
