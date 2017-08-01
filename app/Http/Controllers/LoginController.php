<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register_form(){
        
        return view('register_form');
    }

        public function fire_calculator(){
        
        return view('firecalculator');
    }
    
    public function corporate(Request $req){
    	// print_r($req->all());
        
       $quote_data=DB::select('call usp_get_premium_manufacture ("'.$req['occ_id'].'","'.$req['sum_building'].'","'.$req['sum_plith'].'","'.$req['sum_fff'].'","'.$req['sum_electric'].'","'.$req['sum_stock'].'","'.$req['sum_others'].'","'.$req['is_stfi'].'","'.$req['sum_stfi'].'","'.$req['is_earthquake'].'","'.$req['sum_earthquake'].'","'.$req['is_terrorism'].'","'.$req['sum_terrorism'].'","'.$req['is_architect'].'","'.$req['sum_architect'].'","'.$req['is_removedebris'].'","'.$req['sum_removedebris'].'","'.$req['is_powerfail'].'","'.$req['sum_powerfail'].'","'.$req['is_temprise'].'","'.$req['sum_temprise'].'","'.$req['is_forestfire'].'","'.$req['sum_forestfire'].'","'.$req['is_accident'].'","'.$req['sum_accident'].'","'.$req['is_spontcomb'].'","'.$req['sum_spontcomb'].'","'.$req['is_omission'].'","'.$req['sum_omission'].'","'.$req['is_materialstock'].'","'.$req['sum_materialstock'].'","'.$req['is_materialplant'].'","'.$req['sum_materialplant'].'","'.$req['is_tempstock'].'","'.$req['sum_tempstock'].'","'.$req['is_lossrent'].'","'.$req['sum_lossrent'].'","'.$req['is_accomrent'].'","'.$req['sum_accomrent'].'","'.$req['is_escalation'].'","'.$req['sum_escalation'].'","'.$req['is_startup'].'","'.$req['sum_startup'].'","'.$req['is_leakage'].'","'.$req['sum_leakage'].'","'.$req['is_leakageoutside'].'","'.$req['sum_leakageoutside'].'","'.$req['is_contaminate'].'","'.$req['sum_contaminate'].'","'.$req['is_contamoutside'].'","'.$req['sum_contamoutside'].'","'.$req['zoneid'].'")');
       // print_r($quote_data);
      return $quote_data;


    }

    public function district(Request $req){
    	 // print_r($req->all());exit();
        
       $quote_data=DB::select('call usp_get_district ("'.$req['stateid'].'")');
       // print_r($quote_data);
      return $quote_data;


    }
}

