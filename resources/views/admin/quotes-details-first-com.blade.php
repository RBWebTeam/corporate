@extends('admin.includes.master')
@section('content')
<div id="page-wrapper"  >

<!-- pupup-->
<div id="mailModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header modal-header-info">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-envelope"></span> Compose Message</h4>
          </div>
          <div class="modal-body">
            <form   class="form-horizontal"  enctype="multipart/form-data" id="maile_sent_form" role="form" method="POST" action="">
                <div class="form-group">
                        <label for="to" class="col-sm-1 control-label">To:</label>
                        <div class="col-sm-11">
                              <input type="email" name="to_email" class="form-control select2-offscreen" id="to" placeholder="Type email" tabindex="-1" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cc" class="col-sm-1 control-label">CC:</label>
                        <div class="col-sm-11">
                              <input type="email" name="cc_email" class="form-control select2-offscreen" id="cc" placeholder="Type email" tabindex="-1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bcc" class="col-sm-1 control-label">BCC:</label>
                        <div class="col-sm-11">
                              <input type="email" name="bcc_email" class="form-control select2-offscreen" id="bcc" placeholder="Type email" tabindex="-1">
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="bcc" class="col-sm-1 control-label">Subject:</label>
                        <div class="col-sm-11">
                              <input type="email" name="subject_email" class="form-control select2-offscreen" id="subject_email" placeholder="Subject" tabindex="-1">
                        </div>
                    </div>
                <div class="form-group">
                  <label class="col-sm-12" for="inputBody"><span class="glyphicon glyphicon-list"></span>Message</label>
                  <div class="col-sm-12"><textarea class="form-control" name="mail_ms" id="mail_ms" rows="8" ></textarea></div>
                </div>

         <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button> 
           <!--  <button type="button" class="btn btn-warning pull-left">Save Draft</button> -->
            <input type="file" name="attachment_path" id="attachment_path"  class="btn btn-warning pull-left"> 
            <input type="hidden" name="quote_id" value="{{$quote_id}}">
                {{ csrf_field() }}

            <button type="button" class="btn btn-primary " id="mail_sent">Send <i class="fa fa-arrow-circle-right fa-lg"></i></button>
            
          </div>
            </form>
          </div>
         
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div>


 <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header"><a href="{{ URL::previous() }}"><i class="fa fa-arrow-circle-left custom" ></i>Go Back</a></h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
      <div class="row">
        <div class="col-md-10 ">
          <h5 class="text-center text-danger"><strong> Standard Fire and Special Perils </strong></h5>
        </div>
     <div class="col-md-10"> 
    <label class="control-label col-sm-2"  > </label>
    <div class="col-sm-8">
   <table class="table table-bordered table-striped" style=" font-size:11px;">
    <thead>
      <tr  >
        <th>Name of the insured</th>
        <td>{{$query_master->customer_name}}</td>
      </tr>

      <tr>
        <th>Address:</th>
        <td>{{$query_master->current_addr}}</td>
      </tr>

       <tr>
        <th>Location address of the insured property</th>
        <td>{{$query_master->risk_addr}}</td>
      </tr>

       <tr>
        <th>Occupied as</th>
        <td>{{$query_master->occupancy_name}}</td>
      </tr>

   
   @if($query_master->company_name!=0  || $query_master->period_to!=0)
	<tr>	
		<th>Current Insurer</th>	    
		<td>{{$query_master->company_name}}</td>	
	</tr>

    <tr>	
      <th>Renewal Date</th>	    
       <td>{{$query_master->period_from}} to {{$query_master->period_to}}</td>
    </tr>
    @endif 


    </thead>
  </table> 
