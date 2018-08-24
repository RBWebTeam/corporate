@extends('includes.master')
@section('content')
<div class="container mrg-tp">
<div class="row">
 <div class="col-md-10 col-md-offset-1">
  <div class="righ-col bg-sucsess effect2">
 
 <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">CUSTOMER DETAILS</a></li>
  <li><a data-toggle="tab" href="#menu1">QUICK QUOTE</a></li>
</ul>
<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  
  
  
  <!-- Form 1 Start  -->
  <div class="form1" style="">
  <div class="col-md-12 pad">
  <span></span>
 
 
  <a href="#" id="Search_customer" lass="pad" class="btn btn-outline-secondary">Search customer</a>
  <a href="#"  class="btn btn-outline-success"  id="popup1">Search customer</a> &nbsp; <a href="#" class="pull-right" id="popup2">Popup 1</a>
  <hr>
  </div>
  
  <div class="col-md-6">
  <div class="form-group">
  <label>Customer Type</label>
  <input type="text" class="form-control">
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
   
   <div class="col-md-12"><button class="btn-nxt">NEXT</button></div>
  </div>
   <!-- Form 1 End -->
   
   
   <!-- Form 2 Start  -->
  <div class="form1" id="s_customer" style="display: none">
  <form id="customer_registration" method="post"> {{ csrf_field() }}
  <div class="pad">
  <h4>Customer Type</h4>
  <span> <input type="radio" name="customert" value="0" checked  class="customert"  />individual</span> &nbsp;&nbsp; 
  <span><input type="radio" name="customert" value="1" class="customert" />Corporate</span> 
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
  <input type="email" class="form-control" name="email" id="email" required>
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Pnone No.</label>
  <input type="text" class="form-control" name="phone" id="phone" minlength="10" maxlength="10" required onkeypress="return Numeric(event)"/>
   </div>
   </div>
   <div class="col-md-6">
  <div class="form-group">
  <label>Pincode / Area</label>
  <input type="text" class="form-control" name="pincode" id="pincode" minlength="6" maxlength="6" onkeypress="return Numeric(event)" required>
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
  <div id="menu1" class="tab-pane fade">
    <h4 class="mrg-tp-10">Voyage and Commodity Details</h4>
  <hr>
  <div class="col-md-6">
  <div class="form-group">
  <label>Voyage type</label>
  <select class="form-control">
        <option>Select Voyage type</option>
  </select>
   </div>
   </div>
   <div class="col-md-12"></div>
    
  
  <div class='col-sm-6'>
            <div class="form-group">
      <label>Policy Start Date</label>
                <div class='input-group date' id='datetimepicker1'>
                    <input type='date' class="form-control" />
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
                    <input type='date' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    
  <div class="col-md-6">
  <div class="form-group">
  <label>Comodity Details</label>
  <select class="form-control">
        <option>Select Comodity Details</option>
  </select>
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Packing</label>
  <select class="form-control">
        <option>Other (St & Customary)</option>
  </select>
   </div>
   </div>
   
   <div class="col-md-8">
  <div class="form-group">
  <label>Commodity Discription</label>
  <textarea class="form-control"></textarea>
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Mode of Conveyance</label>
  <select class="form-control">
        <option></option>
  </select>
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Coverage Details</label>
  <select class="form-control">
        <option></option>
  </select>
   </div>
   </div>
   
  <div class="col-md-6">
  <div class="form-group">
  <label>Basic of Valuation</label>
  <select class="form-control">
  <option></option>
  </select>
   </div>
   </div>
    
   <div class="col-md-6">
  <div class="form-group">
  <h2 class="plus-sign">+</h2> <input type="text" class="form-control mrg-tp" placeholder="0%">
   </div>
   </div>
   <div class="col-md-12"></div>
   <div class="col-md-6">
  <div class="form-group">
  <label>Service tax Exemption Category</label>
  <select class="form-control">
  <option>No Exemption</option>
  </select>
   </div>
   </div> 
   <div class="col-md-12"></div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Originating Country</label>
  <select class="form-control">
  <option>Select Originating Country</option>
  </select>
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Destination Country</label>
  <select class="form-control">
  <option>Select Destination Country</option>
  </select>
   </div>
   </div>
   
   <div class="col-md-12"></div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>From voyage</label>
  <input type="text" class="form-control"/>
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>To voyage</label>
  <input type="text" class="form-control"/>
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Survey at Destination</label>
  <select class="form-control">
  <option></option>
  </select>
   </div>
   </div>
   
   <div class="col-md-6">
  <div class="form-group">
  <label>Financier Agreement Type</label>
  <select class="form-control">
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
  <input type="text" class="form-control"/>
   </div>
   </div>
   
   <div class="col-md-4 col-xs-8">
            <div class="form-group">
      <label>Invoice Date</label>
                <div class="input-group date" id="datetimepicker1">
                    <input type="date" class="form-control">
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
      <select class="form-control">
      <option>Indian Rupee (INR)</option>
      </select>
      </div>
      </div>
    
    <div class="col-md-6">
      <div class="form-group">
      <label>Exchange Rate</label>
      <input type="text" class="form-control"/>
      </div>
      </div>
    
    <div class="col-md-6">
      <div class="form-group">
      <label>Cargo S.I (Invoice Currency)</label>
      <input type="text" class="form-control"/>
      </div>
      </div>
    
    <div class="col-md-6">
      <div class="form-group">
      <label>Cargo Sum Insured</label>
      <input type="text" class="form-control"/>
      </div>
      </div>
    
    <div class="col-md-6">
      <div class="form-group">
      <label>Sum Insured</label>
      <input type="text" class="form-control"/>
      </div>
      </div>
    
    <div class="col-md-6">
      <div class="form-group">
      <label>Rate In %</label>
      <input type="text" class="form-control"/>
      </div>
      </div>
    
    <div class="col-md-12"><button class="btn-nxt">Calculate Premium</button></div>
  </div>
