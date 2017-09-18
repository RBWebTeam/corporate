<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
class UserquotesController extends Controller
{
     public function user_quotes(Request $req){


     	 $queryuser = DB::table('user_master')
            ->leftjoin('firecal_quote_master', 'firecal_quote_master.userid', '=', 'user_master.userid')
            ->select('user_master.*','firecal_quote_master.*')
            ->where('firecal_quote_master.userid',Session::get('userid'))
           // ->where('user_master.is_approve','!=','NULL')
            ->orderBy('firecal_quote_master.userid', 'DESC')
            ->get();

             
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


              $queryuser = DB::table('user_master')
            ->leftjoin('firecal_quote_master', 'firecal_quote_master.userid', '=', 'user_master.userid')
            ->select('user_master.*','firecal_quote_master.*')
           // ->where('user_master.is_approve','!=','NULL')
            ->orderBy('firecal_quote_master.userid', 'DESC')
            ->get();

           return view('admin.approvel-quotes',['queryuser'=>$queryuser]);
     }
}