</div>   
<br><br> 
  <div class="col-md-10 ">
          <h5 class="text-center text-danger"><strong> Comparision </strong></h5>
    </div>
  <table class="table table-bordered table-striped" style=" font-size:11px;">
    <thead>
      <tr class="bg-info">
        <th>Sl.</th>
        <th>Interest to be covered </th>
         @foreach($loan_detail as $key=> $val)
         @if($val->comapny_id==$comapny_id)
         <th class="company_name{{$key}}">{{ $val->company_name}} </th>
          <?php break ;?>
         @endif
         @endforeach
         
      </tr>
    </thead>
    <tbody>

   @if($query_master->sum_building!=0)
       <tr>
        <td>1</td>
        <td>Sum Insured for Building</td>
        <td class="sum_building0">{{$query_master->sum_building}}</td>
      </tr>@endif 

       @if($query_master->sum_plith!=0)
       <tr>
        <td>2</td>
        <td>Sum Insured for Plinth and Foundation</td>
        <td class="sum_plith0">{{$query_master->sum_plith}}</td>
        
      </tr> @endif 
      
      @if($query_master->sum_plant!=0)
      <tr>
        <td>3</td>
        <td>Sum Insured for Plant and Machinery</td>
        <td class="sum_plant0">{{$query_master->sum_plant}}</td>
      
      </tr> @endif 

       @if($query_master->sum_electric!=0)
       <tr>
        <td>4</td>
        <td >Sum Insured for Electrical Fitting and Installations</td>
        <td class="sum_electric0">{{$query_master->sum_electric}}</td>
         
      </tr> @endif 
       
       @if($query_master->sum_fff!=0)
       <tr>
        <td>5</td>
        <td>Sum Insured for Furnitures,Fixtures and Fittings</td>
        <td class="sum_fff0">{{$query_master->sum_fff}}</td>
        
      </tr> @endif 
       
       @if($query_master->sum_others!=0)
       <tr>
        <td>6</td>
        <td>Sum Insured for Stock(Stocks other than stocks in Process)</td>
        <td class="sum_others0">{{$query_master->sum_others}}</td>
      
      </tr> @endif 
     
      @if($query_master->sum_stock!=0)
      <tr>
        <td>7</td>
        <td>Sum Insured for Stocks in Process</td>
        <td class="sum_stock0">{{$query_master->sum_stock}}</td>
         
      </tr> @endif 

      <tr>
        <td> </td>
        <td>Total</td>
        <td class="total0"> </td>
     
      </tr>
    </tbody>
  </table> 
<br><br> 

<div class="col-md-10 ">
     <h5 class="text-center text-danger"><strong> Coverage </strong> </h5>
 </div>
  <table class="table table-bordered table-striped" style=" font-size:11px;">
    <thead>
      <tr class="bg-info">
        <th> </th>
        @foreach($loan_detail as $key=> $val)
         @if($val->comapny_id==$comapny_id)
         <th class="company_name{{$key}}">{{ $val->company_name}} </th>
          <?php break ;?>
         @endif
        @endforeach
      </tr>
    </thead>
    <tbody>

            @if($query_master->is_stfi!=0)
       <tr>
        <td>STFI</td>
        <td class="is_stfi0">Yes</td>
       
      </tr > @endif 

      <tr> @if($query_master->is_earthquake!=0)
        <td>Earthquake</td>
        <td class="is_stfi0">Yes</td>
       
      </tr > @endif 

      <tr> @if($query_master->is_terrorism!=0)
        <td>Terrorism</td>
        <td class="is_stfi0">Yes</td>
       
      </tr > @endif 


      <tr> @if($query_master->is_escalation!=0)
        <td>Escalation </td>
        <td class="is_stfi0">Yes</td>
        
      </tr > @endif 

      <tr> @if($query_master->is_omission!=0)
        <td>Omission to Insure additions, alterations or extensions</td>
        <td class="is_stfi0">Yes</td>
      
      </tr > @endif 


      <tr> @if($query_master->is_lossrent!=0)
        <td>Loss Of Rent clause</td>
        <td class="is_stfi0">Yes</td>
       
      </tr > @endif 


      <tr> @if($query_master->is_accommodation!=0)
        <td>Insurance Of Additional Expenses of Rent For An Alternative Accommodation</td>
        <td class="is_stfi0">Yes</td>
        
      </tr > @endif 


      <tr> @if($query_master->is_architect!=0)
        <td>Architects, Surveyors and Consulting Engineers Fees ( in excess of 3% claim amount)</td>
        <td class="is_stfi0">Yes</td>
       
      </tr > @endif 


      <tr> @if($query_master->is_removedebris!=0)
        <td>Removal of Debris (in excess of 1% claim amount)</td>
        <td class="is_stfi0">Yes</td>
         
      </tr > @endif 


      <tr> @if($query_master->is_spontcomb!=0)
        <td>Spontaneous Combustion</td>
        <td class="is_stfi0">Yes</td>
        
      </tr > @endif 


      <tr> @if($query_master->is_startup!=0)
        <td>Start up Expenses</td>
        <td class="is_stfi0">Yes</td>
        
      </tr > @endif 


      <tr> @if($query_master->is_earthquake!=0)
        <td>Earthquake</td>
        <td class="is_stfi0">Yes</td>
        
      </tr > @endif 


      <tr> @if($query_master->is_floater!=0)
        <td>Floater Clause</td>
        <td class="is_stfi0">Yes</td>
         
      </tr > @endif 

      <tr> @if($query_master->is_impactdamage!=0)
        <td>Impact Damage due to Insured's own Rail/Road Vehicles, Fork lifts, Cranes, Stackers and the like and articles dropped therefrom.</td>
        <td class="is_stfi0">Yes</td>
         
      </tr > @endif 
    </tbody>
  </table> 


