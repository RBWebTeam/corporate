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
                  <input type="hidden" name="section_id"  id="section_id_val">
                  <input type="hidden" name="business_type"   value="{{$business_type}}">
                  <input type="hidden" name="frshcash"   value="{{$frshcash}}">
                  <input type="hidden" name="newcustomer"   value="{{$newcustomer}}">
                  <input type="hidden" name="period_from"   value="{{$period_from}}">
                  <input type="hidden" name="period_to"   value="{{$period_to}}">
                  <input type="hidden" name="current_insurer_id"   value="{{$current_insurer_id}}">
                  <input type="hidden" name="pro_id" value="{{$pro_id}}">

                  <input type="text" name="insure_name" id="insure_name" class="insure_name" placeholder=" " required  > 

                  <span></span>
                </div>
                <h4 class="col-md-12"><span class="text-sucsess">Mailing Address of The Insured</span></h4>
                <div class="bg-danger">
                  <div class="styled-input agile-styled-input-top col-md-12">
                    <span>Address Line 1</span>
                    <input type="text" name="address_one" id="address_one" required> 

                    <span></span>
                  </div>
                  <div class="styled-input agile-styled-input-top col-md-12">
                    <span>Address Line 2</span>
                    <input type="text" name="address_two" id=address_two required=""> 

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
                 <!--  <input type="hidden" name="stateid" id="stateid" value="">
                 <input type="text" class="newsletter-name search_state " name="state" value="" placeholder="Search State" id="state" required> -->

                 <select class="newsletter-name search_state " name="stateid"   placeholder="Search State" id="search_state" required></select>

               </select>


             </div>




             <div class="styled-input agile-styled-input-top col-md-6">
              <span>Select city</span>
                <!--   <input type="hidden" name="districtid" id="districtid"  >
                <input type="text" class="newsletter-name search_district" name="district" placeholder="Search City" id="district" required > -->

                <select class="newsletter-name search_district " name="districtid"   placeholder="Search State" id="search_district" required> </select>

              </div>

              <div class="styled-input agile-styled-input-top col-md-6">
                <span>Pincode</span>
                <input type="text" name="pincode"  id="pincode" minlength="6" maxlength="6" > 
                <span></span>
              </div>
            </div><br>


            <h6 class="col-md-12"><span class="text-sucsess"><input type="checkbox" name="sameas" id="sameas">Same as above </span></h6>


            <h4 class="col-md-12"><span class="text-sucsess">Risk Location Address</span> </h4>

            <div class="styled-input agile-styled-input-top col-md-12">
              <span>Address Line 1</span>
              <input type="text" name="riskaddress_one" id="riskaddress_one" required > 

              <span></span>
            </div>
            <div class="styled-input agile-styled-input-top col-md-12">
              <span>Address Line 2</span>
              <input type="text" name="riskaddress_two" id=riskaddress_two required > 

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
              <!-- <input type="hidden" name="riskstateid" id="riskstateid"  >
              <input type="text" placeholder="search State" class="newsletter-name  risksearch_state" name="riskstate" value="" id="risksearch_state" required> -->
              <select class="newsletter-name riskstateid " name="riskstateid"   placeholder="Search State" id="riskstateid" required></select>


            </div>  


            <div class="styled-input agile-styled-input-top col-md-6">
              <span>Select city</span>
             <!--  <input type="hidden" name="risksdistrictid" id="risksdistrictid"  > 
             <input type="text" class="newsletter-name risksearchdistrict" name="riskdistrict" id="riskdistrict" placeholder="Search City"  required> -->


             <select class="newsletter-name risksdistrictid " name="risksdistrictid"   placeholder="Search State" id="risksdistrictid" required> </select>

           </div>

           <div class="styled-input agile-styled-input-top col-md-6">
            <span>Pincode</span>
            <input type="text" name="riskpincode"  id="riskpincode" minlength="6" maxlength="6"  > 
            <span></span>
          </div>


          <h4 class="col-md-12"><span class="text-sucsess">Contact Details </span></h4>
          <div class="styled-input agile-styled-input-top col-md-6">
            <span>Name of Contact Person</span>
            <input type="text" name="contact_person"  id="contact_person"   required=""> 
            <span></span>
          </div>
          <div class="styled-input agile-styled-input-top col-md-6">
            <span>Designation</span>
            <input type="text" name="designation"  id="designation" > 
            <span></span>
          </div>
          <div class="styled-input agile-styled-input-top col-md-6">
            <span>Email</span>
            <input type="email" name="email"  id="email"   required > 
            <span></span>
          </div>
          <div class="styled-input agile-styled-input-top col-md-6">
            <span>Mobile Number</span>
            <input type="text" name="mobile"  id="mobile" minlength="10" maxlength="10" required=""> 
            <span></span>
          </div>


          <div class="styled-input agile-styled-input-top col-md-12">
            <input type="text" name="occup_desc"     id="description" required>
            <label>Occupancy Description<span class="text-danger">*</span> </label> 
            <span></span>
          </div>


          <div class="styled-input agile-styled-input-top col-md-12">
            <span id="occupied_idmodel" style="margin: 157px" ><a  class="glyphicon glyphicon-question-sign" href="#" data-toggle="tooltip" title="click here!"></a></span>
            <input type="hidden" name="occ_id" id="occ_id"  ><td colspan="2"></td>
            <input type="text" name="occ"  class=" search_occupied "  id="occ" required>
            <label>Occupancy Type<span class="text-danger">*</span> </label> 
            <span></span>
          </div>



          <div class="styled-input agile-styled-input-top col-md-12">
             <a id="get_company_btn" href="#" title="click here!"  ><h5>Select Company</h5></a>
                  <div class="modal fade" id="Company_Name_model" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">  Company List</h4>
                      </div>
                   
                    
                     <ul  id="Company_Name_id" style="height: auto;max-height: 500px;overflow-x: hidden;"></ul>
                   
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
          </div>



   

 


          <div class="styled-input agile-styled-input-top col-md-12"  id="occupiedType" style="display: none;">
           <input type="radio" name="storage_type" value="Closed" checked="true">Closed
           <input type="radio" name="storage_type" value="Open"  >Open 

           <label>Storage Type<span class="text-danger">*</span> </label>   
         </div>



         <table class="table table-bordered table-striped mrg-top" id="Insured_refresh">
           <tr>
             <td><b>Sum Insured Componant</b></td>
             <td><b>Fire</b></td>
           </tr>
           <tr>
             <td>Sum Insured for Building</td>
             <td>
               <input type="text" name="sum_building" id="sum_building" value="0" onkeypress="return Numeric(event)"/ >
             </td>
           </tr>
           <tr>
             <td>Sum Insured for Plinth and Foundation</td>
             <td>
               <input type="text" name="sum_plith" id="sum_plith" value="0" onkeypress="return Numeric(event)"/>
             </td>
           </tr>
           <tr>
             <td>Sum Insured for Plant and Machinery</td>
             <td>
               <input type="text" name="sum_plant" id="sum_plant" value="0" onkeypress="return Numeric(event)"/>
             </td>
           </tr>
           <tr>
             <td>Sum Insured for Electrical Fitting and Installations</td>
             <td>
               <input type="text" name="sum_electric" id="sum_electric" value="0" onkeypress="return Numeric(event)"/>
             </td>
           </tr>
           <tr>
             <td>Sum Insured for Furnitures,Fixtures and Fittings</td>
             <td>
               <input type="text" name="sum_fff" id="sum_fff" value="0" onkeypress="return Numeric(event)"/>
             </td>
           </tr>
           <tr>
             <td>Sum Insured for Stock(Stocks other than stocks in Process)</td>
             <td>
               <input type="text" name="sum_others" id="sum_others" value="0" onkeypress="return Numeric(event)"/>
             </td>
           </tr>
           <tr>
             <td>Sum Insured for Stocks in Process</td>
             <td>
               <input type="text" name="sum_stock" id="sum_stock" value="0" onkeypress="return Numeric(event)"/>
             </td>
           </tr>
         </table>


         <table class="table table-bordered table-striped mrg-top" id="tabel_refresh">
          <tr>
           <td colspan="3"><b>Block Level Add on Covers</b></td>
         </tr>


         <tr>
           <td>Select</td>
           <td>Description of Addon Covers</td>
           <td>Sum Insured</td>
         </tr>

         <tr  >
           <td><input type="checkbox" name="is_stfi"  id="is_stfi" value="0"  /></td>
           <td>STFI </td>
           <td>
            <input type="text" class="is_stfi" name="sum_stfi" id="sum_stfi" value="0" onkeypress="return Numeric(event)" readonly/>
          </td>
        </tr>


        <tr >
         <td><input type="checkbox" name="is_earthquake"   id="is_earthquake" value="0"/></td>
         <td>Earthquake</td>
         <td><input type="text" class="is_earthquake" name="sum_earthquake" id="sum_earthquake" value="0" onkeypress="return Numeric(event)" readonly /></td>
       </tr>


       <tr >
         <td><input type="checkbox" name="is_terrorism" id="is_terrorism" value="0"/></td>
         <td>Terrorism</td>
         <td><input type="text" class="is_terrorism" name="sum_terrorism" id="sum_terrorism" value="0" onkeypress="return Numeric(event)" readonly /></td>
       </tr>


       <tr class="addon1">
         <td><input type="checkbox" name="is_escalation" id="is_escalation"  value="0"/></td>
         <td>Escalation <input type="radio" name="escalper" value="5" checked/>5%
          <input type="radio" name="escalper" value="10" />10%
          <input type="radio" name="escalper" value="15" />15%
          <input type="radio" name="escalper" value="20" />20%
          <input type="radio" name="escalper" value="25" />25%
        </td>
        <td><input type="text" class="is_escalation" name="sum_escalation"  id="sum_escalation" value="0" onkeypress="return Numeric(event)" readonly/>
        </td>
      </tr>


      <tr class="addon2">
       <td><input type="checkbox" name="is_omission" id="is_omission" value="0"/></td>
       <td>Omission to Insure additions, alterations or extensions</td>
       <td><input type="text" class="is_omission" name="sum_omission" id="sum_omission"   value="0" onkeypress="return Numeric(event)" /></td>
     </tr>


     <tr class="addon3">
       <td><input type="checkbox" name="is_lossrent" id="is_lossrent" value="0" /></td>

      <td > 
        <p id="sum_lossrent_ 1">Loss Of Rent clause</p> 
        <p style="display: none" id="sum_lossrent_11">Indemnity Period
          <select id="lossinteminity" name='lossinteminity'> <option value="0" selected>--Select Month--</option> <option   value='1'>1</option> <option value='2'>2</option> <option value='3'>3</option> <option value='4'>4</option> <option value='5'>5</option> <option value='6'>6</option> <option value='7'>7</option> <option value='8'>8</option> <option value='9'>9</option> <option value='10'>10</option> <option value='11'>11</option> <option value='12'>12</option> </select>
         </p>
      </td>
       <td><input type="text" class="is_lossrent" name="sum_lossrent" id="sum_lossrent" value="0" onkeypress="return Numeric(event)" oninput=" return sum_lossrentfn(this);"/>
       </td>
     </tr>


     <tr class="addon4">
       <td><input type="checkbox" name="is_accommodation" id="is_accommodation" value="0"/></td>
       <td>
       <p id="sum_accommodation_ 1">Insurance Of Additional Expenses of Rent For An Alternative Accommodation</p>

       <p id="sum_accommodation_11"  style="display: none">Indemnity Period
        <select  id="ioainteminity" name='ioainteminity'> <option  value="0" selected>--Select Month--</option> <option   value='1'>1</option> <option value='2'>2</option> <option value='3'>3</option> <option value='4'>4</option> <option value='5'>5</option> <option value='6'>6</option> <option value='7'>7</option> <option value='8'>8</option> <option value='9'>9</option> <option value='10'>10</option> <option value='11'>11</option> <option value='12'>12</option> </select> 
       </td>
       </p>

       <td><input type="text" class="is_accommodation" name="sum_accommodation" id="sum_accommodation" value="0" onkeypress="return Numeric(event)" oninput=" return sum_lossrentfn(this);"/>
       </td>
     </tr>


     <tr class="addon5">
       <td><input type="checkbox" name="is_architect" id="is_architect" value="0" /></td>
       <td>Architects, Surveyors and Consulting Engineers Fees ( in excess of 3% claim amount)</td>
       <td><input type="text" class="is_architect" name="sum_architect" id="sum_architect" value="0" onkeypress="return Numeric(event)" oninput=" return sum_architectto(this);"/></td>
     </tr>

     <tr class="addon6">
       <td><input type="checkbox" name="is_removedebris" id="is_removedebris" value="0" /></td>
       <td>Removal of Debris (in excess of 1% claim amount)</td>
       <td><input type="text" class="is_removedebris" name="sum_removedebris" id="sum_removedebris" value="0" onkeypress="return Numeric(event)"  oninput="return s_removedebristotal(this);" /></td>
     </tr>


     <tr class="addon7">
       <td><input type="checkbox" name="is_spontcomb" id="is_spontcomb" value="0" /></td>
       <td>Spontaneous Combustion</td>
       <td><input type="text" class="is_spontcomb" name="sum_spontcomb" id="sum_spontcomb" value="0" onkeypress="return Numeric(event)" readonly  /></td>
     </tr>

     <tr class="addon8">
       <td><input type="checkbox" name="is_startup" id="is_startup" value="0"/></td>
       <td>Start up Expenses</td>
       <td><input type="text" class="is_startup" name="sum_startup" id="sum_startup" value="0" onkeypress="return Numeric(event)" oninput=" return sum_lossrentfn(this);"/></td>
     </tr>

     <tr class="addon9">
       <td><input type="checkbox" name="is_floater" id="is_floater" value="0" /></td>
       <td>Floater Clause</td>
       <td><input type="text" class="is_floater" name="sum_floater" id="sum_floater" value="0" onkeypress="return Numeric(event)" readonly /></td>
     </tr>

     <tr class="addon10">
       <td><input type="checkbox" name="is_impactdamage" id="is_impactdamage" value="0" /></td>
       <td>Impact Damage due to Insured's own Rail/Road Vehicles, Fork lifts, Cranes, Stackers and the like and articles dropped therefrom.</td>
       <td><input type="text" class="is_impactdamage" name="sum_impactdamage" id="sum_impactdamage" value="0" onkeypress="return Numeric(event)" oninput=" return sum_lossrentfn(this);" /></td>
     </tr>
   </table>
    <div class="styled-input agile-styled-input-top col-md-12">
                    <span>Additional Information</span>
                    <input type="text" name="additions_info" id=additions_info  > 
                    <span></span>
    </div>
   <div class="col-md-12 mrg-btm">
    <div class="col-md-6 col-md-offset-5">
      <button id="insurance" class="btn btn-success">Get Quote</button>
        
         <button id="rfqinsurance" class="btn btn-success">Get RFQ</button>
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



