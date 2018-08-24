<?php

namespace App\Http\Controllers\Marine;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use PDF;
use Session;
use Illuminate\Http\Response;
use Validator;
class MarineController extends Controller
{
      public function marine_product(Request $req){


           $voyage_master=DB::table('marine_voyage_master')->get();
           $commodity_master=DB::table('marine_commodity_master')->get();
           $country_master=DB::table('marine_country_master')->get();
           $currency_master=DB::table('marine_currency_master')->get();
           $incoterm_master=DB::table('marine_incoterm_master')->get();
           $packing_master=DB::table('marine_packing_master')->get();
           $conveyance_master=DB::table('marine_conveyance_master')->get();
             
         
         return view('marine.marine_product',['voyage_master'=>$voyage_master,'commodity_master'=>$commodity_master,'country_master'=>$country_master,'currency_master'=>$currency_master,'incoterm_master'=>$incoterm_master,'packing_master'=>$packing_master,'conveyance_master'=>$conveyance_master]);
            

      }


      public function marine_user_add(Request $req){
      	      $val =Validator::make($req->all(), [
                'fname' => 'required|min:5',
                'phone' => 'required|regex:/^[0-9]{10}+$/',
                'email' => 'required|email|unique:user_master',
                            ]);

           if ($val->fails()){
              return response()->json($val->messages(), 200);
           }else{


            echo "0";

           }



      }


      public function quick_quote(Request $req){

      	 print_r($req->all());
      }



      public function quick_quote_search(Request $req){
           
 
         
             $tagsubtitle = DB::table('user_master')->where('firstname', 'LIKE', '%'.$req->fname.'%')
              ->orWhere('lastname', 'LIKE', '%'.$req->lastname.'%')
              ->orWhere('email', 'LIKE', '%'.$req->email.'%')
              ->orWhere('mobile', 'LIKE', '%'.$req->phone.'%')->get();
              return  $tagsubtitle;
      }
}
