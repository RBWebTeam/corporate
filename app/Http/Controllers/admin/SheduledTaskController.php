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
		$emp_code="";
		$error=0;
		$all_error_msg=[];
		$managers=DB::select('CALL usp_load_managers()');
		foreach ($managers as $key => $emp_code) {
			try{	
					$data=$this::get_managerwise_data($emp_code->empcode);
					$status=$this::sendMail();
				}catch(\Exception $ee){
					$error=1;
					array_push($all_error_msg,['emp_code' => $emp_code->empcode, 'message' => $ee->getMessage()]);
				}
			}
		if($error){
			$this::mail_error($all_error_msg);
		}
	}
	public function sendMail(){
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
	}
	public function mail_error($msg){
		$data=DB::table('mail_error_log')->insert($msg);
	}
	public function get_managerwise_data($emp_code){
		  try{
		    $adapter = new Local(public_path('pdf'));
		    $destinationPath = public_path(). '/pdf/';
		    $file     =$req->file('attachment_path');

		    if($file!=null || $file!=0){
		      $fileName = rand(1, 999) . $file->getClientOriginalName();
		      $filePath = "/temp/" . date("Y") . '/' . date("m") . "/" . $fileName;
		      $file->move($destinationPath, $fileName);
		    }else{
		      $file=0;
		    }
		    $filename=date('Y-m-d-h-i-s'); 
		    $data['15']=DB::select("call usp_get_lead_15daystat('".$emp_code."')");
			$data['30']=DB::select("call usp_get_lead_30daystat('".$emp_code."')");
			$data['45']=DB::select("call usp_get_lead_45daystat('".$emp_code."')");


		  	foreach ($data as $key => $value) {
		  		
		   		PDF::loadView('downloadpdf-intimation-mail',['data'=>$value])->save($filename.".pdf",$adapter);
		 	}

	}


	// public static function CallRaw($procName, $parameters = null, $isExecute = false)
	// {
	//     $syntax = '';
	//     for ($i = 0; $i < count($parameters); $i++) {
	//         $syntax .= (!empty($syntax) ? ',' : '') . '?';
	//     }
	//     $syntax = 'CALL ' . $procName . '(' . $syntax . ');';

	//     $pdo = DB::connection()->getPdo();
	//     $pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, true);
	//     $stmt = $pdo->prepare($syntax,[\PDO::ATTR_CURSOR=>\PDO::CURSOR_SCROLL]);
	//     for ($i = 0; $i < count($parameters); $i++) {
	//         $stmt->bindValue((1 + $i), $parameters[$i]);
	//     }
	//     $exec = $stmt->execute();
	//     if (!$exec) return $pdo->errorInfo();
	//     if ($isExecute) return $exec;

	//     $results = [];
	//     do {
	//         try {
	//             $results[] = $stmt->fetchAll();
	//             print_r($results);
	//         } catch (\Exception $ex) {
	//         	print_r( $ex->getMessage());exit();
	//         }
	//     } while ($stmt->nextRowset());


	//     if (1 === count($results)) return $results[0];
	//     return $results;
	// }
}