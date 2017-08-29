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
            <h2 class="bg-sucsess">Customer Details</h2>
              <div class="styled-input agile-styled-input-top col-md-12">
              <span>Name of Insured</span>
                    {{ csrf_field() }}
                <input type="hidden" name="section_id" value="{{$section_id}}">
     
                <input type="text" name="insure_name" id="insure_name" required  > 
                
                <span></span>
              </div>
              <h4 class="col-md-12"><span class="text-sucsess">Mailing Address of The Insured</span></h4>
              <div class="bg-danger">
              <div class="styled-input agile-styled-input-top col-md-12">
              <span>Address Line 1</span>
                <input type="text" name="address_one" id="address_one" required=""> 
                
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
              <input type="hidden" name="stateid" id="stateid" value="">
              <input type="text" class="newsletter-name search_state " name="state" value="" id="state">
              </div>



            
              <div class="styled-input agile-styled-input-top col-md-6">
              <span>Select city</span>
               <input type="hidden" name="districtid" id="districtid"  >
               <input type="text" class="newsletter-name search_district" name="district" id="district"  >
              </div>
              
              <div class="styled-input agile-styled-input-top col-md-6">
              <span>Pincode</span>
                <input type="text" name="pincode"  id="pincode" minlength="6" maxlength="6" required=""> 
                <span></span>
              </div>
              
              </div>
              <br>
              
              
              <h4 class="col-md-12"><span class="text-sucsess">Risk Location Address</span></h4>
              
                <div class="styled-input agile-styled-input-top col-md-12">
              <span>Address Line 1</span>
                <input type="text" name="address_one" id="riskaddress_one" required=""> 
                
                <span></span>
              </div>
              <div class="styled-input agile-styled-input-top col-md-12">
              <span>Address Line 2</span>
                <input type="text" name="address_two" id=riskaddress_two required=""> 
                
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
              <input type="hidden" name="riskstateid" id="riskstateid"  >
              <input type="text" class="newsletter-name  risksearch_state" name="riskstate" value="" id="risksearch_state">
              </div>


              <div class="styled-input agile-styled-input-top col-md-6">
              <span>Select city</span>
               <input type="hidden" name="riskdistrictid" id="risksdistrictid"  > 
               <input type="text" class="newsletter-name risksearchdistrict" name="riskdistrict" id="riskdistrict"  >
              </div>
              
              <div class="styled-input agile-styled-input-top col-md-6">
              <span>Pincode</span>
                <input type="text" name="riskpincode"  id="riskpincode" minlength="6" maxlength="6" required=""> 
                <span></span>
              </div>
              
              <div class="styled-input agile-styled-input-top col-md-12">
              <span id="occupied_idmodel" style="margin: 157px"><a>view</a></span>
               <input type="hidden" name="occ_id" id="occ_id"  ><td colspan="2"></td>
                <input type="text" name="occ"  class=" search_occupied "  id="occ" required>
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
                 <input type="text" name="sum_building" id="sum_building" value="0" onkeypress="return Numeric(event)"/>
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
              
              
              <table class="table table-bordered table-striped mrg-top">
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
                 <td>Loss Of Rent clause</td>
                 <td><input type="text" class="is_lossrent" name="sum_lossrent" id="sum_lossrent" value="0" onkeypress="return Numeric(event)" oninput=" return sum_lossrentfn(this);"/></td>
               </tr>
               

                <tr class="addon4">
                 <td><input type="checkbox" name="is_accommodation" id="is_accommodation" value="0"/></td>
                 <td>Insurance Of Additional Expenses of Rent For An Alternative Accommodation</td>
                 <td><input type="text" class="is_accommodation" name="sum_accommodation" id="sum_accommodation" value="0" onkeypress="return Numeric(event)" oninput=" return sum_lossrentfn(this);"/></td>
               </tr>


                <tr class="addon5">
                 <td><input type="checkbox" name="is_architect" id="is_architect" value="0" /></td>
                 <td>Architects, Surveyors and Consulting Engineers Fees ( in excess of 3% claim amount)</td>
                 <td><input type="text" class="is_architect" name="sum_architect" id="sum_architect" value="0" onkeypress="return Numeric(event)"/></td>
               </tr>

               <tr class="addon6">
                 <td><input type="checkbox" name="is_removedebris" id="is_removedebris" value="0" /></td>
                 <td>Removal of Debris (in excess of 1% claim amount)</td>
                 <td><input type="text" class="is_removedebris" name="sum_removedebris" id="sum_removedebris" value="0" onkeypress="return Numeric(event)"/></td>
               </tr>


               <tr class="addon7">
                 <td><input type="checkbox" name="is_spontcomb" id="is_spontcomb" value="0" /></td>
                 <td>Spontaneous Combustion</td>
                 <td><input type="text" class="is_spontcomb" name="sum_spontcomb" id="sum_spontcomb" value="0" onkeypress="return Numeric(event)"/></td>
               </tr>
         
                <tr class="addon8">
                 <td><input type="checkbox" name="is_startup" id="is_startup" value="0"/></td>
                 <td>Start up Expenses</td>
                 <td><input type="text" class="is_startup" name="sum_startup" id="sum_startup" value="0" onkeypress="return Numeric(event)" oninput=" return sum_lossrentfn(this);"/></td>
               </tr>

                <tr class="addon9">
                 <td><input type="checkbox" name="is_floater" id="is_floater" value="0" /></td>
                 <td>Floater Clause</td>
                 <td><input type="text" class="is_floater" name="sum_floater" id="sum_floater" value="0" onkeypress="return Numeric(event)"/></td>
               </tr>

               <tr class="addon10">
                 <td><input type="checkbox" name="is_impactdamage" id="is_impactdamage" value="0" /></td>
                 <td>Impact Damage due to Insured's own Rail/Road Vehicles, Fork lifts, Cranes, Stackers and the like and articles dropped therefrom.</td>
                 <td><input type="text" class="is_impactdamage" name="sum_impactdamage" id="sum_impactdamage" value="0" onkeypress="return Numeric(event)"/></td>
               </tr>

               
              </table>
                  <div class="col-md-12 mrg-btm">
             <!--   <input type="submit" value="Get Quote"  id="insurance"/> -->
               <button id="insurance">Get Quote</button>
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
        <div class="modal-body" id=occ_company>
          <ul></ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
 


 


