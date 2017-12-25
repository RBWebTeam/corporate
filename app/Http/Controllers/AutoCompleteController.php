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
  $occupied=DB::table('occupancy_master')->select('occupancy_name','occup_id','section_id')->get();

  foreach ($occupied as $occ) {
   $arry[]=array('occupied'=>$occ->occupancy_name,'occupied_id'=>$occ->occup_id,'section_id'=>$occ->section_id);

 }

 return $arry;


}else{



  $term = Input::get('term');
       //  
  $products=DB::table('occupancy_master')->select('occupancy_name','occup_id','section_id')
  ->where('occupancy_name', 'LIKE', '%'.$term.'%')
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
 ->get();
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
 $term = Input::get('fstate_id');
 $products=DB::table('districtwise_zone_master')->select('district_name','district_id')
 ->where('state_id',$term)
 ->get();
 
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
 $products=DB::table('company_master')->select('company_name','company_id')
 ->where('company_name', 'LIKE', '%'.$term.'%')
 ->take(5)->get();
 $data=array();
 foreach ($products as $product) {
  $data[]=array('value'=>$product->company_name,'company_id'=>$product->company_id);
}
if(count($data)){
 return $data;
}
else
  return ['value'=>'No Result Found'];

}




public function search_industry_ghi(Request $request){

 $term = $request->term;
 $products=DB::table('industry_type_master')->select('industry_type','industry_type_id')
 ->where('industry_type', 'LIKE', '%'.$term.'%')
 ->take(5)->get();
 $data=array();
 foreach ($products as $product) {
  $data[]=array('value'=>$product->industry_type,'industry_type_id'=>$product->industry_type_id);
}
if(count($data)){
 return $data;
}
else
 return ['value'=>'No Result Found'];



}

public function risk_addresh_show(Request $request){

 
 $products=DB::table('state_master')->select('state','state_id')->get();
 
 $data=array();
 foreach ($products as $product) {
  $data[]=array('state_Name'=>$product->state,'state_id'=>$product->state_id);
}
if(count($data)){
 
 return $data;
}
else
  return ['value'=>'No Result Found'];















}


public  function risk_city_show(Request $request){
  
 
 $products=DB::table('districtwise_zone_master')->select('district_name','district_id','state_id')
 ->where('state_id','=',$request->st_id)->get();
 
 $data=array();
 foreach ($products as $product) {
  
  $data[]=array('district_name'=>$product->district_name,'district_id'=>$product->district_id);
  
}
if(count($data)){
 
 return $data;
}
else
  return ['value'=>'No Result Found'];



}


}





