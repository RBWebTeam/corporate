<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Redirect;
use Session;
use URL;
use Mail;
use DB;
class MasterController extends Controller
{
	 public function verticalmasterform(Request $req)
	   {   
	     $query=DB::select("call usp_vertical_master(?,?,?)",[null,null,'get']);
	     return view('admin.vertical-master',['query'=>$query]);
	    
	   }

    //
    public function verticalmastersave(Request $req)
    {
    	$vali=Validator::make($req->all(), [
                'verticalname' => 'required' ]);

           if ($vali->fails()){
                return Redirect::back()
                        ->withErrors($vali)
                        ->withInput();
              }else{

               try{

            $query=DB::select("call usp_vertical_master(?,?,?)",[null,$req['verticalname'],'insert']);
            Session::flash('msg',"Record Successfully Added...");
           	return Redirect::back();

            }catch(\Exception $ee){
            	print_r($ee->__toString());
            	//continue;
            }
              }
    }
    public function verticalmastereditview(Request $req) {
              
           $query=DB::select("call usp_vertical_master(?,?,?)",[$req->verticalid,null,'get']);return view('admin.vertical-master-edit',['query1'=>$query[0]]);   
    }

    public function verticalmasterupdate(Request $req) {
	      try{
	           $ar=array($req->verticalid,$req->verticalname,'update');

			   $query=DB::select("call usp_vertical_master(?,?,?)",$ar);  			  
			   Session::flash('msg',"Record Successfully Updated...");
           		return redirect('dashboard/vertical-master');
	           
	    	    }catch(\Exception $ee){	            	 
	 	    	 print_r($ee->__toString());
	            }
	  	
    }

 
     public function verticalmasterdelete(Request $req){
     
    	try{
           
		   $query=DB::select("call usp_vertical_master(?,?,?)",[$req->verticalid,null,'delete']);
		    Session::flash('msg',"Record Successfully Deleted...");
           	return Redirect::back();            
    	    }catch(\Exception $ee){            	 
 	          print_r($ee->__toString());
            }
  	
    }

    public function productmasterform(Request $req)
    {

    	$category=DB::table('policy_category_master')
      ->select('category_id','policy_category')->get();
 		  $query=DB::select("call usp_product_master(?,?,?,?,?)",[null,null,null,null,'get']);
	    return view('admin.product-master',['query'=>$query,'category'=>$category]);

    } 

    public function productmastersave(Request $req)  { 
			$vali=Validator::make($req->all(), [
                'productname' => 'required', 'category' => 'required' ]);
           if ($vali->fails()){
                return Redirect::back()
                        ->withErrors($vali)
                        ->withInput();
              }else{
            try{

	            $query=DB::select("call usp_product_master(?,?,?,?,?)",[null,$req['productname'],$req['category'],Session::get('userid'),'insert']);             
	            Session::flash('msg',"Record Successfully Added...");
	           	return Redirect::back();

                }catch(\Exception $ee){
                	print_r($ee->__toString());
                	//continue;
                }
              }
    }

    public function productmastereditview(Request $req) {
            $category=DB::table('policy_category_master')
      ->select('category_id','policy_category')->get();  
           $query=DB::select("call usp_product_master(?,?,?,?,?)",[$req->productid,null,null,null,'get']);        
           return view('admin.product-master-edit',['query1'=>$query[0],'category'=>$category]);
         
    }
     public function productmasterupdate(Request $req) {
        try{
        
             $ar=array($req->productid,$req->productname,$req->category,Session::get('userid'),'update');
  
         $query=DB::select("call usp_product_master(?,?,?,?,?)",$ar);          
         Session::flash('msg',"Record Successfully Updated...");
              return redirect('dashboard/product-master');
             
            }catch(\Exception $ee){                
           print_r($ee->__toString());
              }
      
    }

    public function productmasterdelete(Request $req){
     
      try{
           
       $query=DB::select("call usp_product_master(?,?,?,?,?)",[$req->productid,null,null,null,'delete']);
        Session::flash('msg',"Record Successfully Deleted...");
            return Redirect::back();            
          }catch(\Exception $ee){              
            print_r($ee->__toString());
            }
    
    }

    public function statemasterform(Request $req)
     {   
       $query=DB::select("call usp_state_master(?,?,?,?)",[null,null,null,'get']);
       return view('admin.state-master',['query'=>$query]);      
     }

