<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Mail;
use Storage;
use Carbon\Carbon;
use GrahamCampbell\Flysystem\Facades\Flysystem;

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;
class SheduledTaskController extends Controller
{
	public function sendIntiamtionMail(Request $req){
		$emp_code="";
		$error=0;
		$all_error_msg=[];
		$managers=DB::select('CALL usp_load_managers()');
		foreach ($managers as $key => $emp_code) {
			try{	
					$data=$this::get_managerwise_data($emp_code->empcode);

					
				}catch(\Exception $ee){
					$error=1;
					array_push($all_error_msg,['emp_code' => $emp_code->empcode, 'message' => $ee->getMessage()]);
				}
			}
		if($error){
			$this::mail_error($all_error_msg);
		}
	}
	public function sendMail($pdf){
		$to_email="manish.dixit@rupeeboss.com";
		$cc_email="";
		$bcc_email="";
		$time="";
		$subject_email="Lead Intimation Mail";
		

		$mail = Mail::send('admin.intimation-mail',['time' => $time], function($message) use($to_email,$cc_email,$bcc_email,$pdf) {
			foreach ($pdf as $key => $value) {
		  	foreach ($value as $key => $val) {
		  		$message->attach($val->output());
		  	}
		  	
		  }
		  $message->from('scriptdp@gmail.com','RupeeBoss');
		  $message->to($to_email)->subject('Lead intimation mail');
		  
		   
		   
		});

		if(Mail::failures()){
		  $error=3;
		  echo $error;

		  
		}else{
		  $error=2;
		  echo $error;
		}
	}
	public function mail_error($msg){
		$data=DB::table('mail_error_log')->insert($msg);
	}
	public function get_managerwise_data($emp_code){
		  try{
		  		$pdf_arr=[];
			    $data['15']=DB::select("call usp_get_lead_15daystat('".$emp_code."')");
				$data['30']=DB::select("call usp_get_lead_30daystat('".$emp_code."')");
				$data['45']=DB::select("call usp_get_lead_45daystat('".$emp_code."')");
				
			  	foreach ($data as $key => $value) {	
			  		
			  	 $pdf[]=\PDF::loadView('downloadpdf-intimation-mail',['data'=>$value]);
			  		
			 	}
			 	
			 	$status=$this::sendMail($pdf);
			}catch(\Exception $ee){
				print_r($ee->getMessage());
			}
			print_r($pdf[0]);exit();

	}


}