<br><br> 
<div class="col-md-10 ">
     <h5 class="text-center text-danger"><strong> Premium Details </strong> </h5>
 </div>
  <table class="table table-bordered table-striped" style=" font-size:11px;">
    <thead>
      <tr class="bg-info">
        <th></th>
        @foreach($loan_detail as $key=> $val)
         @if($val->comapny_id==$comapny_id)
         <th class="company_name{{$key}}">{{ $val->company_name}} </th>
          <?php break ;?>
         @endif
        @endforeach
      </tr>
    </thead>
    <tbody>
 

         
          <tr>
          <td class="">Premium </td>
           @foreach($loan_detail as $key=> $val)
           @if($val->comapny_id==$comapny_id)
            <td class="">{{$val->premium_amt}}</td>
            <?php break ;?>
           @endif
           @endforeach
         </tr>
         

         <tr>
            <td class=" ">Service Tax </td>
           @foreach($loan_detail as $key=> $val)
            @if($val->comapny_id==$comapny_id)
            <td class="">{{$val->gst_amt}}</td>
            <?php break ;?>
            @endif
           @endforeach
         </tr>

         <tr>
            <td class=" ">Net Payable </td>
           @foreach($loan_detail as $key=> $val)
            @if($val->comapny_id==$comapny_id)
            <td class="">{{$val->net_premium_amt}}</td>
            <?php break ;?>
             @endif
           @endforeach
         </tr>
      
        
    </tbody>
  </table> 

<br><br> 
<div class="col-md-10 ">
     <h5 class="text-center text-danger"><strong>Deductible / Excess  </strong></h5>
 <p>Upto 10 crs Sum Insured – 5% of Claim amount subject to minimum of Rs. 10000/	</p>			
<p>Above 10 crs and Upto 100 crs – 5% of Claim amount subject to miniumum of Rs. 25000/-	</p>			
<p>Above 100 crs – 5% of Claim Amount subject to minimum of Rs. 5,00,000/-	</p>			
 </div>
