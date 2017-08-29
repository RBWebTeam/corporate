<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
 return view('index');
});

Route::post('calculator-login','LoginController@calculator_login');
Route::group(['middleware' => 'fire','namespace' => 'Firecalculator'], function () {
Route::get('home','FirecalculatorController@home');
Route::post('firecal-sectionlist','FirecalculatorController@firecal_sectionlist');
Route::get('home','FirecalculatorController@home');
Route::get('section/{id}','FirecalculatorController@section');
Route::post('customer-details','FirecalculatorController@customerdetails');        

    });
Route::get('insurercompany',array('as'=>'insurercompany','uses'=>'AutoCompleteController@insurercompany')); 
Route::get('searchoccupiedajax',array('as'=>'searchoccupiedajax','uses'=>'AutoCompleteController@autoComplete_occupied_as'));
Route::get('searchstateajax',array('as'=>'searchstateajax','uses'=>'AutoCompleteController@autoComplete_state'));  
Route::get('searchdistrictajax',array('as'=>'searchdistrictajax','uses'=>'AutoCompleteController@autoComplete_district'));  
Route::post('corporate','LoginController@corporate');


//Route::get('/','LoginController@fire_calculator');
// Route::get('hotel-inn','UserController@hotel_inn');
// Route::get('register-form','LoginController@register_form');
// Route::get('fire-calculator','LoginController@fire_calculator');
// Route::get('searchpbcorporatecompanyajax',array('as'=>'searchpbcorporatecompanyajax','uses'=>'AutoCompleteController@autoComplete_pb_corporatecompany')); 

// 
// 
// // Route::post('district','LoginController@district');
// 

// 