</div>

  
  
</div>
</div>
</div>




          <!-- Modal -->
          <div id="popup11" class="modal model1 fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content modal-md">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Search Option</h4>
                </div>
                <div class="modal-body">
                   <div class="col-md-6">
            <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control">
             </div>
             </div>
             
             <div class="col-md-6">
            <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control">
             </div>
             </div>
             
             <div class="col-md-6">
            <div class="form-group">
            <label>Pnone No.</label>
            <input type="number" class="form-control">
             </div>
             </div>
             
             <div class="col-md-6">
            <div class="form-group">
            <label>Email Id</label>
            <input type="text" class="form-control">
             </div>
             </div>
             <div class="col-md-12"><button class="btn-nxt" data-toggle="modal" 
             >SEARCH</button></div>
                </div> 
              </div>
            </div>
          </div>




          <!-- Modal -->
          <div id="popup22" class="modal fade" role="dialog">
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

 </div>



<div class="row">
  <div class="messageContainer">
    <div id="msgbox_success" class="alert alert-success alert-position hidden " aria-hidden="true"  >
      <button type="button" class="close" aria-hidden="true">&times;</button>
      <div id="q">
      
      </div>
    </div>
  </div>
  
</div>
<script type="text/javascript">
  
  $('#popup1').click('',function(){
      $('#popup11').modal('show');

  });

    $('#popup2').click('',function(){
      $('#popup22').modal('show');

  });

 $('#Search_customer').click('',function(){
      $('#s_customer').toggle('show');
  });


 

 $(document).ready(function() {    
    $('#SelectSalutaion').append('<select  name="salutaion" class="form-control" ><option value="0">Select Salutation</option><option value="1">Mr</option><option value="1">Mrs</option>><option value="1">Ms</option></select>');
    $('input:radio[name=customert]').change(function() { $('#SelectSalutaion').empty();
        if (this.value == '0') {
           $('#SelectSalutaion').append('<select name="salutaion" class="form-control" ><option value="0">Select Salutation</option><option value="1">Mr</option><option value="1">Mrs</option>><option value="1">Ms</option></select>');
        }
        else if (this.value == '1') {  $('#SelectSalutaion').empty();
          $('#SelectSalutaion').append('<select name="salutaion" class="form-control" ><option value="0">Select Salutation</option><option value="1">Mr1</option><option value="1">Mrs1</option>><option value="1">Ms1</option></select>');
        }

        
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
    success: function(msg){  
                
          if(msg==0){

            
          }else{  $('#q').empty();
             $("#msgbox_success").removeClass("hidden").attr("aria-hidden", false);
  $("#msgbox_success").animate({left: '75%'}, "slow");
    console.log("Displaying msgbox_success");
   

               
                   arr=Array();

              $.each(msg, function( key, val ) {
                   
                   arr.push('<p>'+key+':'+val+'</p>');
                   console.log(key+"   :"+val);

              });

               $('#q').append(arr);

                   
          }
  }
});

         }


       });
    


 
$(".close").click(function(){
  $("#msgbox_success").animate({left: '150%'}, "slow");
    console.log("Hiding msgbox_success");
  var adjustMsgBox = function(){
    $("#msgbox_success").addClass("hidden").attr("aria-hidden", true);
  };
  setTimeout(adjustMsgBox, 2000);
}); 

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

