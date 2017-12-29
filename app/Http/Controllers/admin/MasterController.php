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

} 
