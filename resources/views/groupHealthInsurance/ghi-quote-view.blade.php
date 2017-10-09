@extends('includes.master')
@section('content')
<style>
body {
   background:#ffffff url("images/bg.jpg") no-repeat;
}
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
</style>

 



<!--- Start Body Content   ---->
<div class="container mrg-tp">
   <section class="register">
      <div class="register-full bg-white tbl box-shadow">
        <div class="register-right">
           <div class="register-in">
             <div class="register-form">
                 <div class="fields-grid col-md-12 bg-white">
                   <form action="#" method="post">

                <!-- Table 1 Start  -->           
             <h3 class="text-center heading-1 pad">Calculate Premium</h3> <br>
             <div class="table-responsive">      
                <table width="850" border="0" cellspacing="0" cellpadding="0" class="table table-striped  table-bordered text-right">
                     
                  <tr>
                    <td class="text-right" width="45%"><label class="lbl">Customer Name*</label></td>
                    <td width="50%"> <input type="text" class="form-control input1" name="customername" /></td>
                  </tr>
                  
                  <tr>
                    <td class="text-right"><label class="lbl">Location of Corporate Office*</label></td>
                    <td class="left-pad-none">
                  <div class="col-md-6">
                  <span class="glyphicon glyphicon-chevron-down down-arr"></span>
                  <select class="form-control">
                     <option>MaSelect State</option>
                  </select>
                  </div>
                  <div class="col-md-6">
                  <span class="glyphicon glyphicon-chevron-down down-arr"></span>
                  <select class="form-control">
                     <option>Select City</option>
                  </select>
                  </div>
                  </td>
                  </tr>
                  
                  <tr>
                    <td ><label class="lbl">Industry</label></td>
                    <td class="left-pad-none">
                  <div class="col-md-8 left-pad-none">
                  <span class="glyphicon glyphicon-chevron-down down-arr"></span>
                  <select class="form-control">
                     <option> Select </option>
                  </select>
                  </div>
                  </td>
                  </tr>


                   <tr>
                    <td ><label class="lbl">Service Category</label></td>
                    <td class="left-pad-none">
                  <div class="col-md-8 left-pad-none">
                  <span class="glyphicon glyphicon-chevron-down down-arr"></span>
                  <select class="form-control">
                    <option> Select </option>
                     <option>Cashless Only</option>
                      <option>Reimbursement Only</option>
                  </select>
                  </div>
                  </td>
                  </tr>


                  <tr>
                    <td ><label class="lbl">Type of Cards</label></td>
                    <td class="left-pad-none">
                  <div class="col-md-8 left-pad-none">
                  <span class="glyphicon glyphicon-chevron-down down-arr"></span>
                  <select class="form-control">
                   <option> Select </option>
                     <option>E-cards</option>
                      <option>Physical Cards</option>
                      <option>Both (E-cards + Physical Cards)</option>
                  </select>
                  </div>
                  </td>
                  </tr>






                  
                  <tr>
                    <td>Family Defination*</td>
                    <td><div class="pull-left"><input type="checkbox" /> Self &nbsp; <input type="checkbox" /> Spouse &nbsp; <input type="checkbox" /> Children &nbsp; <input type="checkbox" /> Parents  </div></td>
                  </tr>
                  
                  <tr>
                    <td>No. of Employees*</td>
                    <td><input type="text" class="form-control input1" /></td>
                  </tr>
                  
                  <tr>
                    <td>No. of Spouse*</td>
                    <td><input type="text" class="form-control input1" /></td>
                  </tr>
                  
                   <tr>
                    <td>No. of Children*</td>
                    <td><input type="text" class="form-control input1" /></td>
                  </tr>


                   <tr>
                    <td>No. of Parents*</td>
                    <td><input type="text" class="form-control input1" /></td>
                  </tr>


                  <tr>
                    <td>Total Lives</td>
                    <td><span class="small" style="display: -webkit-box;"> (Max. Limit For No. of Lives-500)</span>
                    <input type="text" class="form-control input1" readonly/>
                    </td>
                  </tr>
                  
                </table>
             </div>
                <!-- Table 1 End  --> 


