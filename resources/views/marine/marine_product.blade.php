@extends('includes.master')
@section('content')
<div class="container mrg-tp">
<div class="row">
 <div class="col-md-10 col-md-offset-1">
  <div class="righ-col bg-sucsess effect2">
 
 <ul class="nav nav-tabs">
  <li class="active11 customer_details0"><a data-toggle="tab" href="#" id="customer_details">CUSTOMER DETAILS</a></li>
  <li class="customer_details1" ><a   href="#"   >QUICK QUOTE</a></li>
</ul>
<div class="tab-content">
  <div id="home" class="tab-pane   in active">
  
  
  
  <!-- Form 1 Start  -->
  <div class="form1"  id="search_customer_id">
  <div class="col-md-12 pad">
  <span></span>
 
 
  <a href="#" id="new_customer"   class="btn btn-outline-secondary">new customer</a>
  <a href="#" id="Search_customer"  class="btn btn-outline-success"   >Search customer</a> 
  </div>
  
  <div class="col-md-6">
  <div class="form-group">
  <label>Customer Type</label>
  <input type="text" class="form-control" name="cname" id="cname">
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Customer Name</label>
  <input type="text" class="form-control">
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Contact No.</label>
  <input type="number" class="form-control">
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Email Id</label>
  <input type="text" class="form-control">
   </div>
   </div>
   
   <div class="col-md-12"><button class="btn-nxt" id="quick_quote">NEXT</button></div>
  </div>
   <!-- Form 1 End -->
  
   
   <!-- Form 2 Start  -->
  <div class="form1" id="s_customer" style="display: none">
  <form id="customer_registration" method="post"> {{ csrf_field() }}
  <div class="pad">
  <h4>Customer Type</h4>
  <span> <input type="radio" name="customert" value="0" checked  class="customert0"  />individual</span> &nbsp;&nbsp; 
  <span><input type="radio" name="customert" value="1" class="customert1" />Corporate</span> 
  <hr>
  </div>
  
  <div class="col-md-6">
  <div class="form-group">
  <label>Salutation</label>
 

  <div id="SelectSalutaion"></div>
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>First Name</label>
  <input type="text" class="form-control" name="fname" id="fname" required>

   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Email</label>
  <input type="email" class="form-control" name="email" id="email" required value="sagar.tejuja@gmail.com">
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Pnone No.</label>
  <input type="text" class="form-control" value="8898540057" name="phone" id="phone" minlength="10" maxlength="10" required onkeypress="return Numeric(event)"/>
   </div>
   </div>
   <div class="col-md-6">
  <div class="form-group">
  <label>Pincode / Area</label>
  <input type="text" class="form-control" value="556655" name="pincode" id="pincode" minlength="6" maxlength="6" onkeypress="return Numeric(event)" required>
   </div>
   </div>
   
   <hr>
   <div class="col-md-6">
  <div class="form-group">
  <label>State</label>
  <select class="form-control search_state" name="state" id="search_state" required>
        <option>Select State</option>
  </select>
   </div>
   </div>
   <div class="col-md-6">
  <div class="form-group">
  <label>District</label>
  <select class="form-control district"  name="district" id="district" required>
        <option>Select District</option>
  </select>
   </div>
   </div>
   <div class="col-md-6">
  <div class="form-group">
  <label>city</label>
  <select class="form-control search_district" name="city" id="search_district" required>
        <option>Select city</option>
  </select>
   </div>
   </div>
   
   <div class="col-md-12"><button class="btn-nxt">CANCEL</button> &nbsp; <button class="btn-nxt" id="btncustomer_registration">SAVE</button></div>

  </form>
   </div>
   <!-- Form 2 End  -->
   
  </div>

 
  <div   class="tab-pane  " id="quick_quote_show"  style="display: none">
    <h4 class="mrg-tp-10">Voyage and Commodity Details</h4>
  <hr>
  <form id="commodity_details_fm" >{{ csrf_field() }}
  <input type="hidden" name="search_userId" name="search_userId" id="search_userId">
  <div class="col-md-6">
  <div class="form-group">
  <label>Voyage type</label>
  <select class="form-control" name="voyagetype" id="voyagetype" required >
        <option>Select Voyage type</option>
        @foreach($voyage_master as $val)
         <option value="{{$val->id}}">{{$val->voyage_type}}</option>
        @endforeach
  </select>
   </div>
   </div>
   <div class="col-md-12"></div>
    
  
  <div class='col-sm-6'>
            <div class="formform-group">
      <label>Policy Start Date</label>
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control psdate" name="psdate" id="psdate" required    />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>

  <div class='col-sm-6'>
            <div class="form-group">
      <label>Expacted date of Voyage</label>
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control psdate" id="expdatevoyage" id="expdatevoyage" required />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    
  <div class="col-md-6">
  <div class="form-group">
  <label>Comodity Details</label>
  <select class="form-control" name="commodity_det" required >
        <option>Select Comodity Details</option>
         <option>Select Voyage type</option>
        @foreach($commodity_master as $val)
         <option value="{{$val->id}}">{{$val->commodity_name}}</option>
        @endforeach
  </select>
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Packing</label>
  <select class="form-control" name="expdatevoyage" id="expdatevoyage" required >
        <option>Select Packing</option>

         @foreach($packing_master as $val)
         <option value="{{$val->id}}">{{$val->packing_type}}</option>
        @endforeach
  </select>
   </div>
   </div>
   
   <div class="col-md-8">
  <div class="form-group">
  <label>Commodity Discription</label>
  <textarea class="form-control" name="commodity_description" id="commodity_description" required ></textarea>
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Mode of Conveyance</label>
  <select class="form-control" name="mode_conveyance" id="mode_conveyance" required >
        <option> Select Mode of Conveyance</option>

         @foreach($conveyance_master as $val)
         <option value="{{$val->id}}">{{$val->modeof_conveyance}}</option>
        @endforeach
  </select>
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Coverage Details</label>
  <select class="form-control"   name="coverage_details" id="coverage_details" required >
        <option></option>
  </select>
   </div>
   </div>
   
  <div class="col-md-6">
  <div class="form-group">
  <label>Basic of Valuation</label>
  <select class="form-control" name="basic_valuation" name="basic_valuation" required > 
  <option> Select Valuation</option>

    @foreach($incoterm_master as $val)
         <option value="{{$val->id}}">{{$val->incoterm}}</option>
        @endforeach
  </select>
   </div>
   </div>
    
   <div class="col-md-6">
  <div class="form-group">
  <h2 class="plus-sign">+</h2> 
    <input type="text" class="form-control mrg-tp" placeholder="0%" name="vpercentage" required >
   </div>
   </div>
   <div class="col-md-12"></div>
   <div class="col-md-6">
  <div class="form-group">
  <label>Service tax Exemption Category</label>
  <select class="form-control" name="service_tex_exemption" id="service_tex_exemption" required >
  <option>No Exemption</option>
  </select>
   </div>
   </div> 
   <div class="col-md-12"></div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Originating Country</label>
  <select class="form-control"  name="originating_country" id="originating_country" required>
  <option>Select Originating Country</option>
  @foreach($country_master as $val)
         <option value="{{$val->id}}">{{$val->country_name}}</option>
  @endforeach

  </select>
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Destination Country</label>
  <select class="form-control" name="destination_Country" id="destination_Country" required >
  <option>Select Destination Country</option>
   @foreach($country_master as $val)
         <option value="{{$val->id}}">{{$val->country_name}}</option>
  @endforeach

  </select>
   </div>
   </div>
   
   <div class="col-md-12"></div>
   
  <div class="col-md-6" >
  
  <div class="form-group">
  <label>From voyage</label>
  <input type="text" class="form-control" name="from_voyage" id="from_voyage" required />
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>To voyage</label>
  <input type="text" class="form-control" name="tovoyage" id="tovoyage" required />
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Survey at Destination</label>
  <select class="form-control" name="survey_destination" id="survey_destination" required>
  <option></option>
  </select>
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Financier Agreement Type</label>
  <select class="form-control" name="financier_arg_type" name="financier_arg_type" id="financier_arg_type" required >
  <option>Select Agreement Type</option>
  </select>
   </div>
   </div>
   
   <div class="col-md-12">
    <h4>Sum insured /Invoice / Premium Details</h4>
  <hr>
   </div>
   
   <div class="col-md-4">
  <div class="form-group">
  <label>Invoice No.</label>
  <input type="text" class="form-control" name="invoice_no" id="invoice_no"  required />
   </div>
   </div>
   
   <div class="col-md-4 col-xs-8">
            <div class="form-group">
      <label>Invoice Date</label>
                <div class="input-group date" id="datetimepicker1">
                    <input type="text" class="form-control psdate" namr="invice_date" id=invice_date>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
  
  <div class="col-md-2 col-xs-4"><a href="#"><img src="images/minus_ic.png" class="minus-ic"/></a></div>
  
  
   <div class="col-md-8 col-xs-12"><a href="#"><img src="images/plus_ic.png"/></a></div>
   <div class="clearfix"></div>
   
    <div class="col-md-6">
      <div class="form-group">
      <label>Currency of Invoice</label>
      <select class="form-control" name="currency_of_invoice" id="currency_of_invoice" required >
      <option>Select Currency</option>

         @foreach($currency_master as $val)
         <option value="{{$val->id}}">{{$val->currency_name}} ({{$val->currency_shortcut}})</option>
        @endforeach
      </select>
      </div>
      </div>
    
    <div class="col-md-6">
      <div class="form-group">
      <label>Exchange Rate</label>
      <input type="text" class="form-control" name="exchange_rate" id="exchange_rate" required />
      </div>
      </div>
    
    <div class="col-md-6">
      <div class="form-group">
      <label>Cargo S.I (Invoice Currency)</label>
      <input type="text" class="form-control" name="invoice_currency" id="invoice_currency" required />
      </div>
      </div>
    
    <div class="col-md-6">
      <div class="form-group">
      <label>Cargo Sum Insured</label>
      <input type="text" class="form-control" name="cargo_sum_insured" id="cargo_sum_insured" required />
      </div>
      </div>
    
    <div class="col-md-6">
      <div class="form-group">
      <label>Sum Insured</label>
      <input type="text" class="form-control" name="sum_insured" id="sum_insured" required/>
      </div>
      </div>
    
    <div class="col-md-6">
      <div class="form-group">
      <label>Rate In %</label>
      <input type="text" class="form-control" name="rate_in" id="rate_in" required />
      </div>
      </div>
    
    <div class="col-md-12"><button class="btn-nxt" id="commodity_details_btn"  >Calculate Premium</button></div>
 
  </div>

 </form>
