@extends('includes.master')
@section('content')

<style>
/*  body {
   background:#ffffff url("images/bg.jpg") no-repeat;
 }*/
 .input1 {background:#fff !important; width:50% !important; padding:0px 10px !important;}
 .lbl {margin:8px;color:#666; font-weight:normal;}
 .premium-cal-btn {margin-left:38% !important;}
 .down-arr {position:absolute; right:0px; bottom:4px;padding:10px; padding-right:20px;color:#666;}
 .register select {padding:0px 10px;}
 .left-pad-none .col-md-6, .col-md-8 {padding-left:0px !important;}
 .center-nav {margin-left:40%;}
 h4 {font-weight:normal !important; font-size:16px;}
 .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {background-color:#fbfbfb;}
 .tab-content {background: #fbfbfb;border: 1px solid #ddd;border-top: 0px;padding: 20px;}
 .tbl-btm-mrg {margin-bottom:20px;}
 .bg-danger-bg {background: #ffecec !important;}
 .pad {padding:10px;}
 h3 {font-size:18px;}
 .heading-1 {width:30%; border-bottom:1px dashed #eee; font-weight:bold; margin:0 auto;padding:10px; margin-bottom:20px;}
 .p-text {font-weight:normal;}
 .mrg-tp {margin-top:25px;}
 .border-1 {border-bottom:5px solid #cccccc;}



 @media only screen and (max-width:786px) {
  .premium-cal-btn {margin-left:0px !important;}
  .register-full {width:100%;}
  .register-in {padding:1em 0em 1em 0em;}
  .table {width:380px;}
  .input1 {width:100% !important;}
  .block {display:block !important; width:100%;}
  .center-nav {margin-left:0%;}
  .heading-1 {width:100%;}
  .no-pad {padding:0px;}
}





.loader {
  background: url('http://smallenvelop.com/wp-content/uploads/2014/08/Preloader_21.gif') 50% 50% no-repeat rgb(249,249,249); 
}
</style>


<div class="container mrg-tp"">
  <div class="row form-group">
    <div class="col-xs-12">
      <ul class="nav nav-pills nav-justified thumbnail setup-panel">
        <li class="active"><a href="#step-1" id="step-1s">
          <h4 class="list-group-item-heading">Step 1</h4>
          <p class="list-group-item-text">Calculate Premium</p>
        </a></li>
        <li class="disabled"><a href="#step-2">
          <h4 class="list-group-item-heading">Step 2</h4>
          <p class="list-group-item-text">Sum Insured</p>
        </a></li>
        <li class="disabled"><a href="#step-3">
          <h4 class="list-group-item-heading">Step 3</h4>
          <p class="list-group-item-text">Default Covers</p>
        </a></li>
        <li class="disabled"><a href="#step-4">
          <h4 class="list-group-item-heading">Step 4</h4>
          <p class="list-group-item-text">Add-On Covers</p>
        </a></li>    
      </ul>
    </div>
  </div>
</div>  

<section  class="container">
  <div class="row setup-content" id="step-1">
    <div class="col-xs-12">
      <div class="col-md-12 well text-center">             
       <div class="container col-xs-12">
        <!-- Table 1 Start  -->           
        <h3 class="text-center heading-1 pad">Calculate Premium</h3> <br>





        <div class="table-responsive">    
          <form id="calculate_primium" name="calculate_primium" method="POST"  >  
            <table width="850" border="0" cellspacing="0" cellpadding="0" class="table table-striped  table-bordered text-right">
             <tr>
              <td class="text-right" width="45%"><label class="lbl">Customer Name*</label></td>
              <td width="50%"> <input type="text" class="form-control input1" name="customer_name" id="customer_name"   required /></td>
            </tr>
            <tr>
              <td class="text-right"><label class="lbl">Location  *</label></td>
              <td class="left-pad-none">
                <div class="col-md-6">

              <!--  <input type="hidden" name="stateid" id="stateid" value="">
              <input type="text"  class="form-control  search_state " placeholder="State" name="state" value="" id="state" required> -->
              <select class="form-control  search_state  loader"  name="stateid"    placeholder="Search State" id="search_state" required>  </select>

            </div>
            <div class="col-md-6">

              <!--  <input type="hidden" name="districtid" id="districtid"  >
              <input type="text" class="form-control  search_district"  placeholder="  District " name="district" id="district" required > --> 
              <select class="form-control  search_district "  name="districtid"    id="search_district" required>
               
              </select>
            </div>
          </td>
        </tr>

        <tr>
          <td ><label class="lbl">Industry</label></td>
          <td class="left-pad-none">
            <div class="col-md-8 left-pad-none">

             <select class="form-control" name="industry_id" id="industry_id" required>
              <option selected value="0"> Select </option>
              <option value="1">Medical And Paramedical Staff </option>
              <option value="2"> Other </option>

            </select>
          </div>
        </td>
      </tr>

      <tr>
        <td ><label class="lbl">Select Company</label></td>
        <td class="left-pad-none">
          <div class="col-md-8 left-pad-none">
            <select class="form-control" name="company_master" id="company_master" required>
              <option selected value="0"> select </option>
              @foreach($company_query as $val)

              <option value="{{$val->company_id}}"> {{$val->company_name}} </option>
              @endforeach
            </select>
          </div>
        </td>
      </tr>



      <tr>
        <td>Family Defination*</td>
        <td><div class="pull-left"><input type="checkbox"  id="chkself" /> Self &nbsp; <input type="checkbox" id="chkspouse"/> Spouse &nbsp; <input type="checkbox" id="chkchild" /> Children &nbsp; <input type="checkbox" id="chkparents"  /> Parents  </div></td>

      </tr>

      <tr>
        <td>No. of Employees*</td>
        <td><input type="text" id="NoEmp" class="form-control input1" disabled="true" /></td>
      </tr>

      <tr>
        <td>No. of Spouse*</td>
        <td><input type="text" id="Spouse" class="form-control input1" disabled="true"  /></td>
      </tr>

      <tr>
        <td>No. of Children*</td>
        <td><input type="text" id="Child" class="form-control input1"  disabled="true" /></td>
      </tr>


      <tr>
        <td>No. of Parents*</td>
        <td><input type="text" id="Parents"class="form-control input1" disabled="true"  /></td>
      </tr>


      <tr>
        <td>Total Lives</td>
        <td><span class="small" style="display: -webkit-box;"> (Max. Limit For No. of Lives-500)</span>
          <input type="text" id="Totallives" class="form-control input1" readonly/>
        </td>
      </tr>









    </table>
  </form> 





</div>
<!-- Table 1 End  --> 
</div>  
<button id="calc_primium" class="btn btn-primary btn-md" >Submit</button>
<!-- <button id="activate-step-2" class="btn btn-primary btn-md" style="display: none">Activate Step 2</button> -->
</div>
</div>
</div>
</section>






<div class="container" > 
  <div class="row setup-content" id="step-2"   >
    <div class="col-xs-12">
      <div class="col-md-12 well text-center">
       <h3 class="text-center heading-1 pad">Sum Insured</h3>
       <ul class="nav nav-tabs graded">
        <li class="active center-nav"><a data-toggle="tab" href="#home" id="flat">Flat</a></li>
        <li><a data-toggle="tab" href="#menu1" id="graded">Graded</a></li>
        <li><a data-toggle="tab" href="#excel_id" id="excel_id"> Upload GHI sheet here </a></li> 
      </ul>
      <div class="tab-content"> <p class="text-center" id="company_name_append"><b > </b></p>
       <div class="table-responsive">
         <form id="sum_insured_form" name="sum_insured_form" method="POST">
          <table id="append_id" class="table table-hover table-condensed table-striped table-bordered  sum_insured_display">
            <thead><tr></tr></thead>
            <tbody id="table0"></tbody>
            <tbody id="table1"></tbody>
          </table>
        </form>
        <div class="show_hide">
          <a id="add_row_graded" class="btn btn-success pull-left ">Add Row</a><a id='delete_row_graded' class="btn btn-danger pull-right">Delete Row</a>
        </div>




        <div id="xl_hidden_id" style="display:none">
          <form id="ecelsum_insured_form" name="ecelsum_insured_form" method="POST">
           <table id="xl_data_table" class="table table-hover table-condensed table-striped table-bordered hidden">
             <!--  <thead><th>Grade</th><th>Sum Insured</th><th>Type</th><th>Age-band</th><th>count</th></thead> --> 
             <thead id="append_table_xlhead"></thead>
             <tbody id="append_table_xl"></tbody>        
           </table>
         </form>


         <td class="left-pad-none">
          <div class="col-md-6">
           <input type="file"  class="form-control"   name="excel"  id="excel" required>
         </div>
         <div class="col-md-6">
          <a type="submit" id="ghi_xl_submit" class="btn btn-info btn-md pull-left">upload</a>
        </div>
      </td>




      <td class="left-pad-none">
        <div class="col-md-6">
          <a download="sample_ghi_xl.xls" href="{{URL::to('ghi_Insured/sample_ghi_xl.xls')}}" class="btn btn-info active pull-left">Download Sample Format</a>
        </div>

      </td>


    </div>




  </div>
</div>
<button id="sum_insured_id" class="btn btn-primary btn-md" >Submit</button>
</div>
</div>



</div>
</div>









<form class="container" id="default_covers_form" name="default_covers_form" method="POST"> 
  <div class="row setup-content" id="step-3">
    <div class="col-xs-12">
      <div class="col-md-12 well text-center">
        <h1 class="text-center">Default Covers</h1>
        <!--<form></form> --> <div class="table-responsive">
        <table   border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped">
          <tr>
            <th scope="col" width="40%">Room Rent</th>
            <th scope="col">
              <div class="col-md-6">NORMAL 
               <select class="form-control" name="dc_normal">
                 <option>1% of Sum Insured</option>
               </select> 
             </div>
             <div class="col-md-6"> ICU
              <select class="form-control" name="dc_icu">
                <option>2% of Sum Insured</option>
              </select>
            </div>  
            <p class="small p-text">"If Insured is admitted in a higher category. then insured will bear difference of all medical 
             expenses as in final hospital bill in same proporation."</p>
           </th>
         </tr>
         <tr>
          <td>Disease - Wise Sub Limits</td>
          <td><input type="radio" name="sub_limit" value="1" /> Lower Limits 
            <input type="radio" name="sub_limit" value="2" /> Standard 
            <input type="radio" name="sub_limit" value="3" />   Higher Limits
            <input type="radio" name="sub_limit" value="4" />  No Sub Limits</td>
          </tr>
          <tr>
            <td>Pre - Post Hospitalization cover</td>
            <td>
              <div class="col-md-4">
                <select class="form-control" name="hospital_cover">
                 <option>30-60</option>
               </select> 
             </div>  Day Respectively
           </td>
         </tr>
         <tr>
          <td>3 Day Wait Period Waiver</td>
          <td><input type="radio" name="period_waiver" value="1" /> Applicable
           <input type="radio" name="period_waiver" value="2" /> Waive off</td>
         </tr>
         <tr>
          <td>Premium for Addition / Deletion of Lives</td>
          <td><input type="radio" name="primium_for"/> Short Period Scale 
            <input type="radio" name="primium_for"/> Pro Rata Basis</td>
          </tr>
          <tr>
            <td>Ambulance Charges</td>
            <td><span class="pull-left">Rs.</span> <div class="col-md-6">
              <input type="text" class="form-control" name="ambulance_charge" id="ambulance_charge" required="" /></div></td>
            </tr>
          </table>
        </div> 
        
        <button id="default_covers_id" class="btn btn-primary btn-md">Submit</button>
        <!--    <button id="activate-step-4" class="btn btn-primary btn-md">Activate Step 4</button> -->
      </div>
    </div>
  </div>
</form>
<!-- Table 3 End  -->             


<!-- Table  4  -->    
<form class="container" id="add_on_covers_form" name="add_on_covers_form" method="POST"> 
  <div class="row setup-content" id="step-4">
    <div class="col-xs-12">
      <div class="col-md-12 well text-center">
        <h1 class="text-center">Add-On Covers</h1><!--<form></form> --> 

        <div class="table-responsive">

          <table   border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped">
           <tr>
             <td colspan="2"><input type="radio" name="exisiting_disease"   /> Pre-exisiting Disease</td>

           </tr>

           <tr>
            <th scope="col" width="40%">Maternity</th>
            <th scope="col">
              <div class="col-md-6">
                <span><input type="radio" name="maternity"  /> 9  Months waiting period</span>
                <span class="small">Normal and C Section Limits (Metro)</span>
                <select class="form-control" name="selection_limit">
                 <option>1% of Sum Insured</option>
               </select> 
             </div>


             <div class="col-md-6">
              <span><input type="radio" name="maternity_form_day"/> Maternity form Day 1</span>
              <span class="small">Maternity normal and C Section Limits (Non-Metro)</span>
              <select class="form-control" name="maternity_non">
                <option>2% of Sum Insured</option>
              </select>
            </div>  
            
          </th>
        </tr>

        <tr>
          <td><input type="radio" name="baby_day_cover"/> Baby Day One Cover</td>
          <td><input type="radio" name="upto_maternity"/> Upto maternity Limit 
           <input type="radio" name="upto_maternity"/> Upto the Family Sum Insured 
         </td>
       </tr>

       <tr>
        <td><input type="radio"   name="post_natal_care" /> Pre and Post Natal Care <span class="small">(max allowed limit R5 5000)</span></td>
        <td><input type="radio" name="maternity_limit"/> Wthin Maternity Limit 
         <input type="radio" name="maternity_limit"/>Above Maternity Limit
       </td>
     </tr>
     

     <tr>
      <td><input type="radio"  name="co_payment"   /> Co-Payment</td>
      <td><select class="form-control"  name="co_payment_nill">
       <option>Nill</option>
     </select>
   </td>
 </tr>

 <tr>
  <td><input type="radio" name="parental_co_payment"   />Parental Co-payment</td>
  <td><select class="form-control" name="parental_co_payment_nill">
   <option>Nill</option>
 </select>
</td>
</tr>

<tr>
  <td><input type="radio" name="corporate_floater"/> Corporate Floater  </td>
  <td><span class="small"> Corporate Floater limit Overall</span> <input type="text" name="corporate_floater_limit"/>   </td>
</tr>

<tr>
 <td colspan="2"><input type="radio" name="ppn_onlye"/> Discount for treatment in PPN only </td>

</tr>




<tr>
  <td><input type="radio" name="opd_expenses"/> OPD Expenses </td>
  <td><input type="radio" name="amount_expenses"/>  Amount Per Life
   <input type="radio" name="amount_expenses"/> Amount Per Famili <br>
   (RS)<input type="input" name="amount_per_famili"  id="amount_per_famili"  required="" /> 
 </td>
</tr>

<tr>
  <td><input type="radio" name="addition_loading"/>Additional Loading  </td>
  <td> 
    <input type="input" name="addition_loading_per"/> %
  </td>
</tr>

<tr>
 <td colspan="2"><input type="radio" name="id_card"/> ID Cards  </td>
</tr>

<tr>
  <td>Services Rendered in jammu & Kashmir  </td>
  <td> <input type="radio" name="service_rendered"/> Yes
   <input type="radio" name="service_rendered"/> NO <br>
   
 </td>
</tr>

</table>
</div>           <button id="add_on_covers_id" class="btn btn-primary btn-md">submit</button>       
</div>
</div>
</div>
</form>


<script type="text/javascript">  // check nan value
  var excel_id_ghi=0;
  function nancheck(rows) {
    rows=parseInt(rows);
    return a= isNaN(rows)==true ? 0 : rows;}
  </script>

<script type="text/javascript">// Activate Next Step
  $(document).ready(function() {
    var navListItems = $('ul.setup-panel li a'),
    allWells = $('.setup-content');
    allWells.hide();
    navListItems.click(function(e){e.preventDefault();
      var $target = $($(this).attr('href')),
      $item = $(this).closest('li');
      if (!$item.hasClass('disabled')) {
        navListItems.closest('li').removeClass('active');
        $item.addClass('active');allWells.hide();$target.show();
      }}); $('ul.setup-panel li.active a').trigger('click');});
    </script>

    <script type="text/javascript"> // Get State value
      $(document).ready(function(){
       var  st_array=Array('<option  value="0">Select</option>');
       $.ajax({
        url: "{{ route('searchstateajax') }}",
        dataType: "json",
        data: { },
        success: function(data) {
          $(".search_state").removeClass('loader');
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
      $(document).on('change', '#search_state', function() {      // Get city Value
       var fstate_id=$(this).val();  
       var  city_array=Array('<option value="0">Select City</option>');  
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
   </script>

   <script>

    var flag=0;
    var industry_id=0;
    $(document).on("change", "#industry_id",function(){
      industry_id=$(this).val();
    });


    $(document).ready(function(){   // Family Defination functionality
      Control_Enable_Disable();
      Calculate_Amount();
      $(".calc").keyup(function(){
        var total=0;
        $(this).closest('tr').find('input[type="text"]').each(function(){
          total= total+ parseInt($(this).val()==""?0:$(this).val());        
        });   
        $(this).closest('tr').find("td:eq(12)").text(total);
      });
      $("#cloneButton1").click(function(){
        $(this).closest('tr').prev().prev().clone().appendTo("#divid");
      });
    });
    function Calculate_Amount(){
     $("#NoEmp").keyup(function(){onCal_Check();}); 
     $("#Spouse").keyup(function(){onCal_Check(); }); 
     $("#Child").keyup(function(){onCal_Check();}); 
     $("#Parents").keyup(function(){onCal_Check();});}
     function onCal_Check(){
       var total=0;
       var em = $("#NoEmp").val() ==""?0:$("#NoEmp").val();
       var sp = $("#Spouse").val()==""?0:$("#Spouse").val();
       var cl = $("#Child").val()==""?0:$("#Child").val();
       var pt = $("#Parents").val()==""?0:$("#Parents").val();
       total = total + (parseInt(em)+ parseInt(sp)+ parseInt(cl)+parseInt(pt)); 
       if($('#Totallives').val()<=500){
         $("#Totallives").val(total);
       }else{
         alert("Max. Limit For No. of Lives-500..");
         $("#Totallives").val(total);
       }}
       function Control_Enable_Disable(){
        $("#NoEmp").closest('tr').hide();
        $("#Spouse").closest('tr').hide();
        $("#Child").closest('tr').hide();
        $("#Parents").closest('tr').hide();
        $("#chkself").change(function(){
          TotalHide(this,"NoEmp");
        });
        $("#chkspouse").change(function(){
          TotalHide(this,"Spouse");
        });
        $("#chkchild").change(function(){
          TotalHide(this,"Child");
        });
        $("#chkparents").change(function(){
          TotalHide(this,"Parents");
        });
      }
      function TotalHide(chk,txt){
        if($(chk).is(':checked')){
          $("#"+txt+"").closest('tr').show();
          $("#"+txt+"").removeAttr('disabled');
        }else{
          $("#"+txt+"").closest('tr').hide();
          $("#"+txt+"").val(0);
          onCal_Check();
        }
      }
    </script>

  <script type="text/javascript">        //   Calculate Premium  Validate Form     
   $('#calc_primium').click(function(e){ e.preventDefault();      
     validator=$('#calculate_primium').validate();
     if(! $('#calculate_primium').valid()){
          // validator.errorList[0].element.focus();
          $.each(validator.errorMap, function (index, value,arg) {
         // console.log('Id: ' + index + ' Message: ' + value);
         $('#'+index).focus();
         return false;
       });
          if($('#search_state option:selected').val()=='0' ){$('#search_state').focus();}
          if($('#search_district option:selected').val()=='0'){ $('#search_district').focus(); }
          if($('#industry_id option:selected').val()=='0'){ $('#industry_id').focus(); }
          if($('#company_master option:selected').val()=='0'){ $('#company_master').focus(); }
          
          return false;
        }else{
          if(industry_id!=1){
            if($('#Totallives').val()!=0 ){    
              if($('#Totallives').val()<=500){
                $('ul.setup-panel li:eq(1)').removeClass('disabled');
                $('ul.setup-panel li a[href="#step-2"]').trigger('click');
              }else{ alert("Max. Limit For No. of Lives-500..");}
            }else{ alert("Please Select Family Defination..");
          }
        }else{
          alert(" You can not create quote for Medical And Paramedical Staff .. ");
        }
      }
    }); </script>

   <script type="text/javascript">
    var flat_graded=0;
    var addflat=0;
    var addgraded=0;
    $(".graded li").click(function() {
      var h= $("a",this).attr('href');
      if(h=='#home'){
       flat_graded=0;
     }else if(h=='#menu1'){
      flat_graded=1;
    }else{
     flat_graded=0;
   }    
 });
    $('#activate-step-2').show();






    var head=0,footer=0;
    var append_data;
    var appending_data;
    var append_data_multi=0;
    /* { single data apppend */
      $(document).ready(function () { 
        $('#company_master').click(function(e){ e.preventDefault();
         var array_append_th=Array();
         var array_append_td1=Array();
         var array_append_td2=Array();
         var array_append_td3=Array();
         var slab=Array();


         $.ajax({
          url: "{{url('sum-insured-graded')}}",
          type: "GET",  
          dataType: "json",
          data: {
            company_id : $('#company_master').val(),
          },
          success: function(data) {
           append_data_multi=data;
     // appending_data=data;
     $('#company_name_append').empty();  
     $('#company_name_append').append(data.company_name.company_name);
     $('#append_id thead tr').empty();
     $('#table0').empty();

     $.each(data.query_slab, function( i, value ) { 
       slab.push('<option>'+value+'</option>');
     });
     var inc_appned=0;
     $.each(data.age_bands, function( i, value ) { 
      append_data=(value.split('-') );
      array_append_th.push('<th>'+value+'</th>');
      array_append_td1.push('<td><input type="text" name="employee0[]" value="0"  onkeypress="return Numeric(event);" ></td>');
      array_append_td2.push('<td><input type="text" name="non_parental0[]"  value="0" onkeypress="return Numeric(event);" ></td>');
      array_append_td3.push('<td><input type="text" name="parental0[]"  value="0" onkeypress="return Numeric(event);" ></td>');
      inc_appned++; });

     head='<th>Grade</th><th>Sum Insured</th> <th>Employee</th> '+array_append_th+'<th>Total</th>';
     footer=' <tr><td><input type="text" name="" id="m_grade" /></td><td><select ><option>Select</option>'+slab+'</select></td><td>Employee</td>'+array_append_td1+'<td><input type="text"  readonly  name="etotal" id="etotal" /></td></tr><tr><td></td><td></td><td>Non Parental Dependants</td>'+array_append_td2+'<td><input type="text"  readonly  name="ntotal" id="ntotal" /></td></tr><tr><td></td><td></td><td>Parental Dependants</td>'+array_append_td3+'<td><input type="text"  readonly  name="dtotal" id="dtotal" /></td></tr>  <input type="hidden" value="1" name="conut"';

     $('#append_id thead tr').append(head);
     $('#table0').append(footer);
           }
         });
       }); 
      }); 
      /* }   single data apppend end */



      $('.show_hide').hide(); 
 // in textbox field  total add
 $(document).on("input", "#append_id input",function(){
  var $tr = $(this).closest('tr'); 
  Sum_Insured_Table_other($tr);
}).trigger('input'); 
 function Sum_Insured_Table_other($tr){
   var tot = 0;  
   $('input', $tr).each(function(index,c) { 
    if($(this).attr('id')=="m_grade"){
    }else{
      tot += Number(nancheck($(this).val())) || 0; 
    }$('td:last', $tr).text(tot); }); }


var i=1;  //add and remove function
/* {    append multi textbox*/
  $("#add_row_graded").click(function(){
   array_append_td1=Array(),array_append_td2=Array(),array_append_td3=Array(),slab=Array();
   var data=append_data_multi;
   $.each(data.query_slab, function( k, value ) { 
     slab.push('<option>'+value+'</option>');
   });
   $.each(data.age_bands, function( l, value ) { 
    array_append_td1.push('<td><input type="text" name="employee'+i+'[]" value="0"  onkeypress="return Numeric(event);" ></td>');
    array_append_td2.push('<td><input type="text" name="non_parental'+i+'[]"  value="0" onkeypress="return Numeric(event);" ></td>');
    array_append_td3.push('<td><input type="text" name="parental'+i+'[]"  value="0" onkeypress="return Numeric(event);" ></td>');
  });
   footer1=' <tr><td><input type="text" name="" id="m_grade" /></td><td><select ><option>Select</option>'+slab+'</select></td><td>Employee</td>'+array_append_td1+'<td><input type="text"  readonly  name="etotal" id="etotal" /></td></tr><tr><td></td><td></td><td>Non Parental Dependants</td>'+array_append_td2+'<td><input type="text"  readonly  name="ntotal" id="ntotal" /></td></tr><tr><td></td><td></td><td>Parental Dependants</td>'+array_append_td3+'<td><input type="text"  readonly  name="dtotal" id="dtotal" /></td></tr> <input type="hidden" value="'+i+'" name="conut" ';

   $("#table"+(i)).html(footer1);
   $('#append_id').append('<tbody id="table'+(i+1)+'"></tbody>'); 
   i++; });
  $("#delete_row_graded").click(function(){
   if(i>1){
     $("#table"+(i-1)).html('');
     i--;
   }
 });
/*
}
*/





// *     Select Tabs
//***
$('#flat').click(function(){  $('.show_hide').hide();    $('#xl_hidden_id').hide();    $('.sum_insured_display').show();
  for (l=1;l<i;i--) {$("#table"+(i-1)).html('');
    excel_id_ghi=0;}flag=0;});
$('#graded').click(function(){  $('.show_hide').show();  $('#xl_hidden_id').hide(); $('.sum_insured_display').show(); 
 excel_id_ghi=0;flag=1;});
$('#excel_id').click(function(){  $('.sum_insured_display').hide();  $('#xl_hidden_id').show();  $('.show_hide').hide(); 
  excel_id_ghi=0;flag=2;});
// *     Get Total excel value   Sum Insured
//***
  var serializevlue=0;
$(function(){ 
  $('#sum_insured_id').click(function(e){ e.preventDefault();
    var total_value=0;
    $("table#append_id tr").each(function( i ) {
      $("td:last", this).each(function( j ) {
        total_value+=Number(nancheck($(this).text()));
      });  }); 
  
    if( (flag==0 || flag==1)  && ($('#Totallives').val()==total_value) ){
      alert($('#Totallives').val());
      serializevlue=$('#sum_insured_form').serializeArray();
        $('ul.setup-panel li:eq(2)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-3"]').trigger('click');
    }else if( (flag==2)  && ($('#Totallives').val()==excel_id_ghi)){
      serializevlue=$('#ecelsum_insured_form').serializeArray();
        $('ul.setup-panel li:eq(2)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-3"]').trigger('click');
    }else{
      alert(" Add Total Lives");
    }
 }); 
});

//   get excel data 
var inisialbarnd=0;
var ghi_xl_data;
$('#ghi_xl_submit').click(function(e){  
  //console.log(appending_data);return;
  e.preventDefault();
  $('#xl_error').addClass('hidden');
  if(! $('#excel').val())return false;
  var file = $('#excel');
  var formData = new FormData();
  if(file!=0){
    formData.append('file', file[0].files[0]); 
    $.ajax({
      url:"{{URL::to('upload-ghi-xl')}}",
      method: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
      data: formData,
      success: function (message) {

          //console.log(message);return;
          $('#xl_data_table').removeClass("hidden");
          $('#append_table_xl').empty();
          $('#append_table_xlhead').empty();
          last_grade="";
          last_sum=0;
          excel_id_ghi=0;

          var insured_loop=0;
          var  arr0=Array();
          var  arr1=Array();
          var  arr2=Array();
          var grade =Array();
          inisialbarnd=message.age_bands;
          $.each(message.data,function(i,value){
           catg=i.split("_");
           $.each(value,function(k,v){
            if('Employee'==k.split("_")[0]){
             arr0.push(k.split("_")[1]+","+v);
           }else if('Non-parental'==k.split("_")[0]){
             arr1.push(k.split("_")[1]+","+v);
           }else if('Parental'==k.split("_")[0]){
            arr2.push(k.split("_")[1]+","+v);
          }

        });

           var tra='<td><label>Employee</label></td>'+adds0(arr0.sort(),'employee'+insured_loop)+'<tr><td></td><td></td> <td><label>Non-parental</label> </td>'+adds0(arr1.sort(),'non_parental'+insured_loop)+'</tr> <tr><td></td><td></td> <td><label>parental</label></td>'+adds0(arr2.sort(),'parental'+insured_loop)+' </tr> ';
           grade.push('<tr><td> <label>'+catg[0]+'</label></td><td><input type="text" value="'+catg[1]+'"/></td>'+tra+'</tr>');
           arr0=Array();
           arr1=Array();
           arr2=Array();
           insured_loop++;
         });


          var arrayheadtr=Array();
          $.each(inisialbarnd,function(k,v){
            arrayheadtr.push('<td>'+v+'</td>');
          })
          $('#append_table_xlhead').append('<tr><td>Grade</td><td>Sum Insured</td> <td>Employee</td> '+arrayheadtr+'</tr> <input type="hidden" value="'+insured_loop+'" name="conut"');
          $('#append_table_xl').append(grade);
        },
        error :function(error){
          console.log("error \n");
          console.log(error);
        }
      });
  }else{
    alert("Please fill the form carefully ...");
  } 
});


function adds0(va,name){   // Append excel  data
 var ar0=Array();
 for(i=0,j=0;i<inisialbarnd.length;i++){
  if(va[j]!=null && va[j]!="" && va[j]!='undefined'){
    if(inisialbarnd[i]==va[j].split(",")[0]){
      excel_id_ghi+=parseInt(va[j].split(',')[1]);
     ar0.push('<td><input type="text" name="'+name+'[]" value="'+va[j].split(',')[1]+'"/ ></td>');j++;
   }else{
    ar0.push('<td><input type="text" name="'+name+'[]" value="0"/ ></td>');
  }
}else{
 ar0.push('<td><input type="text" name="'+name+'[]"  value="0"/ ></td>');
}
}return ar0;}

$(document).on('click','#default_covers_id',function(e){ e.preventDefault();  // Validate Default Covers
  validator=$('#default_covers_form').validate();
  if(! $('#default_covers_form').valid()){
    $.each(validator.errorMap, function (index, value,arg) {
     $('#'+index).focus();
     return false;
   });
  }else{
    $('#default_covers_form').serialize();
    $('ul.setup-panel li:eq(3)').removeClass('disabled');
    $('ul.setup-panel li a[href="#step-4"]').trigger('click');
  }
});


$(document).on('click','#add_on_covers_id',function(e){ e.preventDefault();  // Validate  Add -On Covers
  validator=$('#add_on_covers_form').validate();
  if(! $('#add_on_covers_form').valid()){
    $.each(validator.errorMap, function (index, value,arg) {
     $('#'+index).focus();
     return false;
   });
  }else{
    $('#add_on_covers_form').serialize();

      

      if(serializevlue!=0){
         $.ajax({
        url: "{{url('excel-quotes-add')}}",
        dataType: "json",
        method:'POST',
        headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
        data:serializevlue,
        success: function(data) {

        }
      });
    }


  }
});
</script>

<!--  -->

@endsection