<!-- Table 2 Start  --> 
      <h3 class="text-center heading-1 pad">Sum Insured</h3>
      <ul class="nav nav-tabs">
        <li class="active center-nav"><a data-toggle="tab" href="#home">Flat</a></li>
        <li><a data-toggle="tab" href="#menu1">Graded</a></li>
      </ul>

      <div class="tab-content">


        <div id="home" class="tab-pane fade in active">
          <p class="text-center"><b>Sum Insured Table</b></p>
        <div class="table-responsive">
              <table width="900" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped tbl-btm-mrg">
              <tr class="bg-danger-bg">
                <th scope="col">Grade</th>
                <th scope="col">Sum Insured</th>
                <th scope="col" width="13%">&nbsp;</th>
                <th scope="col">0-18</th>
                <th scope="col">19-35</th>
                <th scope="col">36-45</th>
                <th scope="col">46-55</th>
                <th scope="col">56-60</th>
                <th scope="col">61-65</th>
                <th scope="col">66-70</th>
                <th scope="col">71-75</th>
                <th scope="col">76-80</th>
                <th scope="col">Total</th>
               <!--  <th scope="col">&nbsp;</th> -->
              </tr>
              
              <tr>
                <td><input type="text"  class="form-control"/></td>
                <td>
                 <select class="form-control">
                  <option>Select</option>
                    
                 </select>
                </td>
                <td>Employee</td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td>0</td>
              <!--   <td><a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-plus-sign"></span> Delete Row</a></td> -->
              </tr>
              
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>Non Parental Dependants</td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td>0</td>
               <!--  <td>&nbsp;</td> -->
              </tr>
              
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>  Parental Dependants</td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td>0</td>
               <!--  <td>&nbsp;</td> -->
              </tr>
            </table>
           <!--  <a href="#" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus-sign"></span> Add Rows</a> -->
      </div>
      </div> <!-- Tab-pane End -->










        <div id="menu1" class="tab-pane fade">
           <p class="text-center"><b>Sum Insured Table</b></p>
            <div class="text-center pad">
        <span class="small">Do want to Upload Annexure? <input type="radio" /> Yes <input type="radio" /> No</span></div>
        
        
        <div class="table-responsive">
              <table width="900" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped tbl-btm-mrg">
              <tr class="bg-danger-bg">
                <th scope="col">Grade</th>
                <th scope="col">Sum Insured</th>
                <th scope="col" width="13%">&nbsp;</th>
                <th scope="col">0-18</th>
                <th scope="col">19-35</th>
                <th scope="col">36-45</th>
                <th scope="col">46-55</th>
                <th scope="col">56-60</th>
                <th scope="col">61-65</th>
                <th scope="col">66-70</th>
                <th scope="col">71-75</th>
                <th scope="col">76-80</th>
                <th scope="col">Total</th>
                <th scope="col">&nbsp;</th>
              </tr>
              
              <tr>
                <td><input type="text"  class="form-control"/></td>
                <td>
                 <select class="form-control">
                    <option>Select</option>
                    <option></option>
                 </select>
                </td>



                <td>Employee</td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td>0</td>
                
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>Non Parental Dependants</td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td>0</td>
                
              </tr>
              <tr class="border-1">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>  Parental Dependants</td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td>0</td>
                
              </tr>


             
    <div id="sum_insured_graded">
                 


           <tr>
                <td><input type="text"  class="form-control"/></td>
                <td>
                 <select class="form-control">
                    <option>Select</option>
                    <option></option>
                 </select>
                </td>
                <td>Employee</td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td>0</td>
                <td><a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-plus-sign"></span> Delete Row</a></td>
          </tr>
          <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>Non Parental Dependants</td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td>0</td>
                <td>&nbsp;</td>
          </tr>
          <tr class="border-1">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>  Parental Dependants</td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td><input type="text" value="0"  class="form-control"/></td>
                <td>0</td>
                <td>&nbsp;</td>
           </tr>





     </div>


              <tr>
               <td><a href="#" class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus-sign"></span> Add Rows</a></td>
              </tr>
            </table>
         </div>
        </div>
      </div>
 <!-- Table 2 End  --> 