<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

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



<div class="modal fade fade bd-example-modal-lg" id="is_floater_popup" role="dialog">
  <div class="modal-dialog modal-lg"">
    <div class="modal-content">
      <form   method="post" id="risk_form_id">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Risk Location Address</h4>
        </div>
        <table class="table table-hover table-condensed table-striped table-bordered">
          <thead><tr><th >No</th><th>Address</th><th >Select State</th><th >Select city</th><th >Pincode</th></tr></thead>
          <tbody id="tab_risk">
            <tr id='addr0'>
             <td >1</td>
             <td class="col-xs-4">
              <input class="form-control" type="text" name="riskaddress_add[]"  id="riskaddress_add"  required /></td>
              <td  >
                <!-- <input class="form-control risk_class_search" type="text" name="riskstat_add[]"   id="riskstat_add_0" required/> -->
                <select class="form-control risk_class_search" type="text" name="riskstatename[]"   id="search_0"> </select>
              </td>
              <td  ><!-- <input class="form-control" type="text" name="riskcity_add[]" id="riskcity_add" required/> -->
                <select class="form-control risk_id_search" type="text" name="riskcityname[]"   id="search_id_0"> </select>
              </td>
              <td  ><input class="form-control" type="text" name="riskpinname[]" minlength="6" maxlength="6"   onkeypress="return Numeric(event)" /></td>
            </tr>
            <tr id='addr1'></tr>

          </tbody>
        </table>
        <div class="modal-footer">
          <a id="add_row_risk" class="btn btn-success pull-left btn-xs">Add Row</a><a id='delete_row_risk' class="btn btn-danger pull-right btn-xs">Delete Row</a>
        </div>
        <div class="modal-footer">
          <center><button type="button" class="btn btn-primary " id="risk_submit_id"  >submit</button></center>
        </div>
      </form>
    </div>
  </div>
