
<!DOCTYPE html>
<html lang="en">
  <head>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
 
 <div class="container" >
 <br>
    <nav class="navbar">
    <div class="col-sm-12"> <p class="h2">LANDMARK INSURANCE BROKER PRIVATE LIMITED</p> <img src="http://localhost/corporate/public/images/landmark.png" width="80"  class="pull-right" style="margin-top:-50px; position: absolute; right:0px;z-index:1000;"> </div>
     
    </nav>
 

      <div class="row">
        <div class="col-md-10 ">
          <h3 class="text-center"><strong>Standard Fire and Special Perils</strong> </h3>
        </div>
     <div class="col-md-12"> 
    <label class="control-label col-sm-2"  > </label>
    <div class="col-sm-8">
   <table class="table table-bordered table-striped">
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
          <h3 class="text-center"><strong>Comparision </strong></h3>
    </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr class="bg-info">
        <th>Sl.</th>
        <th>Interest to be covered </th>
        @foreach($loan_detail as $key=> $val)
         <th class="company_name{{$key}}">{{ $val->company_name}} </th>
        @endforeach
      </tr>
    </thead>
    <tbody>

   @if($query_master->sum_building!=0)
       <tr>
        <td>1</td>
        <td>Sum Insured for Building</td>
        <td class="sum_building0">{{$query_master->sum_building}}</td>
        <td class="sum_building1">{{$query_master->sum_building}}</td>
        <td class="sum_building2">{{$query_master->sum_building}}</td>
        <td class="sum_building3">{{$query_master->sum_building}}</td>
        <td class="sum_building4">{{$query_master->sum_building}}</td>
      </tr>@endif 

       @if($query_master->sum_plith!=0)
       <tr>
        <td>2</td>
        <td>Sum Insured for Plinth and Foundation</td>
        <td class="sum_plith0">{{$query_master->sum_plith}}</td>
        <td class="sum_plith1">{{$query_master->sum_plith}}</td>
        <td class="sum_plith2">{{$query_master->sum_plith}}</td>
        <td class="sum_plith3">{{$query_master->sum_plith}}</td>
        <td class="sum_plith4">{{$query_master->sum_plith}}</td>
      </tr> @endif 
      
      @if($query_master->sum_plant!=0)
      <tr>
        <td>3</td>
        <td>Sum Insured for Plant and Machinery</td>
        <td class="sum_plant0">{{$query_master->sum_plant}}</td>
        <td class="sum_plant1">{{$query_master->sum_plant}}</td>
        <td class="sum_plant2">{{$query_master->sum_plant}}</td>
        <td class="sum_plant3">{{$query_master->sum_plant}}</td>
        <td class="sum_plant4">{{$query_master->sum_plant}}</td>
      </tr> @endif 

       @if($query_master->sum_electric!=0)
       <tr>
        <td>4</td>
        <td >Sum Insured for Electrical Fitting and Installations</td>
        <td class="sum_electric0">{{$query_master->sum_electric}}</td>
        <td class="sum_electric1">{{$query_master->sum_electric}}</td>
        <td class="sum_electric2">{{$query_master->sum_electric}}</td>
        <td class="sum_electric3">{{$query_master->sum_electric}}</td>
        <td class="sum_electric4">{{$query_master->sum_electric}}</td>
      </tr> @endif 
       
       @if($query_master->sum_fff!=0)
       <tr>
        <td>5</td>
        <td>Sum Insured for Furnitures,Fixtures and Fittings</td>
        <td class="sum_fff0">{{$query_master->sum_fff}}</td>
        <td class="sum_fff1">{{$query_master->sum_fff}}</td>
        <td class="sum_fff2">{{$query_master->sum_fff}}</td>
        <td class="sum_fff3">{{$query_master->sum_fff}}</td>
        <td class="sum_fff4">{{$query_master->sum_fff}}</td>
      </tr> @endif 
       
       @if($query_master->sum_others!=0)
       <tr>
        <td>6</td>
        <td>Sum Insured for Stock(Stocks other than stocks in Process)</td>
        <td class="sum_others0">{{$query_master->sum_others}}</td>
        <td class="sum_others1">{{$query_master->sum_others}}</td>
        <td class="sum_others2">{{$query_master->sum_others}}</td>
        <td class="sum_others3">{{$query_master->sum_others}}</td>
        <td class="sum_others4">{{$query_master->sum_others}}</td>
      </tr> @endif 
     
      @if($query_master->sum_stock!=0)
      <tr>
        <td>7</td>
        <td>Sum Insured for Stocks in Process</td>
        <td class="sum_stock0">{{$query_master->sum_stock}}</td>
        <td class="sum_stock1">{{$query_master->sum_stock}}</td>
        <td class="sum_stock2">{{$query_master->sum_stock}}</td>
        <td class="sum_stock3">{{$query_master->sum_stock}}</td>
        <td class="sum_stock4">{{$query_master->sum_stock}}</td>
      </tr> @endif 

      <tr>
        <td> </td>
        <td>Total</td>
        <td class="total0"> </td>
        <td class="total1"> </td>
        <td class="total2"> </td>
        <td class="total3"> </td>
        <td class="total4"> </td>
      </tr>
    </tbody>
  </table> 