<!-- Table 3 Start  --> 
<br>
<h3 class="text-center heading-1 pad">Default Covers</h3>
<div class="col-md-2"></div>
<div class="col-md-8 no-pad">         
  <div class="table-responsive">
       
      <table   border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped">
        <tr>
          <th scope="col" width="40%">Room Rent</th>
          <th scope="col">
        <div class="col-md-6">
        NORMAL 
        
         <select class="form-control">
           <option>1% of Sum Insured</option>
          </select> 
          </div>
        <div class="col-md-6">
        ICU
          <select class="form-control">
        <option>2% of Sum Insured</option>
        </select>
          </div>  
        <p class="small p-text">"If Insured is admitted in a higher category. then insured will bear difference of all medical 
      expenses as in final hospital bill in same proporation."</p>
        </th>
        </tr>
        <tr>
          <td>Disease - Wise Sub Limits</td>
          <td><input type="radio" name="rdo"/> Lower Limits <input type="radio" name="rdo"/> Standard <input type="radio" name="rdo"/>   Higher Limits <input type="radio" name="rdo"/>  No Sub Limits</td>
        </tr>
        <tr>
          <td>Pre - Post Hospitalization cover</td>
          <td>
        <div class="col-md-4">
        <select class="form-control">
           <option>30-60</option>
          </select> 
          </div>
          Day Respectively
        </td>
        </tr>
        <tr>
          <td>3 Day Wait Period Waiver</td>
          <td><input type="radio" name="rdo"/> Applicable <input type="radio" name="rdo"/> Waive off</td>
        </tr>
        <tr>
          <td>Premium for Addition / Deletion of Lives</td>
          <td><input type="radio" name="rdo"/> Short Period Scale <input type="radio" name="rdo"/> Pro Rata Basis</td>
        </tr>
        <tr>
          <td>Ambulance Charges</td>
          <td><span class="pull-left">Rs.</span> <div class="col-md-6"><input type="text" class="form-control"/></div></td>
        </tr>
       
     </table>

   </div>        
</div>  
<!-- Table 3 End  -->             