</div>









<script type="text/javascript">
var public_state;
 var risk_location_address=0;
 $(document).ready(function(){
  var  arra=Array('<option value="0">Select</option>');

  var i=1;
  var n=2;

  $.ajax({
    url: "{{route('risk_addresh_show') }}",
    dataType: "json",
    data: {},
    success: function(data) {
      $('#search_0').empty();
      $.each(data, function( key, val ) {
        arra.push('<option value="'+val.state_id+'">'+val.state_Name+'</option>');
      });
      $('#search_0').empty();
      $('#search_0').append(arra);

    }

  });

  $("#add_row_risk").click(function(){
   if(i<=10){
    $('#addr'+i).html('<td >'+ n++ +'</td><td class="col-xs-4"><input class="form-control" type="text" name="riskaddress_add[]" id="riskaddress_add" required /></td><td ><select class="form-control risk_class_search" type="text" name="riskstatename[]"   id="search_'+i+'"></td><td ><select class="form-control risk_id_search" type="text" name="riskcityname[]"   id="search_id_'+i+'"> </select></td><td ><input class="form-control" type="text" name="riskpinname[]"  onkeypress="return Numeric(event)" minlength="6" maxlength="6" /></td>');

    $('#tab_risk').append('<tr id="addr'+(i+1)+'"></tr>');
    $("#search_"+i).empty();
    $("#search_"+i).append(arra);  
    i++; 
  }else{
   alert("max size 10 only");
 }
});
  $("#delete_row_risk").click(function(){
   if(i>1){
     $("#addr"+(i-1)).html('');
     i--;
   }
 });


  $(document).on('change', '.risk_class_search', function() {   
    var st_id =$(this).val();    
    id=this.id;
    var  get_last_id=id.substr(id.length - 1);
    var  city_arra=Array('<option value="0">Select</option>');
    $.ajax({
      url: "{{route('risk_city_show') }}",
      dataType: "json",
      data: {st_id:st_id},
      success: function(data) {
       $("#search_id_"+get_last_id).empty();
       $.each(data, function( key, val ) {
        city_arra.push('<option value="'+val.district_id+'">'+val.district_name+'</option>');
      });
       $("#search_id_"+get_last_id).empty();
       $("#search_id_"+get_last_id).append(city_arra);
               // alert("#search_id_"+i);

             }

           });



  });






  $(document).on("click", "#risk_submit_id",function(e){
   e.preventDefault();
   validator=$('#risk_form_id').validate();
   if(! $('#risk_form_id').valid()){


     console.log(validator.errorList[0].element);


     return false;
   }else{
     $('#is_floater_popup').modal('hide');
     risk_location_address=$('#risk_form_id').serialize();
       //alert(risk_location_address);

     }


   })

});

 //var section_id='{{$section_id}}';
 var escalationval=0;
 var sum_omissionpublic=0;
 var architecttotal=0;
 var removedebristotal=0;
 var sm_spontcomb=0;
 $(document).ready(function(){


   for (i = 0; i<15 ; i++) {
     $(".addon"+i).hide();
   }

   function section_fn(section_id){
    $('#tabel_refresh input[type="text"]').val('');
    $('#tabel_refresh').find('input[type=checkbox]:checked').removeAttr('checked');
    $('#premium_table').empty();
    for (i = 0; i<15 ; i++) {
     $(".addon"+i).hide();
   }

   if(section_id==3){
     $(".addon1").show();
     $(".addon2").show();
     $(".addon3").show();
     $(".addon4").show();
     $(".addon10").show();
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

 }

 $(".search_occupied").autocomplete({ 
  source: function(request, response) {
    $.ajax({
      url: "{{ route('searchoccupiedajax') }}",
      dataType: "json",
      data: {
        term : request.term,
      },
      success: function(data) {
        response(data); 
      }
    });
  },
  select: function (event, ui) {
    if (ui.item == null || ui.item === undefined || ui.item.value=='No Result Found' ) {
     $(".search_occupied").attr("data-value",""); 
     $("#occ_id").val(" ");
     $("#occ").val(" ");
   }else{

     $('#section_id_val').val(ui.item.section_id);

     section_fn(ui.item.section_id);


     $(".search_occupied").attr("data-value", ui.item.datavalue);
     $("#occ_id").val(ui.item.datavalue);  
     if(ui.item.section_id==6){
       $('#occupiedType').show();
     }else{



      $('#occupiedType').hide();
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
      occupied :'occupied'
    },
    success: function(data) {
     $("#occ_company ul").empty();
     $.each( data, function( key, val ) {
       $("#occ_company ul").append('<li class="list-group-item" ><a href="#" class="occupied_id" style="font-size: 15px;"><p class="mb-0">'+val.occupied +'</p></a> <input type="hidden" name="abc" class="accupied_id_name"  value='+val.occupied_id +'><input type="hidden" name="abc" class="accupied_id_section_id"  value='+val.section_id +'></li>');




     });
     $('#occupiedPop').modal('toggle');


   }
 });  
});

//
//var stateid=0;

$(document).ready(function(){
 var  st_array=Array('<option value="0">Select</option>');
 $.ajax({
  url: "{{ route('searchstateajax') }}",
  dataType: "json",
  data: { },
  success: function(data) {
    $.each(data, function( key, val ) {
      st_array.push('<option value="'+val.datavalue+'">'+val.value+'</option>');
    });
    $('.search_state').empty();
    $('.search_state').append(st_array);
     public_state=st_array;
 
    $('.riskstateid').empty();
    $('.riskstateid').append(st_array);  

  }
});

});

$(document).on('change', '#search_state', function() {   
 var fstate_id=$(this).val();  
 var  city_array=Array('<option value="0">Select</option>');  
 $.ajax({
  url: "{{ route('searchdistrictajax') }}",
  dataType: "json",
  data: {
    fstate_id : fstate_id,
  },
  success: function(data) { 
    $.each(data, function( key, val ) {
      city_array.push('<option value="'+val.datavalue+'">'+val.value+'</option>');
    });
    $('.search_district').empty();
    $('.search_district').append(city_array);

  }
});

});



$(document).on('change', '#riskstateid', function() {   
 var sstate_id=$(this).val();     
 var  city_array=Array('<option value="0">Select</option>');  
 $.ajax({
  url: "{{ route('searchdistrictajax') }}",
  dataType: "json",
  data: {
    fstate_id : sstate_id,
  },
  success: function(data) { 

    $.each(data, function( key, val ) {
      city_array.push('<option value="'+val.datavalue+'">'+val.value+'</option>');
    });
    $('.risksdistrictid').empty();
    $('.risksdistrictid').append(city_array);



  }
});

});
 

function nancheck(rows) {
  rows=parseInt(rows);
  return a= isNaN(rows)==true ? 0 : rows;
}

 

$('input[type="checkbox"]').click(function(){  //Block Level Add on Covers

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
                       
                         sm_spontcomb=totlacal;

                         $('#sum_spontcomb').val(totlacal);
                      }else if(attr_id=='is_startup'){
                       totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff;
                       sum_omissionpublic=totlacal;
                       $('#sum_startup').val(0);
                     }else if(attr_id=='is_floater'){



                       $('#sum_building').val(0).prop('disabled',true);
                       $('#sum_plith').val(0).prop('disabled',true);
                      // $('#sum_building').val(0).prop('disabled',true);
                      $('#sum_plant').val(0).prop('disabled',true);
                      $('#sum_electric').val(0).prop('disabled',true);
                      $('#sum_fff').val(0).prop('disabled',true);

                      $('#is_escalation').prop('checked',false).prop('disabled',true);
                      $('#is_omission').prop('checked',false).prop('disabled',true);
                      $('#is_lossrent').prop('checked',false).prop('disabled',true);
                      $('#is_accommodation').prop('checked',false).prop('disabled',true);
                      $('#is_architect').prop('checked',false).prop('disabled',true);
                      $('#is_removedebris').prop('checked',false).prop('disabled',true);
                      $('#is_spontcomb').prop('checked',false).prop('disabled',true);

                      $('.is_escalation').val(0).prop('disabled',true);
                      $('.is_omission').val(0).prop('disabled',true);
                      $('.is_lossrent').val(0).prop('disabled',true);
                      $('.is_accommodation').val(0).prop('disabled',true);
                      $('.is_architect').val(0).prop('disabled',true);
                      $('.is_removedebris').val(0).prop('disabled',true);
                      $('.is_spontcomb').val(0).prop('disabled',true);

                      totlacal=sum_others+sum_stock;
                      $('#is_floater_popup').modal('show');
                      $('#premium_table').empty();
                      $('#sum_floater').val(totlacal);



                    }else if(attr_id=='is_impactdamage'){
                      totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff+sum_others+sum_stock;
                      sum_omissionpublic=totlacal;
                      $('#sum_impactdamage').val(totlacal);
                    }





                  }else if($(this).prop("checked") == false){
                   attr_ids= $(this).attr('id');
                   $('.'+attr_ids).val(0);





                   $('#sum_building').prop('disabled',false);
                   $('#sum_plith').prop('disabled',false);
                  // $('#sum_building').prop('disabled',false);
                  $('#sum_plant').prop('disabled',false);
                  $('#sum_electric').prop('disabled',false);
                  $('#sum_fff').prop('disabled',false);

                  $('.is_escalation').prop('disabled',false);
                  $('.is_omission').prop('disabled',false);
                  $('.is_lossrent').prop('disabled',false);
                  $('.is_accommodation').prop('disabled',false);
                  $('.is_architect').prop('disabled',false);
                  $('.is_removedebris').prop('disabled',false);
                  $('.is_spontcomb').prop('disabled',false);


                  $('#is_escalation').prop('disabled',false);
                  $('#is_omission').prop('disabled',false);
                  $('#is_lossrent').prop('disabled',false);
                  $('#is_accommodation').prop('disabled',false);
                  $('#is_architect').prop('disabled',false);
                  $('#is_removedebris').prop('disabled',false);
                  $('#is_spontcomb').prop('disabled',false);


                }
              });

$(document).on('click','.occupied_id',function(){
  var closest=$(this).closest('a');
  $('#occ').empty().val(closest.text());
  $('#occ_id').val($(this).closest('li').find('.accupied_id_name').val());
  $('#occupiedPop').modal('hide');
  var section_ids=$(this).closest('li').find('.accupied_id_section_id').val();
  section_fn(section_ids);
  $('#section_id_val').val(section_ids);
  $('html, body').animate({ scrollTop: $('#occ').offset().top -300}, 500);

  if(section_ids==6){
   $('#occupiedType').show();
 }else{
   $('#occupiedType').hide();
 }
});

 //refresh
 $('#Insured_refresh input').change(function(){
   $('#tabel_refresh input[type="text"]').val('');
   $('#tabel_refresh').find('input[type=checkbox]:checked').removeAttr('checked');
   $('#premium_table').empty();
 });


});





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


