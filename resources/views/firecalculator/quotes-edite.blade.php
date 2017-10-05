@extends('includes.master')
@section('content')

 <div class="row">
<div class="col-md-1"></div>
   <div class="col-md-10">
   <section class="register">
  <div class="register-full bg-white">
    <div class="register-right">
      <div class="register-in">
        
        <div class="register-form">
          <form id="corporate_insurance" name="corporate_insurance" method="POST"  >
          
            <div class="fields-grid col-md-12 bg-white box-shadow">
            <h2 class="bg-sucsess"  >Customer Details</h2>
              <div class="styled-input agile-styled-input-top col-md-12">
              <span>Name of Insured</span>
                      {{ csrf_field() }}
                     <input type="hidden" name="section_id" value="{{$getdetail->section_id}}">

                      
                     <input type="hidden" name="business_type"   value="{{$getdetail->cust_action}}">
                     <input type="hidden" name="frshcash"   value="{{$getdetail->transaction_type}}">
                     <input type="hidden" name="newcustomer"   value="{{$getdetail->customer_type}}">
                     <input type="hidden" name="period_from"   value="{{$getdetail->period_from}}">
                     <input type="hidden" name="period_to"   value="{{$getdetail->period_to}}">
                     <input type="hidden" name="current_insurer_id"   value="{{$getdetail->current_insurer_id}}">
                    <input type="hidden" name="pro_id" value="{{$getdetail->product_id}}">
                     

                <input type="text" name="insure_name" id="insure_name" value="{{$getdetail->customer_name}}" required  > 
                
                <span></span>
              </div>
              <h4 class="col-md-12"><span class="text-sucsess">Mailing Address of The Insured</span></h4>
              <div class="bg-danger">
              <div class="styled-input agile-styled-input-top col-md-12">
              <span>Address Line 1</span>
                <input type="text" name="address_one" id="address_one" value="{{$getdetail->address1}}" required> 
                
                <span></span>
              </div>
              <div class="styled-input agile-styled-input-top col-md-12">
              <span>Address Line 2</span>
                <input type="text" name="address_two" id=address_two  value="{{$getdetail->address2}}" required=""> 
                
                <span></span>
              </div>
              
              <div class="styled-input agile-styled-input-top col-md-6">
              <span>Select Country</span>
                <select class="selct" name="country_name" id="country_name"> 
                 <option><span class="text-danger"></span></option>
                 <option value="India" selected="">India</option>
                </select>
                
                <span></span>
              </div>
 
              <div class="styled-input agile-styled-input-top col-md-6">
              <span>Select State</span>
              <input type="hidden" name="stateid" id="stateid" value="{{$getdetail->state_id}}" >
              <input type="text" class="newsletter-name search_state " name="state"  value="{{$data['st_name']}}"   id="state" required>
              </div>
 


            
              <div class="styled-input agile-styled-input-top col-md-6">
              <span>Select city</span>
               <input type="hidden" name="districtid" id="districtid"  value="{{$getdetail->district_id}}"  >
               <input type="text" class="newsletter-name search_district"  value="{{$data['dis_name']}}"  name="district" id="district" required >
              </div>
              
              <div class="styled-input agile-styled-input-top col-md-6">
              <span>Pincode</span>
                <input type="text" name="pincode"  id="pincode"   value="{{$getdetail->pincode}}"   > 
                <span></span>
              </div>
              </div><br>

      




              
              <h4 class="col-md-12"><span class="text-sucsess">Risk Location Address</span></h4>
              
                <div class="styled-input agile-styled-input-top col-md-12">
              <span>Address Line 1</span>
                <input type="text" name="riskaddress_one" id="riskaddress_one" required value="{{$getdetail->risk_address1}}"> 
                
                <span></span>
              </div>
              <div class="styled-input agile-styled-input-top col-md-12">
              <span>Address Line 2</span>
                <input type="text" name="riskaddress_two" id=riskaddress_two required value="{{$getdetail->risk_address2}}"> 
                
                <span></span>
              </div>
              
              <div class="styled-input agile-styled-input-top col-md-6">
              <span>Select Country</span>
                <select class="selct" name="riskcountry_name" id="criskountry_name"> 
                 <option><span class="text-danger"></span></option>
                 <option value="India" selected="">India</option>
                </select>
                
                <span></span>
              </div>

              <div class="styled-input agile-styled-input-top col-md-6">
              <span>Select State</span>
              <input type="hidden" name="riskstateid" id="riskstateid"  value="{{$getdetail->risk_state_id}}">
              <input type="text" class="newsletter-name  risksearch_state" value="{{$data['rst_name']}}" name="riskstate" value="" id="risksearch_state" required>
              </div>


              <div class="styled-input agile-styled-input-top col-md-6">
              <span>Select city</span>

               <input type="hidden" name="risksdistrictid" id="risksdistrictid" value="{{$getdetail->risk_district_id}}"  > 
               <input type="text" class="newsletter-name risksearchdistrict" value="{{$data['rdt_name']}}" name="riskdistrict" id="riskdistrict"  required>
              </div>
              
              <div class="styled-input agile-styled-input-top col-md-6">
              <span>Pincode</span>
                <input type="text" name="riskpincode"  id="riskpincode"  value="{{$getdetail->risk_pincode}}"   > 
                <span></span>
              </div>
              

                    <h4 class="col-md-12"><span class="text-sucsess">Contact Details </span></h4>
              <div class="styled-input agile-styled-input-top col-md-6">
                <span>Name of Contact Person</span>
                 <input type="text" name="contact_person"  id="contact_person"  value="{{$getdetail->contact_person}}" required=""> 
                <span></span>
              </div>
              <div class="styled-input agile-styled-input-top col-md-6">
                <span>Designation</span>
                 <input type="text" name="designation"  id="designation" value="{{$getdetail->designation}}" > 
                <span></span>
              </div>
              <div class="styled-input agile-styled-input-top col-md-6">
                <span>Email</span>
                 <input type="email" name="email"  id="email" value="{{$getdetail->email}}"  required=""> 
                <span></span>
              </div>
              <div class="styled-input agile-styled-input-top col-md-6" >
                <span>Mobile Number</span>
                 <input type="text" name="mobile"  id="mobile" minlength="10" value="{{$getdetail->mobile}}" maxlength="10" required=""> 
                <span></span>
              </div>
 


               <div class="styled-input agile-styled-input-top col-md-12">
              <input type="text" name="occup_desc"  value="{{$getdetail->occup_desc}}"     id="description" required>
                <label>Occupancy Description<span class="text-danger">*</span> </label> 
                <span></span>
              </div>


              <div class="styled-input agile-styled-input-top col-md-12">
              <span id="occupied_idmodel" style="margin: 157px" ><a  class="glyphicon glyphicon-question-sign" href="#" data-toggle="tooltip" title="click here!"></a></span>
               <input type="hidden" name="occ_id" id="occ_id" value="{{$getdetail->occ_id}}" ><td colspan="2" ></td>
                <input type="text" name="occ"  class=" search_occupied "  id="occ" required value="{{$data['occupancy_name']}}">
                <label>Occupancy Type<span class="text-danger">*</span> </label> 
                <span></span>
              </div>


            
              <div class="styled-input agile-styled-input-top col-md-12"  id="occupiedType" style="display: none;">
               <input type="radio" name="storage_type" value="Closed" checked="true">Closed
               <input type="radio" name="storage_type" value="Open"  >Open 
 
                <label>Storage Type<span class="text-danger">*</span> </label>   
              </div>
                       

              
              <table class="table table-bordered table-striped mrg-top">
                 <tr>
                 <td><b>Sum Insured Componant</b></td>
                 <td><b>Fire</b></td>
                 </tr>
                 <tr>
                 <td>Sum Insured for Building</td>
                 <td>
                 <input type="text" name="sum_building" id="sum_building" value="{{$getdetail->sum_building}}" onkeypress="return Numeric(event)"/ >
                 </td>
                 </tr>
                 <tr>
                 <td>Sum Insured for Plinth and Foundation</td>
                   <td>
                 <input type="text" name="sum_plith" id="sum_plith" value="{{$getdetail->sum_plith}}" onkeypress="return Numeric(event)"/>
                 </td>
                 </tr>
                 <tr>
                 <td>Sum Insured for Plant and Machinery</td>
                  <td>
                 <input type="text" name="sum_plant" id="sum_plant" value="{{$getdetail->sum_plant}}" onkeypress="return Numeric(event)"/>
                 </td>
                 </tr>
                 <tr>
                 <td>Sum Insured for Electrical Fitting and Installations</td>
                  <td>
                 <input type="text" name="sum_electric" id="sum_electric" value="{{$getdetail->sum_electric}}" onkeypress="return Numeric(event)"/>
                 </td>
                 </tr>
                 <tr>
                 <td>Sum Insured for Furnitures,Fixtures and Fittings</td>
                  <td>
                 <input type="text" name="sum_fff" id="sum_fff" value="{{$getdetail->sum_fff}}" onkeypress="return Numeric(event)"/>
                 </td>
                 </tr>
                 <tr>
                 <td>Sum Insured for Stock(Stocks other than stocks in Process)</td>
                  <td>
                 <input type="text" name="sum_others" id="sum_others" value="{{$getdetail->sum_others}}" onkeypress="return Numeric(event)"/>
                 </td>
                 </tr>
                 <tr>
                 <td>Sum Insured for Stocks in Process</td>
                  <td>
                 <input type="text" name="sum_stock" id="sum_stock" value="{{$getdetail->sum_stock}}" onkeypress="return Numeric(event)"/>
                 </td>
                 </tr>
              </table>
              
              
              <table class="table table-bordered table-striped mrg-top">
              <tr>
               <td colspan="3"><b>Block Level Add on Covers</b></td>
              </tr>


               <tr>
                 <td>Select</td>
                 <td>Description of Addon Covers</td>
                 <td>Sum Insured</td>
               </tr>

                <tr >
                 <td><input type="checkbox" name="is_stfi"  id="is_stfi" value="0" {{$getdetail->is_stfi==1 ? 'checked' : ''}} /></td>
                 <td>STFI </td>
                 <td>
                    <input type="text" class="is_stfi" name="sum_stfi" id="sum_stfi" value="{{$getdetail->sum_stfi}}" onkeypress="return Numeric(event)" readonly/>
                 </td>
               </tr>


               <tr >
                 <td><input type="checkbox" name="is_earthquake"   id="is_earthquake"  value="0" {{$getdetail->is_earthquake==1 ? 'checked' : ''}} /></td>
                 <td>Earthquake</td>
                 <td><input type="text" class="is_earthquake" name="sum_earthquake" id="sum_earthquake"  value="{{$getdetail->sum_earthquake}}" onkeypress="return Numeric(event)" readonly /></td>
               </tr>


               <tr >
                 <td><input type="checkbox" name="is_terrorism" id="is_terrorism" value="0" {{$getdetail->is_terrorism==1 ? 'checked' : ''}} /></td>
                 <td>Terrorism</td>
                 <td><input type="text" class="is_terrorism" name="sum_terrorism" id="sum_terrorism"  value="{{$getdetail->sum_terrorism}}" onkeypress="return Numeric(event)" readonly /></td>
               </tr>


               <tr class="addon1">
                 <td><input type="checkbox" name="is_escalation" id="is_escalation"  value="0"  {{$getdetail->is_escalation==1 ? 'checked' : ''}}/></td>
                   {{$getdetail->is_escalation==25}}
                 <td>Escalation 
                 <input type="radio" name="escalper" value="5" {{$getdetail->  escalation_percent==5 ? 'checked' : ''}}/>5%
                 <input type="radio" name="escalper" value="10" {{$getdetail-> escalation_percent==10 ? 'checked' : ''}}/>10%
                 <input type="radio" name="escalper" value="15" {{$getdetail-> escalation_percent==15 ? 'checked' : ''}}/>15%
                 <input type="radio" name="escalper" value="20" {{$getdetail-> escalation_percent==20 ? 'checked' : ''}}/>20%
                 <input type="radio" name="escalper" value="25" {{$getdetail-> escalation_percent==25 ? 'checked' : ''}}/>25%
                                </td>
                 <td><input type="text" class="is_escalation" name="sum_escalation"  id="sum_escalation"  value="{{$getdetail->sum_escalation}}"  onkeypress="return Numeric(event)" readonly/>
                 </td>
               </tr>


               <tr class="addon2">
                 <td><input type="checkbox" name="is_omission" id="is_omission" value="0" {{$getdetail->is_omission==1 ? 'checked' : ''}}/></td>
                 <td>Omission to Insure additions, alterations or extensions</td>
                 <td><input type="text" class="is_omission" name="sum_omission" id="sum_omission"    value="{{$getdetail->sum_omission}}" onkeypress="return Numeric(event)" /></td>
               </tr>

              
               <tr class="addon3">
                 <td><input type="checkbox" name="is_lossrent" id="is_lossrent" value="0" {{$getdetail->is_lossrent==1 ? 'checked' : ''}} /></td>
                 <td>Loss Of Rent clause</td>
                 <td><input type="text" class="is_lossrent" name="sum_lossrent" id="sum_lossrent"  value="{{$getdetail->sum_lossrent}}" onkeypress="return Numeric(event)" oninput=" return sum_lossrentfn(this);"/></td>
               </tr>
               

                <tr class="addon4">
                 <td><input type="checkbox" name="is_accommodation" id="is_accommodation" value="0" {{$getdetail->is_accommodation==1 ? 'checked' : ''}} /></td>
                 <td>Insurance Of Additional Expenses of Rent For An Alternative Accommodation</td>
                 <td><input type="text" class="is_accommodation" name="sum_accommodation" id="sum_accommodation"  value="{{$getdetail->sum_accommodation}}" onkeypress="return Numeric(event)" oninput=" return sum_lossrentfn(this);"/></td>
               </tr>


                <tr class="addon5">
                 <td><input type="checkbox" name="is_architect" id="is_architect" value="0" {{$getdetail->is_architect==1 ? 'checked' : ''}} /></td>
                 <td>Architects, Surveyors and Consulting Engineers Fees ( in excess of 3% claim amount)</td>
                 <td><input type="text" class="is_architect" name="sum_architect" id="sum_architect"  value="{{$getdetail->sum_architect}}" onkeypress="return Numeric(event)" oninput=" return sum_architectto(this);"/></td>
               </tr>

               <tr class="addon6">
                 <td><input type="checkbox" name="is_removedebris" id="is_removedebris" value="0" {{$getdetail->is_removedebris==1 ? 'checked' : ''}} /></td>
                 <td>Removal of Debris (in excess of 1% claim amount)</td>
                 <td><input type="text" class="is_removedebris" name="sum_removedebris" id="sum_removedebris"  value="{{$getdetail->sum_removedebris}}" onkeypress="return Numeric(event)"  oninput="return s_removedebristotal(this);" /></td>
               </tr>


               <tr class="addon7">
                 <td><input type="checkbox" name="is_spontcomb" id="is_spontcomb" value="0" {{$getdetail->is_spontcomb==1 ? 'checked' : ''}} /></td>
                 <td>Spontaneous Combustion</td>
                 <td><input type="text" class="is_spontcomb" name="sum_spontcomb" id="sum_spontcomb"  value="{{$getdetail->sum_spontcomb}}" onkeypress="return Numeric(event)" readonly  /></td>
               </tr>
         
                <tr class="addon8">
                 <td><input type="checkbox" name="is_startup" id="is_startup" value="0" {{$getdetail->is_startup==1 ? 'checked' : ''}} /></td>
                 <td>Start up Expenses</td>
                 <td><input type="text" class="is_startup" name="sum_startup" id="sum_startup"  value="{{$getdetail->sum_startup}}" onkeypress="return Numeric(event)" oninput=" return sum_lossrentfn(this);"/></td>
               </tr>

                <tr class="addon9">
                 <td><input type="checkbox" name="is_floater" id="is_floater" value="0" {{$getdetail->is_floater==1 ? 'checked' : ''}} /></td>
                 <td>Floater Clause</td>
                 <td><input type="text" class="is_floater" name="sum_floater" id="sum_floater"  value="{{$getdetail->sum_floater}}" onkeypress="return Numeric(event)" readonly/></td>
               </tr>

               <tr class="addon10">
                 <td><input type="checkbox" name="is_impactdamage" id="is_impactdamage" value="0" {{$getdetail->is_impactdamage==1 ? 'checked' : ''}} /></td>
                 <td>Impact Damage due to Insured's own Rail/Road Vehicles, Fork lifts, Cranes, Stackers and the like and articles dropped therefrom.</td>
                 <td><input type="text" class="is_impactdamage" name="sum_impactdamage" id="sum_impactdamage"  value="{{$getdetail->sum_impactdamage}}" onkeypress="return Numeric(event)" oninput=" return sum_lossrentfn(this);" /></td>
               </tr>
              </table>
                  <div class="col-md-12 mrg-btm">
        
           
    <div class="col-md-2 col-md-offset-5">
    <button id="insurance" class="btn btn-success">Get Quote</button>
    </div>
 
            </div>
            
            <div class="clear"> </div>  
          </form>

          
          
          <div id="premium_table"></div>
         

        </div>

      </div>
      
    </div>
    
      </div>
    </div>
   </div>
