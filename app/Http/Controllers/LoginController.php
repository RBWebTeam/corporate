<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{



   public function calculator_login(Request $req){

                if($req->username=="admin" &&  $req->password=="123"){

                       $req->session()->put('admin', 'admin');
                        
                        return redirect('home');
                }else{
                
                       return redirect('/');
                }
   }







    public function register_form(){
        
        return view('register_form');
    }

        public function fire_calculator(){

             
        return view('firecalculator');
    }
    
    public function corporate(Request $req){

 

      $is_stfi=$req['is_stfi']?$req['is_stfi']:0;
      $is_earthquake=$req['is_earthquake']?$req['is_earthquake']:0;
      $is_terrorism=$req['is_terrorism']?$req['is_terrorism']:0;
      $is_escalation  =$req['is_escalation']?$req['is_escalation']:0;
      $is_omission=  $req['is_omission']?$req['is_omission']:0;
      $is_lossrent=$req['is_lossrent']?$req['is_lossrent']:0;
      $is_accommodation=$req['is_accommodation']?$req['is_accommodation']:0;
      $is_architect=$req['is_architect']?$req['is_architect']:0;
      $is_removedebris=$req['is_removedebris']?$req['is_removedebris']:0;
      $is_spontcomb=$req['is_removedebris']?$req['is_removedebris']:0;
      $is_startup  =$req['is_startup']?$req['is_startup']:0;
      $is_floater=  $req['is_floater']?$req['is_floater']:0;
      $is_impactdamage=$req['is_impactdamage']?$req['is_impactdamage']:0;
      
      $quote_data=DB::select('call usp_get_firecal_quote ('.$req['occ_id'].',"'.$req['section_id'].'","'.$req['sum_building'].'","'.$req['sum_plith'].'","'.$req['sum_plant'].'","'.$req['sum_electric'].'","'.$req['sum_fff'].'","'.$req['sum_others'].'","'.$req['sum_stock'].'","'.$is_stfi.'","'.$req['sum_stfi'].'","'.$is_earthquake.'","'.$req['sum_earthquake'].'","'.$is_terrorism.'","'.$req['sum_terrorism'].'","'.$is_escalation.'","'.$req['sum_escalation'].'","'.$is_omission.'","'.$req['sum_omission'].'","'.$is_lossrent.'","'.$req['sum_lossrent'].'","'.$is_accommodation.'","'.$req['sum_accommodation'].'","'.$is_architect.'","'.$req['sum_architect'].'","'.$is_removedebris.'","'.$req['sum_removedebris'].'","'.$is_spontcomb.'","'.$req['sum_spontcomb'].'"
        ,"'.$is_startup.'","'.$req['sum_startup'].'","'.$is_floater.'","'.$req['sum_floater'].'","'.$is_impactdamage.'","'.$req['sum_impactdamage'].'","'.$req['riskdistrictid'].'","'.$req['storage_type'].'")');
       
           //$this::CorporateSave($req);
     return $quote_data;


    }

    public function CorporateSave($req){
         print_r($req->all());exit;

          

    }






}