$('#get_company_btn').click(function(e){  e.preventDefault();   // get multiple company
   $.ajax({
         type:"get",
         url:"get-company-details",
         success:function(data){
              arr=Array();
             $('#Company_Name_id').empty();
              $.each(data,function(index,val){
                 arr.push('<tr > <td class="list-group-item" >'+val.company_name+'</td> <td class="list-group-item" > <input type="checkbox" name="comanyname[]" id="selectcomanyname_id" class="checkbox_id" value="'+val.company_id+'" > </td></tr>');
              });
              $('#Company_Name_id').append(arr);
              $('#Company_Name_model').modal('show');


         }
   })

});


$(document).on('click','.checkbox_id',function(){   // five  company  select
      // len=$(".checkbox_id:checkbox:checked").length;
      //   if(len<=5){
      //   }else{
      //      alert("only five company");
      //     $(this).prop('checked', false);
      //   }

           
});



$('#insurance').click(function(e){
 e.preventDefault();

 

 validator=$('#corporate_insurance').validate();
 if(! $('#corporate_insurance').valid()){
           //validator.errorList[0].element.focus();
           $.each(validator.errorMap, function (index, value) {
           // console.log('Id: ' + index + ' Message: ' + value);
           $('#'+index).focus();
           return false;
         });
           return false;
         }else{

          if( $('#section_id_val').val()!=''){



            $.ajax({  
              type: "POST",  
              url: "{{URL::to('corporate')}}",
              data : $('#corporate_insurance').serialize()+'&'+risk_location_address+'&checkinsured=0',
              success: function(msg){



                if(msg==0){
                  $('#premium_table').empty();
                }else{
                  $('html, body').animate({
                    scrollTop: $("#premium_table").offset().top
                  }, 300);



                  var tablerows = new Array();
                  $.each(msg, function( index, value ) {  
                   tablerows.push('<tr><td class="ab">' + value.company_id + '</td><td>' + value.company_name + '</td><td>' + value.premium_amt + '</td><td>' + value.gst_amt + '</td><td>' + value.net_premium_amt +'</td> <td>' + value.company_status +'</td> <td><a href="#" class="btn btn-success getval">Apply Now</a></td>        <input type="hidden" name="c_id[]" value="'+value.company_id+'" class="c_id"><input type="hidden" name="c_name[]" value="'+value.company_name+'" class="c_name"><input type="hidden" name="p_amount[]" value="'+value.premium_amt+'" class="p_amount"><input type="hidden" name="gst_amount[]" value="'+value.gst_amt+'" class="gst_amount"><input type="hidden" name="net_p_amount[]" value="'+value.net_premium_amt+'" class="net_p_amount"> <input type="hidden" name="company_status[]" class="company_status" value="'+value.company_status+'"></tr>');
                 }); 

                  if(msg){
                    $('#premium_table').empty().append(' <form method="post" action="#" id="getquote">  {{ csrf_field() }}<table class="table table-striped table-bordered "><tr class="text-capitalize"><td><strong>Company ID</strong></td><td><strong>Company Name</strong></td><td><strong>Premium Amount</strong></td><td><strong>GST Amount</strong></td><td><strong>Net Premium Amount</strong> </td><td><strong>Remark</strong></td><td><strong>Action</strong></td></tr><tr>'+tablerows.join("")+'</tr></table> <button  class="btn btn-success  apply_id col-md-offset-5">Compare Quotes</button></form>');
                  }else{
                    $('#premium_table').empty().append('No Result Found');
                  }          
                }  
              }
            });

          }else{

           alert("please fill form carefully !..");
         }

       }
     });