<br><br> 
<div class="col-md-10 ">
    <h5 class="text-center text-danger"><strong> Warranties & Clauses: </strong> </h5>
    

  @if($query_master->is_stfi!=0) 
    <p>STFI</p>
  @endif 
  @if($query_master->is_earthquake!=0)
        <p>Earthquake</p>
  @endif 
  @if($query_master->is_terrorism!=0)
        <p>Terrorism</p>    
  @endif 
  @if($query_master->is_escalation!=0)
        <p>Escalation </p>
  @endif 
  @if($query_master->is_omission!=0)
        <p>Omission to Insure additions, alterations or extensions</p>
  @endif 
  @if($query_master->is_lossrent!=0)
        <p>Loss Of Rent clause</p>
  @endif 

  @if($query_master->is_accommodation!=0)
        <p>Insurance Of Additional Expenses of Rent For An Alternative Accommodation</p> 
  @endif 
  @if($query_master->is_architect!=0)
        <p>Architects, Surveyors and Consulting Engineers Fees ( in excess of 3% claim amount)</p>  
  @endif 
  @if($query_master->is_removedebris!=0)
        <p>Removal of Debris (in excess of 1% claim amount)</p>
  @endif 
  @if($query_master->is_spontcomb!=0)
        <p>Spontaneous Combustion</p>
  @endif 
  @if($query_master->is_startup!=0)
        <p>Start up Expenses</p>
  @endif 
  @if($query_master->is_earthquake!=0)
        <p>Earthquake</p>
  @endif 
  @if($query_master->is_floater!=0)
        <td>Floater Clause</td>
  @endif 
  @if($query_master->is_impactdamage!=0)
        <p>Impact Damage due to Insured's own Rail/Road Vehicles, Fork lifts, Cranes, Stackers and the like and articles dropped therefrom.</p>
  @endif 	
 </div> 


<div class="col-md-10 ">
    <h5 class="text-center text-danger"><strong>Loss or damage resulting from: </strong> </h5>
    
<p>Fire due to own fermentation, natural heating or spontaneous combustion of the stocks or by their undergoing any heating or drying process </p>
<p>Burning by order of any Public Authority</p> 
<p>Explosion of boilers or steam generating vessels & machinery subject to centrifugal force by its own explosion or implosion </p>
<p>Pressure waves generated by aircraft </p>
<p>Total or partial cessation of work/retarding/interruption of any process or operations arising out of riot, strike, malicious damage </p>
<p>Burglary, house breaking, theft, larceny arising out of riot, strike, malicious damage </p>
<p>Impact damages by rail/road vehicle/animal belonging to the insured or employee or any occupant on the premises </p>
<p>Normal cracking, settlement, bedding down, up heaving of land/structures, coastal or river erosion, defective design, workmanship or use of defective materials </p>
<p>Forest fire</p> 
<p>War or war like situations </p>
<p>Pollution or contamination </p>

<p><strong>Note</strong>: The above are only the salient features of the Policy, for complete terms and conditions please refer to Policy Wordings.</p>

@if($query_master->additions_info!=0 || $query_master->additions_info!=null)
 <p><strong>Additional Information</strong>: {{$query_master->additions_info}}</p>  
 @endif

</div>
  </div>
</div>    


<div class="row ">
      <div class="col-lg-12 "  >
            <div class="panel panel-default">
                 <div class="panel-body">
                   <h3 id="grid-column-ordering">Remark</h3>


     <div class="chat-panel panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat" id="remark_chat">
                            </ul>
                        </div>
                        <!-- /.panel-body -->