    public function statemastersave(Request $req)
    {
      $vali=Validator::make($req->all(), [
                'statename' => 'required' ]);

           if ($vali->fails()){
                return Redirect::back()
                        ->withErrors($vali)
                        ->withInput();
              }else{

               try{

            $query=DB::select("call usp_state_master(?,?,?,?)",[null,$req['statename'],Session::get('userid'),'insert']);
            Session::flash('msg',"Record Successfully Added...");
            return Redirect::back();

            }catch(\Exception $ee){
              print_r($ee->__toString());
              //continue;
            }
              }
    }
    public function statemastereditview(Request $req)
    {

       $query=DB::select("call usp_state_master(?,?,?,?)",[$req->stateid,null,null,'get']);      
       return view('admin.state-master-edit',['query1'=>$query[0]]); 
    }

    public function statemasterupdate(Request $req) {
        try{
             $ar=array($req->stateid,$req->statename,Session::get('userid'),'update');

         $query=DB::select("call usp_state_master(?,?,?,?)",$ar);          
         Session::flash('msg',"Record Successfully Updated...");
              return redirect('dashboard/state-master');
             
            }catch(\Exception $ee){                
           print_r($ee->__toString());
              }
      
    }

 
     public function statemasterdelete(Request $req){
     
      try{
           
       $query=DB::select("call usp_state_master(?,?,?,?)",[$req->stateid,null,null,'delete']);
        Session::flash('msg',"Record Successfully Deleted...");
            return Redirect::back();            
          }catch(\Exception $ee){              
            print_r($ee->__toString());
            }
    
    }
    public function districtmasterform(Request $req){

        $state=DB::table('state_master')
      ->select('state_id','state')->get();
       $zone=DB::table('earthquake_zone_master')
      ->select('zone_id','zone')->get();

      $query=DB::select("call usp_district_master(?,?,?,?,?,?)",[null,null,null,null,null,'get']);
      return view('admin.district-master',['query'=>$query,'state'=>$state,'zone'=>$zone]);

    }
    public function districtmastersave(Request $req)  { 
      $vali=Validator::make($req->all(), [
                'districtname' => 'required', 'state' => 'required', 'zone' => 'required' ]);
           if ($vali->fails()){
                return Redirect::back()
                        ->withErrors($vali)
                        ->withInput();
              }else{
            try{

              $query=DB::select("call usp_district_master(?,?,?,?,?,?)",[null,$req['districtname'],$req['zone'],$req['state'],Session::get('userid'),'insert']);             
              Session::flash('msg',"Record Successfully Added...");
              return Redirect::back();

                }catch(\Exception $ee){
                  print_r($ee->__toString());
                  //continue;
                }
              }
    }

    public function districtmastereditview(Request $req) {
             $state=DB::table('state_master')->select('state_id','state')->get();
             $zone=DB::table('earthquake_zone_master')->select('zone_id','zone')->get();  
           $query=DB::select("call usp_district_master(?,?,?,?,?,?)",[$req->districtid,null,null,null,null,'get']);   
           // print_r($query);exit;
           return view('admin.district-master-edit',['query1'=>$query[0],'state'=>$state,'zone'=>$zone]);
         
    }
     public function districtmasterupdate(Request $req) {
        try{
        
             $ar=array($req->districtid,$req->districtname,$req->zone,$req->state,Session::get('userid'),'update');
  
         $query=DB::select("call usp_district_master(?,?,?,?,?,?)",$ar);          
         Session::flash('msg',"Record Successfully Updated...");
              return redirect('dashboard/district-master');
             
            }catch(\Exception $ee){                
           print_r($ee->__toString());
              }
      
    }

    public function districtmasterdelete(Request $req){
     
      try{
           
       $query=DB::select("call usp_district_master(?,?,?,?,?,?)",[$req->districtid,null,null,null,null,'delete']);
        Session::flash('msg',"Record Successfully Deleted...");
            return Redirect::back();            
          }catch(\Exception $ee){              
            print_r($ee->__toString());
            }
    
    }

    public function occupancymappingform(Request $req)
    {
      try
      {
        $occupancy= DB::select('call usp_get_occupancy_master()');
        $product = DB::select('call usp_get_product_master()');
        $company = DB::select('call usp_get_company_master()');
         $query=DB::select("call usp_comp_occup_mapping(?,?,?,?,?,?,?,?,?)",[null,null,null,null,null,null,null,null,'get']);      

        return view('admin.companywise-occupancy',['occupancy'=>$occupancy,'product'=>$product,'company'=> $company,'query'=>$query]);

      }
      catch(\Exception $ee)
      {
        print_r($ee->__toString());
      }
    }

    public function occupancymappingsave(Request $req)
    {
               $vali=Validator::make($req->all(), [
                'occup_id' => 'required|not_in:0', 'product_id' => 'required|not_in:0','company_id' => 'required|not_in:0','company_status' => 'required|not_in:0','storagetype' => 'required|not_in:0','discount_rate'=> 'required' ]);
           if ($vali->fails()){
                return Redirect::back()
                        ->withErrors($vali)
                        ->withInput();
              }else{
            try{

              $query=DB::select("call usp_comp_occup_mapping(?,?,?,?,?,?,?,?,?)",[null,$req['occup_id'],$req['product_id'],$req['company_id'],$req['discount_rate'],$req['company_status'],$req['storagetype'],Session::get('userid'),'insert']);             
              Session::flash('msg',"Record Successfully Added...");
              return Redirect::back();

                }catch(\Exception $ee){
                  print_r($ee->__toString());
                  //continue;
                }
              }
    }