<script type="text/javascript">
 var section_id='{{$section_id}}';
 var escalationval=0;
 var sum_omissionpublic=0;
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
           $("#occ_company ul").append('<li ><a href="#" class="occupied_id" style="font-size: 15px;">'+val.occupied +'</a> <input type="hidden" name="abc" class="accupied_id_name"  value='+val.occupied_id +'></li>');
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
         
            $("#risksdistrictid").val(ui.item.datavalue);       
             }
           }    
      });



// Block Level Add on Covers
// var sum_stfi=$('#sum_stfi').val();
// var sum_earthquake=$('#sum_earthquake').val();
// var sum_terrorism=$('#sum_terrorism').val();
// var sum_escalation=$('#sum_escalation').val();
// var sum_omission=$('#sum_omission').val();
// var sum_lossrent=$('#sum_lossrent').val();
// var sum_accommodation=$('#sum_accommodation').val();
// var sum_architect=$('#sum_architect').val();
// var sum_removedebris=$('#sum_removedebris').val();
// var sum_spontcomb=$('#sum_spontcomb').val();
// var sum_startup=$('#sum_startup').val();
// var sum_floater=$('#sum_floater').val();
// var sum_impactdamage=$('#sum_impactdamage').val();



      
      $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
            var totlacal=0;
            var percent=0;
            var totalper=0;
            
            var sum_building=parseFloat($('#sum_building').val());
            var sum_plith=parseFloat($('#sum_plith').val());
            var sum_plant=parseFloat($('#sum_plant').val());
            var sum_electric=parseFloat($('#sum_electric').val());
            var sum_fff=parseFloat($('#sum_fff').val());
            var sum_others=parseFloat($('#sum_others').val());
            var sum_stock=parseFloat($('#sum_stock').val());
                attr_id=$(this).attr('id');
                        $('#'+attr_id).val(1);
                        if(attr_id=='is_stfi'){
                        totlacal=sum_building+sum_plant+sum_electric+sum_fff+sum_others+sum_stock;
                        $('#sum_stfi').val(totlacal);
                        }else if(attr_id=='is_earthquake'){
                       totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff+sum_others+sum_stock;
                        $('#sum_earthquake').val(totlacal);
                        }else if(attr_id=='is_terrorism'){
                        totlacal=sum_building+sum_plant+sum_electric+sum_fff+sum_others+sum_stock;
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
                        $('#sum_lossrent').val(totlacal);
                        }else if(attr_id=='is_accommodation'){
                       totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff;
                        sum_omissionpublic=totlacal;
                        $('#sum_accommodation').val(totlacal);
                        }else if(attr_id=='is_architect'){
                        totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff;
                        totalper=(7.5*totlacal)/100;
                        $('#sum_architect').val(totalper);
                        }else if(attr_id=='is_removedebris'){
                        totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff;
                        totalper=(10*totlacal)/100;
                        $('#sum_removedebris').val(totlacal);
                        }else if(attr_id=='is_spontcomb'){
                        totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff+sum_others+sum_stock;
                        $('#sum_spontcomb').val(0);
                        }else if(attr_id=='is_startup'){
                         totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff;
                         sum_omissionpublic=totlacal;
                        $('#sum_startup').val(totlacal);
                        }else if(attr_id=='is_floater'){
                        totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff+sum_others+sum_stock;
                        $('#sum_floater').val(0);
                        }else if(attr_id=='is_impactdamage'){
                        totlacal=sum_building+sum_plith+sum_plant+sum_electric+sum_fff+sum_others+sum_stock;
                        $('#sum_impactdamage').val(totlacal);
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
    $('#occ').focus();
  })


 
var  percent1 =0;
var  otalper =0;
$('input[type="radio"]').click(function(){
percent1 = $('input[name=escalper]:checked').val();
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
        $.ajax({  
                type: "POST",  
                url: "{{URL::to('corporate')}}",
                data : $('#corporate_insurance').serialize(),
                success: function(msg){
                         var tablerows = new Array();
                         $.each(msg, function( index, value ) {  
                         tablerows.push('<tr><td>' + value.company_id + '</td><td>' + value.company_name + '</td><td>' + value.premium_amt + '</td><td>' + value.gst_amt + '</td><td>' + value.net_premium_amt +'</td></tr>');
        }); 

                      if(msg){
                            $('#premium_table').empty().append('<table class="table table-striped table-bordered"><tr class="text-capitalize"><td>Company ID</td><td>Comapny Name</td><td>Premium Amount</td><td>GST Amount</td><td>Net Premium Amount Rate</td></tr><tr>'+tablerows.join("")+'</tr></table>');
                         }else{
                            $('#premium_table').empty().append('No Result Found');
                         }          
    }  
    });

    }
});

</script>
@endsection