<div class="col-sm-12"  > <div  style=" height:50px" ></div>  </div>          
  <div class="col-sm-12"  >
      <div class="col-sm-3"  >
          <div class="funkyradio">
          @if(Session::get('user_type_id')==2)
             <div class="funkyradio-success col-md-8"> 
                      <input type="radio" name="approved" id="radio3" class="remar_status1" value="1" {{$query_master->is_approve1==1 ? 'checked' : ''}} onclick="Approved_fn(this);"  />
                      <label for="radio3">Approved</label>
              </div>
              <div class="funkyradio-danger col-md-8">
                      <input type="radio" name="approved" id="radio4"  class="remar_status0" value="0" {{$query_master->is_approve1==0 ? 'checked' : ''}} onclick="Approved_fn(this);" />
                      <label for="radio4">Rejected</label>
               </div>
               @elseif(Session::get('user_type_id')==3 )
                <div class="funkyradio-success col-md-8"> 
                      <input type="radio" name="approved" id="radio3" class="remar_status" value="1" {{$query_master->is_approve==1 ? 'checked' : ''}} onclick="Approved_fn(this);"  />
                      <label for="radio3">Approved</label>
              </div>
              <div class="funkyradio-danger col-md-8">
                      <input type="radio" name="approved" id="radio4"  class="remar_status" value="0" {{$query_master->is_approve==0 ? 'checked' : ''}} onclick="Approved_fn(this);" />
                      <label for="radio4">Rejected </label>
               </div>

                @elseif(Session::get('user_type_id')==1 )
             <div class="funkyradio-success col-md-8"> 
                <input type="radio" name="approved" id="radio3" class="remar_status1" value="1" {{$query_master->is_approve1==1 ? 'checked' : ''}} onclick="Approved_fn(this);"  />
                <label for="radio3">Approved</label>
              </div>
              <div class="funkyradio-danger col-md-8">
                <input type="radio" name="approved" id="radio4"  class="remar_status0" value="0" {{$query_master->is_approve1==0 ? 'checked' : ''}} onclick="Approved_fn(this);" />
                <label for="radio4">Rejected</label>
              </div>

              
               @else
              @endif

          </div>
     </div>

@if(Session::get('user_type_id')==2 || Session::get('user_type_id')==3)
<form class="form" id="form_remark" method="post"  >
       <div class="col-sm-8" style="margin: -20px 0 21px 0px;" >
        <div class="form-group">  <label>Remark Status</label>  <textarea class="form-control" rows="3" id="remark_text"></textarea>  </div>
       <button type="submit" class="btn btn-default" id="remark_id" >Submit  </button>     
      </div>
</form>
 @endif
        <div class="col-sm-8"  >
             @if($query_master->is_approve=="1" &&  $query_master->is_approve1=="1")
               <a href="#" class="mail_status"><i class="fa fa-envelope" aria-hidden="true">Send mail</i></a> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;
               <a href="{{url('downlaod-pdf')}}/{{$quote_id}}"  ><i class="fa fa-file-pdf-o " aria-hidden="true">Download PDF</i></a> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;
              @endif
           <a href="{{url('quotes-edit')}}/{{$quote_id}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
        </div>
     </div>


  </div>
 </div>

</div>
<hr>

