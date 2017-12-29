<?php

namespace App\Http\Controllers\Firecalculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
class VisitingcartController extends Controller
{
     public function visiting_cart(Request $req){
          	   
          	  $user_id=Session::get('user_type_id'); 




          	   try{
              $query=DB::select('call usp_get_visiting_card('.(int)$user_id.')');
              return view('firecalculator.visiting-cart',['query'=>$query]);
               }catch (\Exception $e) { return $e->getMessage();}
     }


     public function visiting_cart_edit(Request $req){
                  try{
                 $query=DB::select('call usp_get_visiting_card_edit("'.$req->id.'")');
                 return view('firecalculator.visiting-cart-edit',['query'=>$query[0]]);
                  }catch (\Exception $e) { return $e->getMessage();}

     }

     public function visiting_cart_update(Request $req){

            try{
                   $arr=array(
                                $req->visiting_id,
                                $req->description,
                                $req->name,
                                $req->company_name,
                                $req->email_ids ,
                                $req->mobile_nos ,
                                $req->designation ,
                                $req->address ,
                               
              	          );
     	        $query=DB::select("call usp_get_visiting_card_update(?,?,?,?,?,?,?,?)",$arr);
                return redirect ('dashboard/visiting-cart'); 
                }catch (\Exception $e) { return $e->getMessage();}
     }
}