<!-- Table 4 Start  --> 
<br>
<h3 class="text-center heading-1 pad">Add-On Covers</h3>
<div class="col-md-2"></div>
<div class="col-md-8 no-pad">         
  <div class="table-responsive">
       
      <table   border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped">
         <tr>
           <td colspan="2"><input type="radio" name="rdo"/> Pre-exisiting Disease</td>

         </tr>

        <tr>
          <th scope="col" width="40%">Maternity</th>
          <th scope="col">
        <div class="col-md-6">
        <span><input type="radio" name="rdo"/> 9  Months waiting period</span>
        <span class="small">Normal and C Section Limits (Metro)</span>
         <select class="form-control">
           <option>1% of Sum Insured</option>
          </select> 
          </div>


        <div class="col-md-6">
        <span><input type="radio" name="rdo"/> Maternity form Day 1</span>
        <span class="small">Maternity normal and C Section Limits (Non-Metro)</span>
          <select class="form-control">
        <option>2% of Sum Insured</option>
        </select>
          </div>  
       
        </th>
        </tr>

        <tr>
          <td><input type="radio" name="rdo"/> Baby Day One Cover</td>
          <td><input type="radio" name="rdo"/> Upto maternity Limit 
               <input type="radio" name="rdo"/> Upto the Family Sum Insured 
          </td>
        </tr>

        <tr>
          <td><input type="radio" name="rdo"/> Pre and Post Natal Care <span class="small">(max allowed limit R5 5000)</span></td>
          <td><input type="radio" name="rdo"/> Wthin Maternity Limit 
               <input type="radio" name="rdo"/>Above Maternity Limit
          </td>
        </tr>


      <!--   <tr>
          <td><input type="radio" name="rdo"/> Pre and Post Natal Care</td>
          <td><select class="form-control">
                     <option>Nill</option>
              </select>
          </td>
        </tr> -->

        <tr>
          <td><input type="radio" name="rdo"/> Co-Payment</td>
          <td><select class="form-control">
                     <option>Nill</option>
              </select>
          </td>
        </tr>

         <tr>
          <td><input type="radio" name="rdo"/>Parental Co-payment</td>
          <td><select class="form-control">
                     <option>Nill</option>
              </select>
          </td>
        </tr>

         <tr>
          <td><input type="radio" name="rdo"/> Corporate Floater  </td>
          <td><span class="small"> Corporate Floater limit Overall</span> <input type="text" name="rdo"/>   </td>
        </tr>

         <tr>
           <td colspan="2"><input type="radio" name="rdo"/> Discount for treatment in PPN only </td>

         </tr>
 
       


         <tr>
          <td><input type="radio" name="rdo"/> OPD Expenses </td>
          <td><input type="radio" name="rdo"/>  Amount Per Life
               <input type="radio" name="rdo"/> Amount Per Famili <br>
                 (RS)<input type="input" name="rdo"/> 
          </td>
        </tr>

        <tr>
          <td><input type="radio" name="rdo"/>Additional Loading  </td>
          <td> 
                  <input type="input" name="rdo"/> %
          </td>
        </tr>
          
           <tr>
           <td colspan="2"><input type="radio" name="rdo"/> ID Cards  </td>
         </tr>

         <tr>
          <td>Services Rendered in jammu & Kashmir  </td>
          <td> <input type="radio" name="rdo"/> Yes
               <input type="radio" name="rdo"/> NO <br>
                  
          </td>
        </tr>
       
     </table>

   </div>        
</div>  
<!-- Table 4 End  -->  


<!-- Table 4 Start  --> 
<!-- <div class="col-md-12">
  <h3 class="text-center heading-1 pad mrg-tp">GST Registration Details</h3>  
  <div class="col-md-12 text-center"><p>GST Registered*  &nbsp;&nbsp;<input type="radio" name="rdo"/> Yes <input type="radio" name="rdo"/> No</p></div>
  <div class="col-md-3"></div>
      <div class="col-md-6">
        <h5 class="text-center"><b>Communication State</b></h5>
        <div class="col-md-12">
        <span class="glyphicon glyphicon-chevron-down down-arr"></span>
        <select class="form-control">
             <option>Select</option>
            </select>
            </div>
      </div>        
</div>  --> 
<!-- Table 4 End  --> 
                      
  <div class="col-md-12 mrg-btm">
       <input type="submit" value="Calculate Premium" class="premium-cal-btn" />
  </div>

</form> <!-- Form End -->
</div> <!-- fields-grid End -->
</div> <!-- Register Form End -->
 </div> <!-- Register-In End -->
</div> <!-- register-Right End -->
</div> <!-- Register-Full End -->
</section> <!-- Section End -->
</div> <!-- container End -->




<!--html>
<head>
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
function validate() {
var output = true;
$(".signup-error").html('');
if($("#personal-field").css('display') != 'none') {
  if(!($("#name").val())) {
    output = false;
    $("#name-error").html("Name required!");
  }
  if(!($("#email").val())) {
    output = false;
    $("#email-error").html("Email required!");
  } 
  if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
    $("#email-error").html("Invalid Email!");
    output = false;
  }
}

if($("#password-field").css('display') != 'none') {
  if(!($("#user-password").val())) {
    output = false;
    $("#password-error").html("Password required!");
  } 
  if(!($("#confirm-password").val())) {
    output = false;
    $("#confirm-password-error").html("Confirm password required!");
  } 
  if($("#user-password").val() != $("#confirm-password").val()) {
    output = false;
    $("#confirm-password-error").html("Password not matched!");
  } 
}
return output;
}

