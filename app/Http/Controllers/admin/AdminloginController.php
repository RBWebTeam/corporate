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
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        }else{
           $value=DB::table('user_master')->select('userid','email','password','firstname','mobile','user_type_id')->where('email','=',$request->email)
          ->where('password','=', $request->password)
          //->where('user_type_id','!=','0')
          ->first();
          	if($value){ 

                  $request->session()->put('dashUserid',$value->userid);
		          	  $request->session()->put('firstname',$value->firstname);
		          	  $request->session()->put('email',$value->email);
		              $request->session()->put('mobile',$value->mobile);
                  $request->session()->put('user_type_id',$value->user_type_id);
                  

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
							'password' =>$req->password,
							'is_admin' =>0,
							'datetime_created' =>date('Y-m-d H:i:s'),
                        );
              DB::table('user_master')->insert($arr);
              Session::flash('msg', "registration successfully completed.....");
               return redirect('dashboard');

             }
            

   }  

   public function logout(){
     Session::flush();
    return redirect('/');
   }
}
