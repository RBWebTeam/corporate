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

/************
//  Master Added - Kishor
******************/
Route::get('dashboard/vertical-master','MasterController@verticalmasterform');
Route::get('dashboard/product-master','MasterController@productmasterform');
Route::get('dashboard/state-master','MasterController@statemasterform');
Route::get('dashboard/district-master','MasterController@districtmasterform');
Route::post('vertical-master-save','MasterController@verticalmastersave')->middleware('mainadmin');
Route::get('vertical-master-edit-view/{verticalid}','MasterController@verticalmastereditview')->middleware('mainadmin');
Route::post('vertical-master-update','MasterController@verticalmasterupdate')->middleware('mainadmin');
Route::get('vertical-master-delete/{verticalid}','MasterController@verticalmasterdelete')->middleware('mainadmin');
Route::post('product-master-save','MasterController@productmastersave')->middleware('mainadmin');
Route::get('product-master-edit-view/{productid}','MasterController@productmastereditview')->middleware('mainadmin');
Route::post('product-master-update','MasterController@productmasterupdate')->middleware('mainadmin');
Route::get('product-master-delete/{productid}','MasterController@productmasterdelete')->middleware('mainadmin');
Route::post('state-master-save','MasterController@statemastersave')->middleware('mainadmin');
Route::get('state-master-edit-view/{stateid}','MasterController@statemastereditview')->middleware('mainadmin');
Route::post('state-master-update','MasterController@statemasterupdate')->middleware('mainadmin');
Route::get('state-master-delete/{stateid}','MasterController@statemasterdelete')->middleware('mainadmin');
Route::post('district-master-save','MasterController@districtmastersave')->middleware('mainadmin');
Route::get('district-master-edit-view/{districtid}','MasterController@districtmastereditview')->middleware('mainadmin');
Route::post('district-master-update','MasterController@districtmasterupdate')->middleware('mainadmin');
Route::get('district-master-delete/{districtid}','MasterController@districtmasterdelete')->middleware('mainadmin');

/************
//  END
******************/



//Route::get('dashboard/approved','DashboardController@approved');
//approved
Route::get('approved','UserquotesController@approved');
Route::post('approve-it','UserquotesController@approve_specific_quote');
Route::post('mail-to-customer','UserquotesController@mail_to_customer');

//user-quotes
Route::get('user-quotes/{id}','UserquotesController@user_quotes');
Route::get('quotes-details/{id}','UserquotesController@quotes_details');
Route::get('quotes-edit/{id}','UserquotesController@quotes_edite');
Route::get('logout','AdminloginController@logout');
 //document upload
Route::get('upload','UploadController@UploadPage');
Route::post('upload-file','UploadController@UploadPost');
Route::post('issue-submit','UserquotesController@issue_submit');
 

Route::post('quote-remarks','UserquotesController@quote_remarks');
Route::post('quote-remarks-show','UserquotesController@quote_remarks_show');
 
 
Route::get('lead-generation','LeadController@generation_page');
Route::post('generate','LeadController@generate');
Route::post('fetch-prod-by-catg','LeadController@fetch_product_by_catg');
Route::get('show-leads','LeadController@show_leads');
Route::get('autocomplete','LeadController@group_auto_complete');
Route::get('bulk-upload','LeadController@bulk_upload');
Route::post('upload-excel','LeadController@upload_excel');
Route::get('show-xl-data','LeadController@show_xl_data');

});

/************
//  Group Health Insurance
******************/
Route::group(['middleware' => 'dashboard','namespace' => 'GroupHealthInsurance',  ], function() {
        Route::get('transaction-type/{id}','GHIcontroller@policy_type');
        Route::post('GHI-quote','GHIcontroller@ghi_quote');
    });