// RFQ Quotes
$('#rfqinsurance').click(function(e){
 e.preventDefault();
 validator=$('#corporate_insurance').validate();
 if(! $('#corporate_insurance').valid()){
           $.each(validator.errorMap, function (index, value) {
           $('#'+index).focus();
           return false;
         });
           return false;
         }else{

          if( $('#section_id_val').val()!=''){
            $.ajax({  
              type: "POST",  
              url: "{{URL::to('corporate')}}",
              data : $('#corporate_insurance').serialize()+'&'+risk_location_address+'&checkinsured=1',
              success: function(msg){

                        

                      window.location.href="{{url('quotes-rfq')}}/"+msg;
          
           
              }


            });

          }else{

           alert("please fill form carefully !..");
         }

       }
     });
// END



$(document).on('click','.getval',function(){ event.preventDefault(); 
 comapny_id=$(this).closest('tr').find('.c_id').val();
 c_name=$(this).closest('tr').find('.c_name').val();
 p_amount=$(this).closest('tr').find('.p_amount').val();
 gst_amount=$(this).closest('tr').find('.gst_amount').val();
 net_p_amount=$(this).closest('tr').find('.net_p_amount').val();
 company_status=$(this).closest('tr').find('.company_status').val();

       // var  serialize=$('#getquote').serialize();
       var data = $('#getquote').serializeArray();
       data.push({name: 'comapny_id', value: comapny_id});

       if(company_status=="Decline"){   
         alert("Declined by "+c_name+" .");
       }else if(company_status=="Preferred" || company_status=="Referral" ){      
        if(company_status=="Referral"){
          alert(" Referred it to insurance company for higher discount.");
        }

    var r = confirm("request for quotes !");
    if (r == true) {
        txt =0;
    } else {
        txt =1;
    }



        $.ajax({  
          type: "POST",  
          url: "{{URL::to('quotes-add')}}",
          data :data,
          success: function(msg){
            if(msg.status=='error'){
            // window.location.href = "{{url('thank-you')}}";
              console.log("error");
           }else{

               if(txt==1){
                window.location.href = "{{url('thank-you')}}";
               }else{
                  window.location.href = "{{url('thank-you')}}";
               // window.location.href = "{{url('downlaod-pdf')}}/"+msg.status+"";
               }
              
           }




         }

       });
      }

    });

