<?php

namespace App\Http\Controllers\Firecalculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class FirecalculatorController extends Controller
{
         public function home(Request $req){
                
        	 return view('firecalculator.fire-cal');
        }


        public function firecal_sectionlist(){

        	    $array=array();
                $Query=DB::select('call usp_get_firecal_sectionlist()');
                foreach ($Query as $key => $value){
                	 $array[]=array('section_id' =>$value->section_id,'section_name'=>$value->section_name);
                }

                return  $array;

        }


        public function section(Request $req){
                 
                
                   $query=DB::table('section_master')->select('section_name','section_id')
                      ->where('section_id','=',$req->id)->first(); 

        	    return view('firecalculator.section-wise-fire',['query'=>$query]);
        }


        public function customerdetails(Request $req){



        	return view('firecalculator.customer-details',['section_id'=>$req->section_id]);
        }
}