</div>

  
  
</div>
</div>
</div>




          <!-- Modal -->
          <div id="popup11" class="modal model1  " role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <form id="search_form">{{ csrf_field() }}
              <div class="modal-content modal-md">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Search Option</h4>
                </div>
                <div class="modal-body">
                   <div class="col-md-6">
            <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="fname">
             </div>
             </div>
             
             <div class="col-md-6">
            <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lastname">
             </div>
             </div>
             
             <div class="col-md-6">
            <div class="form-group">
            <label>Pnone No.</label>
            <input type="number" class="form-control" name="phone">
             </div>
             </div>
             
             <div class="col-md-6">
            <div class="form-group">
            <label>Email Id</label>
            <input type="text" class="form-control" name="email">
             </div>
             </div>
             <div class="col-md-12"><button id="search_btn" class="btn-nxt" data-toggle="modal" 
             >SEARCH</button></div>
                </div> 
              </div>
              </form>
            </div>
          </div>




          <!-- Modal -->
          <div id="popup22" class="modal  " role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content modal-l">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Search Customer</h4>
                </div>
                <div class="modal-body">
            
               <table class="table table-bordered table-striped">
              <thead>
                <tr class="bg-danger">
                  <th>Customer Type</th>
                  <th>Customer Name</th>
                  <th>Email ID</th>
              <th>Contact Number</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Corporate</td>
                  <td>ABC Company PVT LTD</td>
                  <td>account.abccomapny@mail.com</td>
              <td>9898989898</td>
             
              </tbody>
            </table>
             <div class="col-md-12"><button class="btn-nxt">RETURN</button></div>
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
        <h4 class="modal-title">Search customer</h4>
      </div>

      <input type="text" id="myInput" onkeyup="myFunction()" class="  search-query form-control" placeholder="Search for names.." />
      <div class="modal-body" id=occ_company><td>User name</td>
        <ul class="list-group" style="height: auto;max-height: 500px;overflow-x: hidden;width: 500;" id="myUL">
          
        </ul>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



 </div>




 
