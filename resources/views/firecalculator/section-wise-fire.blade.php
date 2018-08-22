@extends('includes.master')
@section('content')




<div class="row">
  <div class="col-md-12">
    <br>
    <h3 class="head-3">Standard Fire and Special Perils (SFSP)</h3>
    <div class="padding-80 box-shadow bg-success ">
      <form action="{{url('customer-details')}}" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}
       <input type="hidden" name="section_id" value="0">
       <input type="hidden" name="pro_id" value="1">
       
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
         <td ><!-- <input type="text" placeholder="Select Insurer" value=" " class="newsletter-name  current_insurer_company" name="current_insurer" value=" " id="current_insurer" required /> <input type="hidden" name="current_insurer_id" id="current_insurer_id" value="0"> --> 
         <select name="current_insurer_id" id="current_insurer_id">

           
         </select>
          </td>
         <td></td>
         <td></td>
       </tr> 
     </table>.




     <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">
          <h4 class="panel-title">
            <a class="accordion-toggle">Policy Copy</a><i class="indicator glyphicon glyphicon-chevron-down pull-right"></i>
          </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse ">
          <div class="panel-body">
           <label class="radio-inline"><input type="radio" name="policy_type"  class="policy_type" checked value="1">Upload Policy</label> 
           &nbsp;&nbsp;&nbsp;&nbsp;<strong>OR</strong>  &nbsp;&nbsp;&nbsp;
           <label class="radio-inline"><input type="radio" name="policy_type" class="policy_type" value="2">Select Lead</label>
           <br> <br>
           <div  id="policy__ID">
            <div class="form-group" id="tab_logic">
              <div id='addr0'>  <input    type="file" class="filestyle btn btn-info" data-placeholder="No file" name="policy_copy[]" id="policy_copy"  ></div>
              <div id='addr1'></div>
            </div>
            <a id="add_row" class="btn btn-success pull-left btn-xs">Add Row</a><a id='delete_row' class="btn btn-danger pull-right btn-xs">Delete Row</a>
            <br><br><br><br>
          </div>
          <div  id="lead_id" style="display: none">
           <select class="form-control" name="lead_id" style="width:300px">
            <option selected value="">Select Lead</option>
            @foreach($lead_query as $lead_id)
            <option value="{{$lead_id->lead_id}}">{{$lead_id->lead_id}} - {{$lead_id->client_name}} </option>
            @endforeach 
          </select>
        </div>
      </div>
    </div>
  </div>


  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapse2">
      <h4 class="panel-title">
        <a class="accordion-toggle">Visiting card</a><i class="indicator glyphicon glyphicon-chevron-down pull-right"></i>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse ">
      <div class="panel-body">
        <fieldset>
         <div  id="visiting__ID">
          <div class="form-group" id="visiting_tab">
            <div id='vaddr0'>  <input    type="file" class="filestyle btn btn-info" data-placeholder="No file"  name="visiting[]" id="visiting"  ></div>
            <div id='vaddr1'></div>
          </div>
          <a id="vadd_row" class="btn btn-success pull-left btn-xs">Add Row</a><a id='vdelete_row' class="btn btn-danger pull-right btn-xs">Delete Row</a>
          <br><br><br><br>
        </div>
      </fieldset>
    </div>
  </div>
</div>


<div class="panel panel-default">
  <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapse3">
    <h4 class="panel-title">
      <a class="accordion-toggle">Mandate letter copy</a><i class="indicator glyphicon glyphicon-chevron-down pull-right"></i>
    </h4>
  </div>
  <div id="collapse3" class="panel-collapse collapse ">
    <div class="panel-body">
      <fieldset>
        <input type="file"  class="filestyle btn btn-info" data-placeholder="No file" name="mandate" >
      </fieldset>
    </div>
  </div>
</div>


<div class="panel panel-default">
  <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapse4">
    <h4 class="panel-title">
      <a class="accordion-toggle">Inspection report:</a><i class="indicator glyphicon glyphicon-chevron-down pull-right"></i>
    </h4>
  </div>
  <div id="collapse4" class="panel-collapse collapse ">
    <div class="panel-body">
      <fieldset>
        <input type="file" class="filestyle btn btn-info" data-placeholder="No file" name="inspection_report">
      </fieldset>
    </div>
  </div>
</div>


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
// $(".current_insurer_company").autocomplete({ 
//   source: function(request, response) {

//     $.ajax({
//       url: "{{route('insurercompany') }}",
//       dataType: "json",
//       data: {
//         term : request.term
//       },
//       success: function(data) {
//         response(data);
        
//       }
//     });
//   },
//   change: function (event, ui) {
//     if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
//       $('#current_insurer_id').val(0);
//     }else{

//      $('#current_insurer_id').val(ui.item.company_id);

//    }
//  }
// });

$.ajax({
         type:"get",
         url:"get-company-details",
         success:function(data){
              arr=Array('<option selected value="0">Select Current Insurer</option>');

              $('#current_insurer_id').empty();
              $.each(data,function(index,val){
                 arr.push('<option value="'+val.company_id+'">'+val.company_name+'</option');
              });
              $('#current_insurer_id').append(arr);
               


         }
   })



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


  $('.policy_type').click(function(){
   if($(this).val()==1){
     $('#policy__ID').show();
     $('#lead_id').hide();
   }else{
     $('#policy__ID').hide();
     $('#lead_id').show();
   }
 });

  







  $(document).ready(function(){
    var i=1;
    $("#add_row").click(function(){

     if(i<=10){
      $('#addr'+i).html('<br><input    type="file" class="filestyle btn btn-info" data-placeholder="No file" name="policy_copy[]" id="policy_copy"  >');

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


    var j=1;
    $("#vadd_row").click(function(){

     if(j<=2){
      $('#vaddr'+j).html(' <br> <input    type="file" class="filestyle btn btn-info" data-placeholder="No file" name="visiting[]" id="visiting"  >');

      $('#visiting_tab').append('<div id="vaddr'+(j+1)+'"></div>');
      j++; 
    }else{
     alert("max size 3 only");
   }
 });
    $("#vdelete_row").click(function(){
     if(j>1){
       $("#vaddr"+(j-1)).html('');
       j--;
     }
   });


  });



</script>




@endsection