$(document).on('click','.apply_id',function(){
 event.preventDefault(); 

 var incdecline=0;
 var increferal=0;
 var values = $("input[name='company_status[]']")
 .map(function(){
   if($(this).val()=="Decline"){
    incdecline++;
  }if($(this).val()=="Referral"){
    increferal++;
  } return $(this).val();
}).get();

 if(5<=incdecline){
  alert("Declined by Insurance Company.");
}else{

  if(increferal){   alert(" Referred it to insurance company for higher discount.");}

  $.ajax({  
    type: "POST",  
    url: "{{URL::to('quotes-add')}}",
    data : $('#getquote').serialize(),
    success: function(msg){

     if(msg.status=='success'){
      window.location.href = "{{url('thank-you')}}";
    }else{
      console.log("error"); 
    }
  }
});
}
});


$(document).on('click','#sameas',function(){
  if($(this).is(':checked')){
    $('#riskaddress_one').val($('#address_one').val());
    $('#riskaddress_two').val($('#address_two').val());
    $('#riskpincode').val($('#pincode').val());
    $("#riskstateid").empty();
    $("#risksdistrictid").empty();           
    $("#riskstateid").append('<option value="'+$("#search_state option:selected").val()+'">'+$("#search_state option:selected").text()+'</option>') ;
    $("#risksdistrictid").append('<option value="'+$("#search_district option:selected").val()+'">'+$("#search_district option:selected").text()+'</option>') ;        
  }else{
    $('#riskaddress_one').val('');
    $('#riskaddress_two').val('');
    $('#riskpincode').val('');
    $('.riskstateid').empty();
    $('.riskstateid').append(public_state);      
  } 
})






