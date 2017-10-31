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

            $emp_code=101181;//Session::get('emp_code');
          $data['15']=DB::select("call usp_get_lead_15daystat('".$emp_code."')");
          $data['30']=DB::select("call usp_get_lead_30daystat('".$emp_code."')");
          $data['45']=DB::select("call usp_get_lead_45daystat('".$emp_code."')");



       return ['is_approve'=>$is_approve,'count'=>$count,'intimation'=>$data];

      }
}