<br><br> 

<div class="col-md-10 ">
     <h3 class="text-center"><strong>Coverage</strong> </h3>
 </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr class="bg-info">
        <th> </th>
        @foreach($loan_detail as $key=> $val)
         <th class="company_name{{$key}}">{{ $val->company_name}} </th>
        @endforeach
      </tr>
    </thead>
    <tbody>

            @if($query_master->is_stfi!=0)
       <tr>
        <td>STFI</td>
        <td class="is_stfi0">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi3">Yes</td>
        <td class="is_stfi4">Yes</td>
      </tr > @endif 

      <tr> @if($query_master->is_earthquake!=0)
        <td>Earthquake</td>
        <td class="is_stfi0">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi3">Yes</td>
        <td class="is_stfi4">Yes</td>
      </tr > @endif 

      <tr> @if($query_master->is_terrorism!=0)
        <td>Terrorism</td>
        <td class="is_stfi0">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi3">Yes</td>
        <td class="is_stfi4">Yes</td>
      </tr > @endif 


      <tr> @if($query_master->is_escalation!=0)
        <td>Escalation </td>
        <td class="is_stfi0">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi3">Yes</td>
        <td class="is_stfi4">Yes</td>
      </tr > @endif 

      <tr> @if($query_master->is_omission!=0)
        <td>Omission to Insure additions, alterations or extensions</td>
        <td class="is_stfi0">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi3">Yes</td>
        <td class="is_stfi4">Yes</td>
      </tr > @endif 


      <tr> @if($query_master->is_lossrent!=0)
        <td>Loss Of Rent clause</td>
        <td class="is_stfi0">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi3">Yes</td>
        <td class="is_stfi4">Yes</td>
      </tr > @endif 


      <tr> @if($query_master->is_accommodation!=0)
        <td>Insurance Of Additional Expenses of Rent For An Alternative Accommodation</td>
        <td class="is_stfi0">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi3">Yes</td>
        <td class="is_stfi4">Yes</td>
      </tr > @endif 


      <tr> @if($query_master->is_architect!=0)
        <td>Architects, Surveyors and Consulting Engineers Fees ( in excess of 3% claim amount)</td>
        <td class="is_stfi0">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi3">Yes</td>
        <td class="is_stfi4">Yes</td>
      </tr > @endif 


      <tr> @if($query_master->is_removedebris!=0)
        <td>Removal of Debris (in excess of 1% claim amount)</td>
        <td class="is_stfi0">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi3">Yes</td>
        <td class="is_stfi4">Yes</td>
      </tr > @endif 


      <tr> @if($query_master->is_spontcomb!=0)
        <td>Spontaneous Combustion</td>
        <td class="is_stfi0">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi3">Yes</td>
        <td class="is_stfi4">Yes</td>
      </tr > @endif 


      <tr> @if($query_master->is_startup!=0)
        <td>Start up Expenses</td>
        <td class="is_stfi0">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi3">Yes</td>
        <td class="is_stfi4">Yes</td>
      </tr > @endif 


      <tr> @if($query_master->is_earthquake!=0)
        <td>Earthquake</td>
        <td class="is_stfi0">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi3">Yes</td>
        <td class="is_stfi4">Yes</td>
      </tr > @endif 


      <tr> @if($query_master->is_floater!=0)
        <td>Floater Clause</td>
        <td class="is_stfi0">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi3">Yes</td>
        <td class="is_stfi4">Yes</td>
      </tr > @endif 

      <tr> @if($query_master->is_impactdamage!=0)
        <td>Impact Damage due to Insured's own Rail/Road Vehicles, Fork lifts, Cranes, Stackers and the like and articles dropped therefrom.</td>
        <td class="is_stfi0">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi">Yes</td>
        <td class="is_stfi3">Yes</td>
        <td class="is_stfi4">Yes</td>
      </tr > @endif 
    </tbody>
  </table> 


