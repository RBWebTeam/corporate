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
use Illuminate\Support\Facades\Hash;
class AdminloginController extends Controller
{
     public function login(Request $request){
     	$validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }else{
           $value=DB::table('user_master')
           ->select('user_master.*')
           ->where('email','=',$request->email)
          ->where('password','=', $request->password)
          //->where('user_type_id','!=','0')
          ->first();
          	if($value){ 
 
                  $request->session()->put('userid',$value->userid);
		          	  $request->session()->put('firstname',$value->firstname);
		          	  $request->session()->put('email',$value->email);
		              $request->session()->put('mobile',$value->mobile);
                   $request->session()->put('user_type_id',$value->user_type_id);
                  
                  $request->session()->put('branch_id',$value->branch_id);

                   $request->session()->put('empcode',$value->empcode);
                   $request->session()->put('vertical_id',$value->vertical_id);
                   
                  

                     return redirect('dashboard');

                }else{
               	 Session::flash('msg', "Invalid email or password. Please Try again! ");
                 return Redirect::back();
                }
      }
   }


   public function registrationform(Request $req){

              $vali=Validator::make($req->all(), [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|email|unique:user_master',
                'mobile' => 'required|regex:/^[0-9]{10}+$/',
                'password' =>'required|min:6',
                'confirm_password' => 'required|min:6|same:password',
                'user_type_id'=>'required',
                'vertical_id'=>'required',
                'branch_id'=>'required',
                'empcode'=>'required|numeric',
                'reporting_emp'=>'required|numeric',

                            ]);

           if ($vali->fails()){
                return Redirect::back()
                        ->withErrors($vali)
                        ->withInput();
              }else{

              $arr= array('firstname' =>$req->firstname,
							'lastname' =>$req->lastname,
							'email' =>$req->email,
							'mobile' =>$req->mobile,
              'empcode'=>$req->empcode,
							'password' =>$req->password,
							'user_type_id' =>$req->user_type_id,
              'vertical_id' =>$req->vertical_id,
              'branch_id' =>$req->branch_id,
              'reporting_emp'=>$req->reporting_emp,
							//'datetime_created' =>date('Y-m-d H:i:s'),
                        );
              DB::table('user_master')->insert($arr);
              Session::flash('msg', "registration successfully completed.....");
               return redirect('dashboard');

             }
            

   }  
   public function verticalmasterform()
   {
    return view('admin.vertical-master');
    
   }

   public function logout(){
     Session::flush();
    return redirect('/');
   }
}
