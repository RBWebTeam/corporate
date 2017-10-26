<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Mail;
class SheduledTaskController extends Controller
{
	public function sendIntiamtionMail(Request $req){

		$to_email="manish.dixit@rupeeboss.com";
		$cc_email="";
		$bcc_email="";
		$time="";
		$subject_email="Lead Intimation Mail";
		$attac="";


		$mail = Mail::send('admin.intimation-mail',['time' => $time], function($message) use($to_email,$cc_email,$bcc_email,$attac) {
		  $message->from('scriptdp@gmail.com', 'RupeeBoss');
		  $message->to($to_email)
		              // ->bcc(array('rajbhardp@gmail.com','TESsdT@example.com','TESjxfjT@example.com','TESfssdT@example.com'))
		  ->subject('Lead intimation mail ');
		  // $message->cc($cc_email );
		  // $message->bcc($bcc_email);
		  // $message->attach($attac);

		});
		if(Mail::failures()){
		  $error=3;
		  echo $error;

		  
		}else{
		  $error=2;
		  echo $error;
		}
		print_r("hhhh");
	}
}