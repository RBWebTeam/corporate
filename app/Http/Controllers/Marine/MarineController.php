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

         
         return view('marine.marine_product');
            

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
}