<div class="messageContainer">
    <div class="elements" style="    width: 404px;display: block;left: 16px !important;top: 200px;position: absolute; font-size: 18px;">
      

    </div></div>

<script type="text/javascript">
  
  $('#Search_customer').click('',function(){
      $('#popup11').modal('show');

  });

    $('#popup2').click('',function(){
      $('#popup22').modal('show');

  });

 $('#new_customer').click('',function(){
      $('#s_customer').toggle('show');
  });

 $('#customer_details').click('',function(){
      $('#quick_quote_show').hide();
      $('#search_customer_id').show();
  });

 
 $('#quick_quote').click('',function(){
      if($('#search_userId').val()!=''){
       $('#quick_quote_show').show();
       $('#search_customer_id').hide();
       $('#s_customer').hide();

         $('.customer_details0').removeClass('active').addClass('inactive');
         $('.customer_details1').removeClass('inactive').addClass('active');
       }else{
         

         toastr.warning("<h4>Search Customer .......?</h4>");

        


       }
  });



 

 

 $(document).ready(function() {    
    $('#SelectSalutaion').append('<select  name="salutaion" class="form-control" ><option value="0">Select Salutation</option><option value="1">Mr</option><option value="1">Mrs</option>><option value="1">Ms</option></select>');
    $('input:radio[name=customert]').change(function() { $('#SelectSalutaion').empty();  
        if ($(this).val()=='0') {
           $('#SelectSalutaion').append('<select name="salutaion" class="form-control" ><option value="0">Select Salutation</option><option value="1">Mr</option><option value="1">Mrs</option>><option value="1">Ms</option></select>');
        }
        else if ($(this).val()=='1') {   
          $('#SelectSalutaion').append('<select name="salutaion" class="form-control" ><option value="0">Select Salutation</option><option value="1">Mr1</option><option value="1">Mrs1</option>><option value="1">Ms1</option></select>');
        }

        
    });
    $(".psdate").datepicker({
      dateFormat: 'dd-mm-yy'
    });
});


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
    $('.district').empty();
    $('.district').append(city_array);
      }
});
});