    public function occupancycompanyeditview(Request $req) {
        
        $occupancy= DB::select('call usp_get_occupancy_master()');
        $product = DB::select('call usp_get_product_master()');
        $company = DB::select('call usp_get_company_master()');
        $query=DB::select("call usp_comp_occup_mapping(?,?,?,?,?,?,?,?,?)",[$req->id,null,null,null,null,null,null,null,'get']);   
             
            // print_r($query);exit;
           return view('admin.companywise-occupancy-edit',['query1'=>$query[0],'occupancy'=>$occupancy,'product'=>$product,'company'=>$company]);
         
    }

    public function occupancycompanyupdate(Request $req) {
        try{
        
             $ar=array($req->mapid,$req->occup_id,$req->product_id,$req->company_id,$req->discount_rate,$req->company_status,$req->storagetype,Session::get('userid'),'update');

  
         $query=DB::select("call usp_comp_occup_mapping(?,?,?,?,?,?,?,?,?)",$ar);          
         Session::flash('msg',"Record Successfully Updated...");
          return redirect('dashboard/company-occupancy-mapping');
            
            }catch(\Exception $ee){                
           print_r($ee->__toString());
              }
      
    }
    public function occupancycompanydelete(Request $req){
         
          try{
               
           $query=DB::select("call usp_comp_occup_mapping(?,?,?,?,?,?,?,?,?)",[$req->id,null,null,null,null,null,null,null,'delete']);
            Session::flash('msg',"Record Successfully Deleted...");
                return Redirect::back();            
              }catch(\Exception $ee){              
                print_r($ee->__toString());
                }
        
    }

    public function occupancymasterform(Request $req)
    {
        try
        {
           $section= DB::select('call usp_get_section_master()');

          $query=DB::select("call usp_occupancy_master(?,?,?,?,?,?,?,?,?,?)",[null,null,null,null,null,null,null,null,null,'get']);      

        return view('admin.occupancy-master',['section'=>$section,'query'=>$query]);
          }
          catch(\Exception $ee){              
                print_r($ee->__toString());
                }
        
    }

    public function occupancymastersave(Request $req)
    { 
      $vali=Validator::make($req->all(), [
                'occupancy_name' => 'required', 'building_rate' => 'required','content_rate' => 'required','stfi_rate'=>'required','eq_rate' => 'required' , 'terrorism_rate' => 'required' ]);
           if ($vali->fails()){
                return Redirect::back()
                        ->withErrors($vali)
                        ->withInput();
              }else{
         $query=DB::select("call usp_occupancy_master(?,?,?,?,?,?,?,?,?,?)",[null,$req['occupancy_name'],$req['building_rate'],$req['content_rate'],$req['stfi_rate'],$req['stfi_open_rate'],$req['eq_rate'],$req['terrorism_rate'],$req['section_id'],'insert']);             
              Session::flash('msg',"Record Successfully Added...");
              return Redirect::back();
            }
    }

    public function occupancymastereditview(Request $req)
    {
      
        $section= DB::select('call usp_get_section_master()');
        $query=DB::select("call usp_occupancy_master(?,?,?,?,?,?,?,?,?,?)",[$req->id,null,null,null,null,null,null,null,null,'get']);   
               
              // print_r($query);exit;
             return view('admin.occupancy-master-edit',['query1'=>$query[0],'section'=>$section]);
    }

    public function occupancymasterupdate(Request $req)
    {
      
       $ar=array($req->id,$req->occupancy_name,$req->building_rate,$req->content_rate,$req->stfi_rate,$req->stfi_open_rate,$req->eq_rate,$req->terrorism_rate,$req->section_id,'update');

       
         $query=DB::select("call usp_occupancy_master(?,?,?,?,?,?,?,?,?,?)",$ar);          
         Session::flash('msg',"Record Successfully Updated...");
          return redirect('dashboard/occupancy-master');
    }
  public function occupancymasterdelete(Request $req)
  {

    try{
      
               
           $query=DB::select("call usp_occupancy_master(?,?,?,?,?,?,?,?,?,?)",[$req->id,null,null,null,null,null,null,null,null,'delete']);
            Session::flash('msg',"Record Successfully Deleted...");
                return Redirect::back();            
        }catch(\Exception $ee){              
                print_r($ee->__toString());
        }
  }

} 
