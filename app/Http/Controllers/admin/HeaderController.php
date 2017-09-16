<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use View;
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



       // $is_approve=DB::table('firecal_quote_master')->where('is_approve','=',0)->get();
       // $count=$is_approve->count();


       return ['is_approve'=>$is_approve,'count'=>$count];

      }
}