<br><br> 
<div class="col-md-10 ">
     <h3 class="text-center"><strong>Premium Details</strong> </h3>
 </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr class="bg-info">
        <th></th>
        @foreach($loan_detail as $key=> $val)
         <th class="company_name{{$key}}">{{ $val->company_name}} </th>
        @endforeach
      </tr>
    </thead>
    <tbody>
 

         
          <tr>
          <td class="">Premium </td>
           @foreach($loan_detail as $key=> $val)
            <td class="">{{$val->premium_amt}}</td>
           @endforeach
         </tr>
         

         <tr>
            <td class=" ">Service Tax </td>
           @foreach($loan_detail as $key=> $val)
            <td class="">{{$val->gst_amt}}</td>
           @endforeach
         </tr>

         <tr>
            <td class=" ">Net Payable </td>
           @foreach($loan_detail as $key=> $val)
            <td class="">{{$val->net_premium_amt}}</td>
           @endforeach
         </tr>
      
        
    </tbody>
  </table> 

<br><br> 
<div class="col-md-10 ">
     <h3 class="text-center"><strong>Deductible / Excess</strong> </h3>
 <p>Upto 10 crs Sum Insured – 5% of Claim amount subject to minimum of Rs. 10000/	</p>			
<p>Above 10 crs and Upto 100 crs – 5% of Claim amount subject to miniumum of Rs. 25000/-	</p>			
<p>Above 100 crs – 5% of Claim Amount subject to minimum of Rs. 5,00,000/-	</p>			
 </div>
<br><br> 
<div class="col-md-10 ">
    <h3 class="text-center"><strong>Warranties & Clauses:</strong> </h3>
    

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
    <h3 class="text-center"><strong>Loss or damage resulting from:</strong> </h3>
    
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
</div>
  </div>
</div>    
</div>
<hr>
</div>  


 

  </body>
</html>

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
         
           var  sum_building1=nancheck(parseInt($('.sum_building1').text()));
           var  sum_plith1=nancheck(parseInt($('.sum_plith1').text()));
           var  sum_plant1=nancheck(parseInt($('.sum_plant1').text()));
           var  sum_electric1=nancheck(parseInt($('.sum_electric1').text()));
           var  sum_fff1=nancheck(parseInt($('.sum_fff1').text()));
           var  sum_others1=nancheck(parseInt($('.sum_others1').text()));
           var  sum_stock1=nancheck(parseInt($('.sum_stock1').text()));
           $('.total1').text(sum_building1+sum_plith1+sum_plant1+sum_electric1+sum_fff1+sum_others1+sum_stock1);

           var  sum_building2=nancheck(parseInt($('.sum_building2').text()));
           var  sum_plith2=nancheck(parseInt($('.sum_plith2').text()));
           var  sum_plant2=nancheck(parseInt($('.sum_plant2').text()));
           var  sum_electric2=nancheck(parseInt($('.sum_electric2').text()));
           var  sum_fff2=nancheck(parseInt($('.sum_fff2').text()));
           var  sum_others2=nancheck(parseInt($('.sum_others2').text()));
           var  sum_stock2=nancheck(parseInt($('.sum_stock2').text()));
           $('.total2').text(sum_building2+sum_plith2+sum_plant2+sum_electric2+sum_fff2+sum_others2+sum_stock2);

           var  sum_building3=nancheck(parseInt($('.sum_building3').text()));
           var  sum_plith3=nancheck(parseInt($('.sum_plith3').text()));
           var  sum_plant3=nancheck(parseInt($('.sum_plant3').text()));
           var  sum_electric3=nancheck(parseInt($('.sum_electric3').text()));
           var  sum_fff3=nancheck(parseInt($('.sum_fff3').text()));
           var  sum_others3=nancheck(parseInt($('.sum_others3').text()));
           var  sum_stock3=nancheck(parseInt($('.sum_stock3').text()));
           $('.total3').text(sum_building3+sum_plith3+sum_plant3+sum_electric3+sum_fff3+sum_others3+sum_stock3);

           var  sum_building4=nancheck(parseInt($('.sum_building4').text()));
           var  sum_plith4=nancheck(parseInt($('.sum_plith4').text()));
           var  sum_plant4=nancheck(parseInt($('.sum_plant4').text()));
           var  sum_electric4=nancheck(parseInt($('.sum_electric4').text()));
           var  sum_fff4=nancheck(parseInt($('.sum_fff4').text()));
           var  sum_others4=nancheck(parseInt($('.sum_others4').text()));
           var  sum_stock4=nancheck(parseInt($('.sum_stock4').text()));
           $('.total4').text(sum_building4+sum_plith4+sum_plant4+sum_electric4+sum_fff4+sum_others4+sum_stock4);


             
	});
</script>
