@extends('includes.master')
@section('content')
<div class="row">
  <div class="col-md-12">
  <br>
  <h3 class="head-3">{{$query->section_name}} </h3>
  <div class="padding-80 box-shadow bg-success ">
  <form action="{{url('customer-details')}}" method="post" enctype="multipart/form-data">
   {{ csrf_field() }}
     <input type="hidden" name="section_id" value="{{$query->section_id}}">
     <input type="hidden" name="pro_id" value="{{$pro_id}}">
     
     <table class="table table-striped table-bordered col-md-8">
   <tr>
      <td><b>Transaction Type</b></td>
     <td><input type="radio" name="business_type" checked value="0"  id="business_type_mar1"/> Fresh Proposal</td>
     <td><input type="radio" name="business_type" value="1"  id="business_type_mar2" /> Renewal Policy</td>
     <td><input type="radio" name="business_type" value="2"  id="business_type_mar3"/> Market Renewal</td>
   </tr>
   <tr>
       <td><b>Action</b></td>
     <td><input type="radio" value="0" name="frshcash" checked/> Start Fresh case</td>
     <td><input type="radio" value="1" name="frshcash" /> Copy From Save Template</td>
     <td></td>
   </tr>


   <tr>
       <td><b>Customer</b></td>
     <td><input type="radio" name="newcustomer" value="0" checked/>New Customer </td>
     <td><input type="radio" name="newcustomer" value="1" />Existing Customer</td>
      <td></td>
   </tr> 

 
    <tr style="display: none" class="policy_in">
       <td><b>Policy Period </b></td> 
     <td>From<input type="text" name="period_from" id="period_from" value=" " class="lastReporteddate_from" required/> </td>
     <td>To<input type="text" name="period_to"  id="period_to" value=" " class="lastReporteddate" required/></td>
     <td></td>
   </tr>

    <tr style="display: none" class="policy_in">
       <td><b>Current Insurer </b></td>
     <td ><input type="text" placeholder="Select Insurer" value=" " class="newsletter-name  current_insurer_company" name="current_insurer" value=" " id="current_insurer" required /> <input type="hidden" name="current_insurer_id" id="current_insurer_id" value="0"> </td>
    <td></td>
     <td></td>
   </tr> 
   </table>

<br>
 <h4 class="col-md-12"><span class="text-sucsess">Policy Upload</span></h4>
    <div class="form-group" id="tab_logic">
      <label for="policy_copy">Policy Copy:</label>
     <div id='addr0'>  <input    type="file" class="form-control" name="policy_copy[]" id="policy_copy"  ></div>
     <div id='addr1'></div>
      
    </div>
     <a id="add_row" class="btn btn-success pull-left">Add Row</a><a id='delete_row' class="btn btn-danger pull-right">Delete Row</a>
    <br><br><br><br>

    <div class="form-group">
      <label for="visiting_card">Visiting card:</label>
      <input type="file" class="form-control" name="visiting_card" >
    </div>
    
     <div class="form-group">
      <label for="mandate">Mandate letter copy:</label>
      <input type="file" class="form-control" name="mandate" >
    </div>
 
   <div class="form-group">
      <label for="inspection_report">Inspection report :</label>
      <input type="file" class="form-control"  name="inspection_report">

    </div>
 
 
               
           <button class="btn btn-primary">Continue</button>
    </form>
   </div>
  </div>
</div>


 
<script type="text/javascript">
$(document).ready(function(){

    var start = new Date();
    start.setFullYear(start.getFullYear() - 70);
    var end = new Date();
    end.setFullYear(end.getFullYear() - 10);
 $(".lastReporteddate_from").datepicker({ dateFormat: "dd-mm-yy",
        changeMonth: true,
        changeYear: true,
         onSelect: function(dateStr) {

             $("#hidden_id").show();

        var ddd = $.datepicker.parseDate('dd-mm-yy', dateStr);
        var years =1;
        ddd.setDate(ddd.getDate()-1); 
        ddd.setFullYear(ddd.getFullYear() + years);

        $('.lastReporteddate').datepicker('setDate', ddd);
      }
  });
$(".lastReporteddate").datepicker({
    dateFormat: 'dd-mm-yy'
});

// auto complete
    $(".current_insurer_company").autocomplete({ 
      source: function(request, response) {
        
        $.ajax({
          url: "{{route('insurercompany') }}",
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
            $('#current_insurer_id').val(0);
        }else{
 
           $('#current_insurer_id').val(ui.item.company_id);

            }
           }
      });
   });

$('#business_type_mar3').click(function(){
    $("#period_from").removeAttr("value");
    $("#period_to").removeAttr("value");
    $("#current_insurer").removeAttr("value");
    
    $('.policy_in').show();
});
$('#business_type_mar2').click(function(){

     $("#period_from").val(' ');
     $("#period_to").val(' ');
     $("#current_insurer").val(' ');

   $('.policy_in').hide();
});
$('#business_type_mar1').click(function(){
       $("#period_from").val(' ');
     $("#period_to").val(' ');
     $("#current_insurer").val(' ');
   $('.policy_in').hide();
});








     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){

       if(i<=10){
      $('#addr'+i).html('<input    type="file" class="form-control" name="policy_copy[]" id="policy_copy"  >');

      $('#tab_logic').append('<div id="addr'+(i+1)+'"></div>');
      i++; 
    }else{
       alert("max size 10 only");
    }
  });
     $("#delete_row").click(function(){
       if(i>1){
     $("#addr"+(i-1)).html('');
     i--;
     }
   });

});
</script>
@endsection