$(document).ready(function() {
  $("#next").click(function(){
    var output = validate();
    if(output) {
      var current = $(".active");
      var next = $(".active").next("li");
      if(next.length>0) {
        $("#"+current.attr("id")+"-field").hide();
        $("#"+next.attr("id")+"-field").show();
        $("#back").show();
        $("#finish").hide();
        $(".active").removeClass("active");
        next.addClass("active");
        if($(".active").attr("id") == $("li").last().attr("id")) {
          $("#next").hide();
          $("#finish").show();        
        }
      }
    }
  });
  $("#back").click(function(){ 
    var current = $(".active");
    var prev = $(".active").prev("li");
    if(prev.length>0) {
      $("#"+current.attr("id")+"-field").hide();
      $("#"+prev.attr("id")+"-field").show();
      $("#next").show();
      $("#finish").hide();
      $(".active").removeClass("active");
      prev.addClass("active");
      if($(".active").attr("id") == $("li").first().attr("id")) {
        $("#back").hide();      
      }
    }
  });
});
</script>
</head>
<body>
<div class='tLink'><strong>Tutorial <a href="http://wp.me/p4Se78-8P">Link</a> <a href="http://www.codemarts.com">Home</a> </strong> </div><br/>
<h1>Multi step registration form PHP, JQuery, MySQLi</h1>
<div class="message">You registered successfully. </div>
<ul id="signup-step">
<li id="personal" class="active">Personal Detail</li>
<li id="password">Password</li>
<li id="general">General</li>
</ul>
<form name="frmRegistration" id="signup-form" method="post">
<div id="personal-field">
<label>Name</label><span id="name-error" class="signup-error"></span>
<div><input type="text" name="name" id="name" class="demoInputBox"/></div>
<label>Email</label><span id="email-error" class="signup-error"></span>
<div><input type="text" name="email" id="email" class="demoInputBox" /></div>
</div>
<div id="password-field" style="display:none;">
<label>Enter Password</label><span id="password-error" class="signup-error"></span>
<div><input type="password" name="password" id="user-password" class="demoInputBox" /></div>
<label>Re-enter Password</label><span id="confirm-password-error" class="signup-error"></span>
<div><input type="password" name="confirm-password" id="confirm-password" class="demoInputBox" /></div>
</div>
<div id="general-field" style="display:none;">
<label>Gender</label>
<div>
<select name="gender" id="gender" class="demoInputBox">
<option value="female">Female</option>
<option value="male">Male</option>
</select></div>
</div>
<div>
<input class="btnAction" type="button" name="back" id="back" value="Back" style="display:none;">
<input class="btnAction" type="button" name="next" id="next" value="Next" >
<input class="btnAction" type="submit" name="finish" id="finish" value="Finish" style="display:none;">
</div>
</form>
</body>
<style>body{font-family:tahoma;font-size:12px;}
#signup-step{margin:auto;padding:0;width:53%}
#signup-step li{list-style:none; float:left;padding:5px 10px;border-top:#004C9C 1px solid;border-left:#004C9C 1px solid;border-right:#004C9C 1px solid;border-radius:5px 5px 0 0;}
.active{color:#FFF;}
#signup-step li.active{background-color:#004C9C;}
#signup-form{clear:both;border:1px #004C9C solid;padding:20px;width:50%;margin:auto;}
.demoInputBox{padding: 10px;border: #CDCDCD 1px solid;border-radius: 4px;background-color: #FFF;width: 50%;}
.signup-error{color:#FF0000; padding-left:15px;}
.message {color: #396;font-weight: bold; font-size:16px; margin-left:22%; width: 100%;padding: 10;}
.btnAction{padding: 5px 10px;background-color: #39F;border: 0;color: #FFF;cursor: pointer; margin-top:15px;}
label{line-height:35px;}
h1{
  margin:3px 0;
  font-size:13px;
  text-decoration:underline;
  text-align:center;
}
.tLink{
  font-family:tahoma;
  size:12px;
  padding-left:10px;
  text-align:center;
}</style>
</html-->

@endsection