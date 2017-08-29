<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
class AutoCompleteController extends Controller
{
    public function autoComplete_pb_corporatecompany(){
        
       $term = Input::get('term');
        $products=DB::table('company_master')->select('company_name','company_id')
        ->where('company_name', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        //print_r( $products);
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->company_name,'datavalue'=>$product->company_id);
        }
        if(count($data)){
           //    print_r($data);
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
    }

    public function autoComplete_occupied_as(Request $request){


                   if($request->occupied=="occupied"){
                      $arry=array();
                      $occupied=DB::table('occupancy_master')->select('occupancy_name','occup_id')->where('section_id','=',$request->section_id)->get();

                      foreach ($occupied as $occ) {
                       $arry[]=array('occupied'=>$occ->occupancy_name,'occupied_id'=>$occ->occup_id);

                      }
                    
                      return $arry;


                   }else{

                  
        
        $term = Input::get('term');
       //  
        $products=DB::table('occupancy_master')->select('occupancy_name','occup_id','section_id')
        ->where('occupancy_name', 'LIKE', '%'.$term.'%')->where('section_id','=',$request->sectionid)
        ->take(5)->get();
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->occupancy_name,'datavalue'=>$product->occup_id,'section_id'=>$product->section_id);
        }

        if(count($data)){
             return $data;
         }
        else
            return ['value'=>'No Result Found'];


    }


    }

    public function autoComplete_state(){
        
       $term = Input::get('term');
        $products=DB::table('state_master')->select('state','state_id')
        ->where('state', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        //print_r( $products);
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->state,'datavalue'=>$product->state_id);
        }
        if(count($data)){
           //    print_r($data);
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
    }

    public function autoComplete_district(){


    	$term = Input::get('term');
        $district = Input::get('district');
        

        $products=DB::table('districtwise_zone_master')->select('district_name','district_id')
        ->where('state_id',$term)
        ->where('district_name', 'LIKE', '%'.$district.'%')
        ->get();
        //print_r( $products);
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->district_name,'datavalue'=>$product->district_id);
        }
        if(count($data)){
           //    print_r($data);
             return $data;
         }
        else
            return ['value'=>'No Result Found'];
    }






public function insurercompany(Request $request){
         $term = $request->term;
         $products=DB::table('company_master')->select('company_name')
        ->where('company_name', 'LIKE', '%'.$term.'%')
        ->take(5)->get();
        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->company_name);
        }
        if(count($data)){
             return $data;
         }
        else
            return ['value'=>'No Result Found'];

}







    }

        
    