$(document).on('click','#is_lossrent',function(){
if($(this).attr('id')=="is_lossrent" && $(this).prop("checked") == true){  // check Loss Of Rent clause 
      $('#sum_lossrent_11').show();
      $("#is_accommodation").prop("checked",false);
      $('#ioainteminity').val('');
      $('#sum_accommodation_11').hide();}else{
      $('#sum_lossrent_11').hide();}
});
$(document).on('click','#is_accommodation',function(){
if($(this).attr('id')=="is_accommodation" && $(this).prop("checked") == true){ //and Insurance Of Additional Expenses of Rent For An Alternative Accommodation
      $('#sum_accommodation_11').show();
      $("#is_lossrent").prop("checked",false);
      $('#lossinteminity').val('');
      $('#sum_lossrent_11').hide();}else{
      $('#sum_accommodation_11').hide();
    // $('#sum_lossrent_111').hide();
}
});
</script>




<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC6v5-2uaq_wusHDktM9ILcqIrlPtnZgEk&libraries=places&region=IN"></script>
<script type="text/javascript">
  google.maps.event.addDomListener(window, 'load', function () {
    var places = new google.maps.places.Autocomplete(document.getElementById('insure_name'));
    google.maps.event.addListener(places, 'place_changed', function () {
      var place = places.getPlace();
      var address = place.formatted_address;
      var latitude = place.geometry.location.lat();
      var longitude = place.geometry.location.lng();
      var mesg = "Address: " + address;
      mesg += "\nLatitude: " + latitude;
      mesg += "\nLongitude: " + longitude;
      alert(mesg);
    });
  });
</script>
@endsection