<!--popupmodel-->


 @endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
 
	$(document).ready(function(){
            function nancheck(rows) {
              rows=parseInt(rows);
           return a= isNaN(rows)==true ? 0 : rows;
  }     

           var  sum_building0=nancheck(parseInt($('.sum_building0').text()));
           var  sum_plith0=nancheck(parseInt($('.sum_plith0').text()));
           var  sum_plant0=nancheck(parseInt($('.sum_plant0').text()));
           var  sum_electric0=nancheck(parseInt($('.sum_electric0').text()));
           var  sum_fff0=nancheck(parseInt($('.sum_fff0').text()));
           var  sum_others0=nancheck(parseInt($('.sum_others0').text()));
           var  sum_stock0=nancheck(parseInt($('.sum_stock0').text()));
         
           $('.total0').text(sum_building0+sum_plith0+sum_plant0+sum_electric0+sum_fff0+sum_others0+sum_stock0);
         
           // var  sum_building1=nancheck(parseInt($('.sum_building1').text()));
           // var  sum_plith1=nancheck(parseInt($('.sum_plith1').text()));
           // var  sum_plant1=nancheck(parseInt($('.sum_plant1').text()));
           // var  sum_electric1=nancheck(parseInt($('.sum_electric1').text()));
           // var  sum_fff1=nancheck(parseInt($('.sum_fff1').text()));
           // var  sum_others1=nancheck(parseInt($('.sum_others1').text()));
           // var  sum_stock1=nancheck(parseInt($('.sum_stock1').text()));
           // $('.total1').text(sum_building1+sum_plith1+sum_plant1+sum_electric1+sum_fff1+sum_others1+sum_stock1);

           // var  sum_building2=nancheck(parseInt($('.sum_building2').text()));
           // var  sum_plith2=nancheck(parseInt($('.sum_plith2').text()));
           // var  sum_plant2=nancheck(parseInt($('.sum_plant2').text()));
           // var  sum_electric2=nancheck(parseInt($('.sum_electric2').text()));
           // var  sum_fff2=nancheck(parseInt($('.sum_fff2').text()));
           // var  sum_others2=nancheck(parseInt($('.sum_others2').text()));
           // var  sum_stock2=nancheck(parseInt($('.sum_stock2').text()));
           // $('.total2').text(sum_building2+sum_plith2+sum_plant2+sum_electric2+sum_fff2+sum_others2+sum_stock2);

           // var  sum_building3=nancheck(parseInt($('.sum_building3').text()));
           // var  sum_plith3=nancheck(parseInt($('.sum_plith3').text()));
           // var  sum_plant3=nancheck(parseInt($('.sum_plant3').text()));
           // var  sum_electric3=nancheck(parseInt($('.sum_electric3').text()));
           // var  sum_fff3=nancheck(parseInt($('.sum_fff3').text()));
           // var  sum_others3=nancheck(parseInt($('.sum_others3').text()));
           // var  sum_stock3=nancheck(parseInt($('.sum_stock3').text()));
           // $('.total3').text(sum_building3+sum_plith3+sum_plant3+sum_electric3+sum_fff3+sum_others3+sum_stock3);

           // var  sum_building4=nancheck(parseInt($('.sum_building4').text()));
           // var  sum_plith4=nancheck(parseInt($('.sum_plith4').text()));
           // var  sum_plant4=nancheck(parseInt($('.sum_plant4').text()));
           // var  sum_electric4=nancheck(parseInt($('.sum_electric4').text()));
           // var  sum_fff4=nancheck(parseInt($('.sum_fff4').text()));
           // var  sum_others4=nancheck(parseInt($('.sum_others4').text()));
           // var  sum_stock4=nancheck(parseInt($('.sum_stock4').text()));
           // $('.total4').text(sum_building4+sum_plith4+sum_plant4+sum_electric4+sum_fff4+sum_others4+sum_stock4);


             
	});
 
function Approved_fn(val){
    var appr_id=val.value;


        $.ajax({  
                type: "POST",  
                url: "{{URL::to('approve-it')}}?_token={{csrf_token()}}",
                data :{"approved_id":"{{$quote_id}}","is_approve":appr_id},
                success: function(msg){
                  parent=elem.parent();
                    
                   if(msg==1){
                    parent.empty().text('Approved');
                   }
                     

                  }
                   

                });

}




$(document).on('click','#remark_id',function(e){ e.preventDefault();
       var  is_approve=$("input[name='approved']:checked").val();
       var  remark_text=$('#remark_text').val();
        var name="<?php if(Session::get('firstname')){ echo Session::get('firstname'); } ?>";
          if(remark_text!=0 && remark_text!=null){
     $.ajax({  
                type: "POST",  
                url: "{{URL::to('quote-remarks')}}?_token={{csrf_token()}}",
                data :{"quote_id":"{{$quote_id}}","is_approve":is_approve,'remark_text':remark_text},
                success: function(msg){
                   if(msg==1){

                       $("#remark_chat").append('<li class="left clearfix"><span class="chat-img pull-left"><a class="btn btn-info btn-circle btn-lg">'+name.charAt(0).toUpperCase()+'</a> </span><div class="chat-body clearfix"><div class="header"><strong class="primary-font">'+name+'</strong> <small class="pull-right text-muted"><i class="fa fa-clock-o fa-fw"></i> Just Now</small> </div> <p>'+remark_text+'</p></div></li>');

                   }
                    
                  }

                });
        
            }else{

              alert("please fill form carefully...");
            }
     
});