$('#btncustomer_registration').click(function(e){ e.preventDefault();
 validator=$('#customer_registration').validate();
 if(! $('#customer_registration').valid()){  
           $.each(validator.errorMap, function (index, value) {
           $('#'+index).focus();
           return false;
         });
           return false;
         }else{
       
    $.ajax({  
    type: "POST",  
    url: "{{URL::to('marine-user-add')}}",
    data : $('#customer_registration').serialize(),
    success: function(msg){   $('.elements').empty();
          if(msg==0){
                $('#quick_quote_show').show();
                $('#search_customer_id').hide();
                $('#s_customer').hide();
                $('.customer_details0').removeClass('active').addClass('inactive');
                $('.customer_details1').removeClass('inactive').addClass('active');
          }else{ 
                $.each(msg, function( key, val ) { i=0;
                       toastr.error('<p>'+key+': &nbsp;&nbsp;'+val+'');
                });
              }
         }
      });
    }
 });
    


//commodity_details_fm
$('#commodity_details_btn').click(function(e){ e.preventDefault();  
 validator=$('#commodity_details_fm').validate();
 if(! $('#commodity_details_fm').valid()){  
           $.each(validator.errorMap, function (index, value) {
           $('#'+index).focus();
           return false;
         });
           return false;
         }else{
              $.ajax({  
                type: "POST",  
                url: "{{URL::to('quick-quote')}}",
                data : $('#commodity_details_fm').serialize(),
                success: function(msg){  
                            
                          console.log(msg);
                 }
            });
         }
})


$('#search_btn').click(function(e){ e.preventDefault();  
              $.ajax({  
                type: "POST",  
                url: "{{URL::to('quick-quote-search')}}",
                data : $('#search_form').serialize(),
                success: function(data){   $('#popup11').modal('hide');
                    $("#occ_company ul").empty();
                    $.each( data, function( key, val ) {
                    $("#occ_company ul").append('<li class="list-group-item" ><a href="#" class="occupied_id" style="font-size: 15px;"><p class="mb-0">'+val.firstname +" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+val.email+'</p></a> <input type="hidden" name="abc" class="search_userId"  value='+val.userid +'><input type="hidden" name="abc" class="search_name"  value='+val.firstname +'><input type="hidden" name="abc" class="search_lname"  value='+val.lastname +'><input type="hidden" name="abc" class="search_phone"  value='+val.mobile +'><input type="hidden" name="abc" class="search_email"  value='+val.email +'></li> ');
                    });
                    $('#occupiedPop').modal('toggle');
              
                 }
            });


            })


    
$(document).on('click','.occupied_id',function(){ 
 var search_name=$(this).closest('li').find('.search_name').val();
 var search_lname=$(this).closest('li').find('.search_lname').val();
 var search_phone=$(this).closest('li').find('.search_phone').val();
 var search_email=$(this).closest('li').find('.search_email').val();
 var search_userId=$(this).closest('li').find('.search_userId').val();  
  $('#search_userId').val(search_userId);
  $('#cname').val(search_name);
  $('#occupiedPop').modal('hide');
})
 
</script>


<style type="text/css">
  #messageContainer {
  position: absolute;
  margin: 0px;
  padding: 0px;
  width: 100%;
  height: 100px;
  min-height: 100px;
  overflow: hidden;  
}
.alert-position {
  position: absolute;
  width:50%;
  margin-left: -50%;
  margin-top: 100px;
}
</style>

@endsection