</div>

 
  
 <div class="modal fade" id="occupiedPop" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Type of Occupation</h4>
        </div>
        
         <input type="text" id="myInput" onkeyup="myFunction()" class="  search-query form-control" placeholder="Search for names.." />
        <div class="modal-body" id=occ_company>
          <ul class="list-group" style="height: auto;max-height: 500px;overflow-x: hidden;" id="myUL"></ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>




<script type="text/javascript">
 var section_id='{{$getdetail->section_id}}';

 var escalationval=0;
 var sum_omissionpublic=0;
  var architecttotal=0;
 var removedebristotal=0;
  var sm_spontcomb=0;
  $(document).ready(function(){
    for (i = 0; i<15 ; i++) {
       $(".addon"+i).hide();
    }

          if(section_id==3){
             $(".addon1").show();
             $(".addon2").show();
             $(".addon3").show();
             $(".addon4").show();
          }else  if(section_id==4){
             $(".addon1").show();
             $(".addon2").show();
             $(".addon3").show();
             $(".addon4").show();
             $(".addon5").show();
             $(".addon6").show();
             $(".addon7").show();
             $(".addon8").show();
             $(".addon9").show();
              $(".addon10").show();
          }else if(section_id==5){
             $(".addon1").show();
             $(".addon2").show();
             $(".addon5").show();
             $(".addon6").show();
             $(".addon10").show();
             
          }else  if(section_id==6){
             $(".addon1").show();
             $(".addon2").show();
             $(".addon3").show();
             $(".addon4").show();
             $(".addon5").show();
             $(".addon6").show();
             $(".addon7").show();
             $(".addon9").show();
             $(".addon10").show();
          }
  $(".search_occupied").autocomplete({ 
      source: function(request, response) {
        $.ajax({
          url: "{{ route('searchoccupiedajax') }}",
          dataType: "json",
          data: {
            term : request.term,'sectionid':section_id
          },
          success: function(data) {
                response(data); 
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item === undefined || ui.item.value=='No Result Found' ) {
         $(".search_occupied").attr("data-value",""); 
          $("#occ_id").val(" ");
           $("#occ").val(" ");
           }else{
           $(".search_occupied").attr("data-value", ui.item.datavalue);
                    $("#occ_id").val(ui.item.datavalue);  
                     if(ui.item.section_id==6){
                         $('#occupiedType').show();
                     }
             }
           }
      });
    var i=0;
  $("#occupied_idmodel").click(function(){   
        $.ajax({
          url: "{{ route('searchoccupiedajax') }}",
          dataType: "json",
          data: {
            occupied :'occupied','section_id':section_id
          },
          success: function(data) {
           $("#occ_company ul").empty();
          $.each( data, function( key, val ) {
           $("#occ_company ul").append('<li class="list-group-item" ><a href="#" class="occupied_id" style="font-size: 15px;"><p class="mb-0">'+val.occupied +'</p></a> <input type="hidden" name="abc" class="accupied_id_name"  value='+val.occupied_id +'></li>');

            if(val.section_id==6){
                         $('#occupiedType').show();
                     }
          });
          $('#occupiedPop').modal('toggle');
 

          }
        });  
      });

//
var stateid=0;
$(".search_state").autocomplete({ 
      source: function(request, response) {
        $.ajax({
          url: "{{ route('searchstateajax') }}",
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
            response(data);
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
         $(".search_state").attr("data-value",""); 
          $("#state").val("");
        }else{
           $(".search_state").attr("data-value", ui.item.datavalue);
            $("#stateid").val(ui.item.datavalue);       
         stateid=ui.item.datavalue;
             }
           }
      });
//
  $(".search_district").autocomplete({ 
      source: function(request, response) {
        $.ajax({
          url: "{{ route('searchdistrictajax') }}",
          dataType: "json",
          data: {
            term : stateid, district:request.term
          },
          success: function(data) { response(data);}
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
         $(".search_district").attr("data-value",""); 
          $("#district").val('');
          $('#state').focus();
          alert("Please Select State");
        }else{
         $(".search_district").attr("data-value", ui.item.datavalue);
            $("#districtid").val(ui.item.datavalue);       
             }
           }    
      });

 

 //
var risksstateid=0;
$(".risksearch_state").autocomplete({ 
      source: function(request, response) {
        $.ajax({
          url: "{{ route('searchstateajax') }}",
          dataType: "json",
          data: {
            term : request.term
          },
          success: function(data) {
            response(data);
          }
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
         $(".risksearch_state").attr("data-value",""); 
          $("#risksearch_state").val("");
        }else{
           $(".risksearch_state").attr("data-value", ui.item.datavalue);
            $("#riskstateid").val(ui.item.datavalue);       
         risksstateid=ui.item.datavalue;
             }
           }
      });
//
  $(".risksearchdistrict").autocomplete({ 
      source: function(request, response) {     
        $.ajax({
          url: "{{ route('searchdistrictajax') }}",
          dataType: "json",
          data: {
            term : risksstateid, district:request.term
          },
          success: function(data) { response(data);}
        });
      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
         
          $("#riskdistrict").val('');
         
          alert("Please Select State");
        }else{
          
            $("#riskdistrictid").val(ui.item.datavalue);       
             }
           }    
      });

  function nancheck(rows) {
              rows=parseInt(rows);
           return a= isNaN(rows)==true ? 0 : rows;
  }

  (function(){


     
  })();
      
      $('input[type="checkbox"]').click(function(){

            if($(this).prop("checked") == true){

            var totlacal=0;
            var percent=0;
            var totalper=0;
            
            var sum_building=nancheck(parseFloat($('#sum_building').val()));
            var sum_plith=nancheck(parseFloat($('#sum_plith').val()));
            var sum_plant=nancheck(parseFloat($('#sum_plant').val()));
            var sum_electric=nancheck(parseFloat($('#sum_electric').val()));
            var sum_fff=nancheck(parseFloat($('#sum_fff').val()));
            var sum_others=nancheck(parseFloat($('#sum_others').val()));
            var sum_stock=nancheck(parseFloat($('#sum_stock').val()));


                attr_id=$(this).attr('id');
                        $('#'+attr_id).val(1);
                        if(attr_id=='is_stfi'){
                        totlacal=sum_building+sum_plant+sum_electric+sum_fff+sum_others+sum_stock;
                        $('#sum_stfi').val(totlacal);
                        }else if(attr_id=='is_earthquake'){
                       totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff+sum_others+sum_stock;
                        $('#sum_earthquake').val(totlacal);  
                        }else if(attr_id=='is_terrorism'){
                        totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff+sum_others+sum_stock;
                        $('#sum_terrorism').val(totlacal);
                        }else if(attr_id=='is_escalation'){
                        totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff;
                        escalationval=totlacal;
                        percent = $('input[name=escalper]:checked').val();
                        totalper=(percent*totlacal)/100;
                        $('#sum_escalation').val(totalper);
                        }else if(attr_id=='is_omission'){
                       totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff;
                       totalper=(5*totlacal)/100;
                        $('#sum_omission').val(totalper);
                        }else if(attr_id=='is_lossrent'){
                       totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff;
                        sum_omissionpublic=totlacal;
                        $('#sum_lossrent').val(0);
                        }else if(attr_id=='is_accommodation'){
                       totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff;
                        sum_omissionpublic=totlacal;
                        $('#sum_accommodation').val(0);
                        }else if(attr_id=='is_architect'){
                        totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff;
                        totalper=(7.5*totlacal)/100;  
                        architecttotal=totalper;
                       // $('#sum_architect').val(totalper);
                        }else if(attr_id=='is_removedebris'){
                        totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff;
                        totalper=(10*totlacal)/100; 
                        removedebristotal=totalper;                       
                      //  $('#sum_removedebris').val(totalper);
                        }else if(attr_id=='is_spontcomb'){
                        totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff+sum_others+sum_stock;
                        //$('#sum_spontcomb').val(0);
                        sm_spontcomb=totlacal;
                        }else if(attr_id=='is_startup'){
                         totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff;
                         sum_omissionpublic=totlacal;
                        $('#sum_startup').val(0);
                        }else if(attr_id=='is_floater'){
                        totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff+sum_others+sum_stock;
                        $('#sum_floater').val(0);
                        }else if(attr_id=='is_impactdamage'){
                        totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff+sum_others+sum_stock;
                        sum_omissionpublic=totlacal;
                        $('#sum_impactdamage').val(0);
                        }


                             


            }else if($(this).prop("checked") == false){
                   attr_ids= $(this).attr('id');
                          $('.'+attr_ids).val(0);
            }
});




  });

    $(document).on('click','.occupied_id',function(){
      var closest=$(this).closest('a');
    $('#occ').empty().val(closest.text());
    $('#occ_id').val($(this).closest('li').find('.accupied_id_name').val());
    $('#occupiedPop').modal('hide');
    //

    $('html, body').animate({ scrollTop: $('#occ').offset().top -300}, 500);

//$('#occ').focus();
  })


 
var  percent1 =0;
var  otalper =0;
$('input[type="radio"]').click(function(){

percent1 =  $('input[name=escalper]:checked').val();

 otalper=(percent1*parseFloat(escalationval))/100;  
$('#sum_escalation').val(otalper); 
});

function sum_lossrentfn(val){
   if(sum_omissionpublic>=val.value){  
        return  true;
   }else{
         alert("Sum Insured value cannot exceeding the Policy Sum Insured.");
         return val.value=0;
   }
}


function sum_architectto(val){
   if(architecttotal>=val.value){  
         return true;
   }else{
         alert("Sum Insured value cannot exceeding 7.5 % of Policy Sum Insured.");
         return val.value=0;
   }
}


function s_removedebristotal(val){
   if(removedebristotal>=val.value){  
         return true;
   }else{
         alert("Sum Insured value cannot exceeding 10 % of Policy Sum Insured.");
         return val.value=0;
   }
}


function s_spontcomb(val){
   if(sm_spontcomb>=val.value){  
         return true;
   }else{
         alert("Sum Insured value cannot exceeding the Policy Sum Insured.");
         return val.value=0;
   }
}



  $('#insurance').click(function(e){
     e.preventDefault();

 

     validator=$('#corporate_insurance').validate();
     if(! $('#corporate_insurance').valid()){
           //validator.errorList[0].element.focus();
        $.each(validator.errorMap, function (index, value) {
            console.log('Id: ' + index + ' Message: ' + value);
               $('#'+index).focus();
                return false;
        });
         return false;
    }else{

        $.ajax({  
                type: "POST",  
                url: "{{URL::to('corporate')}}",
                data : $('#corporate_insurance').serialize(),
                success: function(msg){

    $('html, body').animate({
        scrollTop: $("#premium_table").offset().top
    }, 300);



                         var tablerows = new Array();
                         $.each(msg, function( index, value ) {  
                         tablerows.push('<tr><td class="ab">' + value.company_id + '</td><td>' + value.company_name + '</td><td>' + value.premium_amt + '</td><td>' + value.gst_amt + '</td><td>' + value.net_premium_amt +'</td> <td><a href="#" class="btn btn-success getval">Apply Now</a></td>        <input type="hidden" name="c_id[]" value="'+value.company_id+'" class="c_id"><input type="hidden" name="c_name[]" value="'+value.company_name+'" class="c_name"><input type="hidden" name="p_amount[]" value="'+value.premium_amt+'" class="p_amount"><input type="hidden" name="gst_amount[]" value="'+value.gst_amt+'" class="gst_amount"><input type="hidden" name="net_p_amount[]" value="'+value.net_premium_amt+'" class="net_p_amount"></tr>');
        }); 

                      if(msg){
                            $('#premium_table').empty().append(' <form method="post" action="#" id="getquote">  {{ csrf_field() }}<input type="hidden" name="quote_id"   value="{{$getdetail->quote_id}}"><table class="table table-striped table-bordered "><tr class="text-capitalize"><td><strong>Company ID</strong></td><td><strong>Company Name</strong></td><td><strong>Premium Amount</strong></td><td><strong>GST Amount</strong></td><td><strong>Net Premium Amount</strong> </td><td><strong>Action</strong></td></tr><tr>'+tablerows.join("")+'</tr></table> <button  class="btn btn-success  apply_id col-md-offset-5">Download Quotes</button></form>');
                         }else{
                            $('#premium_table').empty().append('No Result Found');
                         }          
    }  
    });

    }
});


  
 

 $(document).on('click','.getval',function(){
 event.preventDefault(); 

    comapny_id=$(this).closest('tr').find('.c_id').val();
     c_name=$(this).closest('tr').find('.c_name').val();
      p_amount=$(this).closest('tr').find('.p_amount').val();
       gst_amount=$(this).closest('tr').find('.gst_amount').val();
        net_p_amount=$(this).closest('tr').find('.net_p_amount').val();


       // var  serialize=$('#getquote').serialize();
     var data = $('#getquote').serializeArray();
         data.push({name: 'comapny_id', value: comapny_id});
            
          $.ajax({  
                type: "POST",  
                url: "{{URL::to('quotes-update')}}",
                data :data,
                success: function(msg){

                //   window.location.href = "{{url('thank-you')}}";
                     

                  }

                });
 

});

  $(document).on('click','.apply_id',function(){
   event.preventDefault(); 

  

  // if(! $('#getquote').valid()){
        
  //        return false;
  //   }else{
    

      $.ajax({  
                type: "POST",  
                url: "{{URL::to('quotes-update')}}",
                data : $('#getquote').serialize(),
                success: function(msg){

                  // window.location.href = "{{url('thank-you')}}";
                   

                  }

                });
       

 //   }
 

});

</script>

<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
</script>
@endsection