$(document).ready(function () {

        $.ajax({
          method: "POST",
          url: "{{url('quote-remarks-show')}}",
          //dataType: "json",
          data: {"_token": "{{ csrf_token() }}","quote_id":{{$quote_id}}},
          success: function(data) {
            
               $("#remark_chat ").empty();
              $.each(data.query_output, function( key, val ) {
                
                
               if(key%2){ 
                   $("#remark_chat").append('<li class="right clearfix"> <span class="chat-img pull-right"><a class="btn btn-info btn-circle btn-lg">'+val.firstname.charAt(0).toUpperCase()+'</a> </span><div class="chat-body clearfix"><div class="header"><small class=" text-muted"><i class="fa fa-clock-o fa-fw"></i>'+timeDifference(new Date(),new Date(val.datetime_created))+'</small><strong class="pull-right primary-font">'+val.firstname+'</strong></div><p>'+val.remark+'</p></div></li>');
                }else{
                  $("#remark_chat").append('<li class="left clearfix"><span class="chat-img pull-left"><a class="btn btn-success btn-circle btn-lg">'+val.firstname.charAt(0).toUpperCase()+'</a> </span><div class="chat-body clearfix"><div class="header"><strong class="primary-font">'+val.firstname+'</strong> <small class="pull-right text-muted"><i class="fa fa-clock-o fa-fw"></i>'+timeDifference(new Date(),new Date(val.datetime_created))+'</small> </div> <p>'+val.remark+'</p></div></li>');
                }



             });

            
          }
             });

});

</script>


    <style type="text/css">
  

.funkyradio div {
  clear: both;
  overflow: hidden;
}

.funkyradio label {
  width: 100%;
  border-radius: 3px;
  border: 1px solid #D1D3D4;
  font-weight: normal;
}

.funkyradio input[type="radio"]:empty,
.funkyradio input[type="checkbox"]:empty {
  display: none;
}

.funkyradio input[type="radio"]:empty ~ label,
.funkyradio input[type="checkbox"]:empty ~ label {
  position: relative;
  line-height: 2.5em;
  text-indent: 3.25em;
  margin-top: 2em;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.funkyradio input[type="radio"]:empty ~ label:before,
.funkyradio input[type="checkbox"]:empty ~ label:before {
  position: absolute;
  display: block;
  top: 0;
  bottom: 0;
  left: 0;
  content: '';
  width: 2.5em;
  background: #D1D3D4;
  border-radius: 3px 0 0 3px;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label,
.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label {
  color: #888;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label:before,
.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label:before {
  content: '\2714';
  text-indent: .9em;
  color: #C2C2C2;
}

.funkyradio input[type="radio"]:checked ~ label,
.funkyradio input[type="checkbox"]:checked ~ label {
  color: #777;
}

.funkyradio input[type="radio"]:checked ~ label:before,
.funkyradio input[type="checkbox"]:checked ~ label:before {
  content: '\2714';
  text-indent: .9em;
  color: #333;
  background-color: #ccc;
}

.funkyradio input[type="radio"]:focus ~ label:before,
.funkyradio input[type="checkbox"]:focus ~ label:before {
  box-shadow: 0 0 0 3px #999;
}

.funkyradio-default input[type="radio"]:checked ~ label:before,
.funkyradio-default input[type="checkbox"]:checked ~ label:before {
  color: #333;
  background-color: #ccc;
}

.funkyradio-primary input[type="radio"]:checked ~ label:before,
.funkyradio-primary input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #337ab7;
}

.funkyradio-success input[type="radio"]:checked ~ label:before,
.funkyradio-success input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #5cb85c;
}

.funkyradio-danger input[type="radio"]:checked ~ label:before,
.funkyradio-danger input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #d9534f;
}

.funkyradio-warning input[type="radio"]:checked ~ label:before,
.funkyradio-warning input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #f0ad4e;
}

.funkyradio-info input[type="radio"]:checked ~ label:before,
.funkyradio-info input[type="checkbox"]:checked ~ label:before {
  color: #fff;
  background-color: #5bc0de;
}



    </style>