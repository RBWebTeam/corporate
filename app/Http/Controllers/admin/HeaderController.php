<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use View;
use Session;
class HeaderController extends Controller
{
      public function notification(){

             
              $is_approve = DB::table('user_master')
            ->leftjoin('firecal_quote_master', 'firecal_quote_master.userid', '=', 'user_master.userid')
            ->select('user_master.*','firecal_quote_master.*')
            ->where('firecal_quote_master.is_approve', 0)
           // ->where('firecal_quote_master.is_approve','!=',0)
            ->orderBy('firecal_quote_master.quote_id', 'DESC')
            ->get();
            $count=$is_approve->count();



       return ['is_approve'=>$is_approve,'count'=>$count];

      }
      public function intimation_notification(){

          $emp_code=101181;//Session::get('emp_code');
          $status=0;
          $d=[];
          try {
              $data=DB::select('call usp_get_lead_tat_count('.$emp_code.') ');
             // print_r(sizeof($data->15));
              if(sizeof($data)>0){
                 $status=1;
              }
               
              
              $d=$data[0];
          } catch (\Exception $e) {
            
          }
          

          return ['intimation'=>$d,'status'=>$status];
      }
}
