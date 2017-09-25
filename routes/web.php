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

//Route::post('calculator-login','LoginController@calculator_login');

Route::group(['middleware' => 'fire','namespace' => 'Firecalculator'], function () {
Route::get('home','FirecalculatorController@home');
Route::post('firecal-sectionlist','FirecalculatorController@firecal_sectionlist');
//Route::get('home','FirecalculatorController@home');
Route::get('section/{id}/{pro_id}','FirecalculatorController@section');
Route::post('customer-details','FirecalculatorController@customerdetails');
Route::post('quotes-add','FirecalculatorController@quotes_add');
Route::post('quotes-update','FirecalculatorController@quotes_update');
 
Route::get('thank-you','FirecalculatorController@thank_You');
Route::get('downlaod-pdf/{quote_id}','FirecalculatorController@downlaod_pdf');
Route::get('my-profile','ProfileController@my_profile');

    });
Route::get('insurercompany',array('as'=>'insurercompany','uses'=>'AutoCompleteController@insurercompany')); 
Route::get('searchoccupiedajax',array('as'=>'searchoccupiedajax','uses'=>'AutoCompleteController@autoComplete_occupied_as'));
Route::get('searchstateajax',array('as'=>'searchstateajax','uses'=>'AutoCompleteController@autoComplete_state'));  
Route::get('searchdistrictajax',array('as'=>'searchdistrictajax','uses'=>'AutoCompleteController@autoComplete_district'));  
Route::post('corporate','LoginController@corporate');

/*
|--------------------------------------------------------------------------
|  Admin Pannel
|--------------------------------------------------------------------------
*/
Route::get('login',function(){
  return view('admin.login');
});

Route::post('admin-login','admin\AdminloginController@login');

Route::group(['middleware' => 'dashboard','namespace'=>'admin'], function () {
Route::get('dashboard','DashboardController@dashboard');
Route::get('dashboard/registration','DashboardController@registration')->middleware('mainadmin');
Route::post('dashboard/registration-form','AdminloginController@registrationform');
Route::post('dashboard/notification','HeaderController@notification');
Route::get('dashboard/user-show-groups','DashboardController@user_show');

//Route::get('dashboard/approved','DashboardController@approved');
//approved
Route::get('approved','UserquotesController@approved');
Route::post('approve-it','UserquotesController@approve_specific_quote');
Route::get('mail-to-customer/{quote_id}','UserquotesController@mail_to_customer');

//user-quotes
Route::get('user-quotes/{id}','UserquotesController@user_quotes');
Route::get('quotes-details/{id}','UserquotesController@quotes_details');
Route::get('quotes-edite/{id}','UserquotesController@quotes_edite');
Route::get('logout','AdminloginController@logout');
 //document upload
Route::get('upload','UploadController@UploadPage');
Route::post('upload-file','UploadController@UploadPost');
});
