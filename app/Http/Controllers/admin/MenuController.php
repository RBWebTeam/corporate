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

use App\Http\Controllers\InitialController;
class MenuController extends Controller
{

 
     public function menulist(){

              $query=DB::table('menu_master_tb')->get();

             

     	 return view('menu.menu_list',['query'=>$query] );
     }


     public function menulist_add(Request $req){
           DB::table('menu_master_tb')->insert(['parent_id'=>$req->menu_id,'name'=>$req->name,'url_link'=>$req->url_link,'lvl'=>$req->lvl]);
           return redirect('menu-list');

     }


     public function menu_mapping(Request $req){

 
           	$menu=$this->recursiveFN(1,$id=0);

     	 

     	  return view('menu.menu_mapping',['menu'=>$menu]);
     }




     public function recursiveFN($menu_group_id,$parent_id=0){
                          
 



                       $menu='';
                      $sql='';
                      $m_p='';
                      $is_select='';
                      if($parent_id==0){
                      $sql=DB::select('call sp_recursive_mapping(?,?)',array(0,$menu_group_id));
                       }else{
                         $sql=DB::select('call sp_recursive_mapping(?,?)',array($parent_id,$menu_group_id));
                       }
  
                    foreach ($sql as $key => $value) {

                       if($value->lvl!=0){
                                   $is_select=1;
                                 }else{
                                   $is_select='';
                                 }

 
                  $echk0=($value->cread==1)?"checked":"";
                  $echk1=($value->cwrite==1)?"checked":"";
                           
                        if($value->menu_group_id==$menu_group_id){
                          $menu.='<li  class="icon_'.$is_select.'" ><label class="tree-toggle nav-header"><a  href="javascript:void(0)"><span class="sp-nav"> <input   type="checkbox" name="menu_id[]" id="'.$value->id.'"  checked value="'.$value->id.'"   ></span> '.$value->name.'</a>    </label>  <span style="display: none" id="r'.$value->id.'" >read <input class="rbtn" id="'.$value->id.'" type="checkbox" name="read"  '.$echk0.' value="1"> write <input class="wbtn" id="'.$value->id.'" type="checkbox" name="write" value="1" '.$echk1.' > </span>';
                     }else{
                        $menu.='<li class="icon_'.$is_select.'"  ><label class="tree-toggle nav-header"><a  href="javascript:void(0)" ><span class="sp-nav"> <input   type="checkbox" name="menu_id[]" id="'.$value->id.'" class="menu_id"  value="'.$value->id.'"   > </span>'.$value->name.'</a> </label> <span style="display: none" id="r'.$value->id.'" >read <input class="rbtn" id="'.$value->id.'" type="checkbox" name="read" value="1" '.$echk0.' > write <input  class="wbtn" id="'.$value->id.'" type="checkbox" name="write" value="1" '.$echk1.' ></span>';
                       }
                              
                       
                     
                       $menu.='<ul  class="nav nav-list tree" >'.$this->recursiveFN($menu_group_id,$value->id).'</ul>';
                       
                       $menu.='</li>';
                        
                    }




                    return $menu;

 



}


public function grouprights_add(Request $req){
$cl=new InitialController();
echo $cl->user_right_group_menu();  


exit;

 $val =Validator::make($req->all(), 
                 [
                 'menu_group_id' =>'required|not_in:0',
                 'menu_id' =>'required|not_in:null',
                ]);

           if ($val->fails()){
              return Back()->withErrors($val)->withInput();
           }else{
                     
                      $menu_group_id= $req->menu_group_id;
                      $tabel=DB::table('menu_mapping');
                    if ($tabel->where('menu_group_id', '=', $menu_group_id)->count() > 0) {
                        DB::table('menu_mapping')->where('menu_group_id', '=',$menu_group_id)->delete();
                        }

                         foreach ($req->menu_id as $key => $val) { 

                           $tabel->insert(['menu_group_id'=>$menu_group_id,'menu_id'=>$val]);
                          } 
                    
                          Session::flash('msg', "Successfully Updated..");
                     return Back();
        }

}


public function menu_rights(Request $req){

             if($req->check=='r'){
    DB::table('menu_mapping')->where('menu_group_id','=',$req->menu_group_id)
                             ->where('menu_id','=',$req->men_id)->update(['cread'=>$req->flag]);
                           }
                            if($req->check=='w'){
    DB::table('menu_mapping')->where('menu_group_id','=',$req->menu_group_id)
                             ->where('menu_id','=',$req->men_id)->update(['cwrite'=>$req->flag]);
                           }

}



}
