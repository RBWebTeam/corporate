<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use DB;
use Request;
use Response;
class UploadController extends Controller{
	public function UploadPage(){
		return view('admin/upload');
	}
}