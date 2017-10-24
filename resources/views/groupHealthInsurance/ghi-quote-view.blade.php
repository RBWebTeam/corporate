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
              <td class="text-right"><label class="lbl">Location of Corporate Office*</label></td>
              <td class="left-pad-none">
                <div class="col-md-6">
                 
                 <input type="hidden" name="stateid" id="stateid" value="">
                 <input type="text"  class="form-control  search_state " placeholder="Search Location " name="state" value="" id="state" required>
               </div>
               <div class="col-md-6">
                
                 <input type="hidden" name="districtid" id="districtid"  >
                 <input type="text" class="form-control  search_district"  placeholder="Search District " name="district" id="district" required >
               </div>
             </td>
           </tr>
           
           <tr>
            <td ><label class="lbl">Industry</label></td>
            <td class="left-pad-none">
              <div class="col-md-8 left-pad-none">
               <input type="hidden" name="industry_id" id="industry_id" value="">
               <input type="text"  class="form-control  search_industry"  placeholder="Search Industry " name="industry" value="" id="industry" required>
             </div>
           </td>
         </tr>

         
         <tr>
          <td ><label class="lbl">Service Category</label></td>
          <td class="left-pad-none">
            <div class="col-md-8 left-pad-none">
              <span class="glyphicon glyphicon-chevron-down down-arr"></span>
              <select class="form-control" name="service_category" id="service_category" required>
                <option value=""> Select </option>
                <option value="1">Cashless Only</option>
                <option value="2">Reimbursement Only</option>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <td ><label class="lbl">Type of Cards</label></td>
          <td class="left-pad-none">
            <div class="col-md-8 left-pad-none">
              <span class="glyphicon glyphicon-chevron-down down-arr"></span>
              <select class="form-control" name="type_of_card" id="type_of_card" required>
               <option value=""> Select </option>
               <option value="1">E-cards</option>
               <option value="2">Physical Cards</option>
               <option value="3">Both (E-cards + Physical Cards)</option>
             </select>
           </div>
         </td>
       </tr>
       <tr>
        <td>Family Defination*</td>
        <td><div class="pull-left">
          <input type="checkbox" onclick=" return f_defination(this);" value="1" /> Self &nbsp; 
          <input type="checkbox" onclick=" return f_defination(this);" value="2" /> Spouse &nbsp;
          <input type="checkbox" onclick=" return f_defination(this);" value="3" /> Children &nbsp;
          <input type="checkbox" onclick=" return f_defination(this);"  value="4" /> Parents  </div></td>
        </tr>
        <tr class="no_of_Employees "><td>No. of Employees*</td><td><input type="text" class="form-control input1" name="no_of_emp"  id="no_of_emp"  oninput=" return Sum_Defination(this,'employees');"  /></td> </tr>
        <tr class="no_of_Spouse"><td>No. of Spouse*</td><td><input type="text" class="form-control input1" name="no_of_spouse" id="no_of_spouse" oninput=" return Sum_Defination(this,'spouse');" /></td>  </tr> 
        <tr class="no_of_Children"> <td>No. of Children*</td><td><input type="text" class="form-control input1" name="no_of_children" id="no_of_children"   oninput=" return Sum_Defination(this,'children');" /></td> </tr>
        <tr class="no_of_Parents"><td>No. of Parents*</td><td><input type="text" class="form-control input1" name="no_of_parents" id="no_of_parents" 
         oninput=" return Sum_Defination(this,'parents');" /></td> </tr>
         <tr class="Total_id">
          <td>Total Lives</td>
          <td><span class="small" style="display: -webkit-box;"> (Max. Limit For No. of Lives-500)</span>
            <input type="text" class="form-control input1" readonly  name="total_daf" id="total_daf" />
          </td>
        </tr>

        
      </table>
    </form> 
  </div>
  <!-- Table 1 End  --> 
</div>  
<button id="calc_primium" class="btn btn-primary btn-md" >Submit</button>
<!--    <button id="activate-step-2" class="btn btn-primary btn-md" style="display: none">Activate Step 2</button> -->
</div>
</div>
</div>
</section>




<form class="container" id="sum_insured_form" name="sum_insured_form" method="POST"> 
  <div class="row setup-content" id="step-2"   >
    <div class="col-xs-12">
      <div class="col-md-12 well text-center">
       <!-- Table 2 Start  --> 
       <h3 class="text-center heading-1 pad">Sum Insured</h3>
       <ul class="nav nav-tabs graded">
        <li class="active center-nav"><a data-toggle="tab" href="#home" id="flat">Flat</a></li>
        <li><a data-toggle="tab" href="#menu1" id="graded">Graded</a></li>
      </ul>
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <p class="text-center"><b>Sum Insured Table</b></p>
          <div class="table-responsive">

           <table width="900" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped tbl-btm-mrg" id="Gradesum_insured_table">
            <tr class="bg-danger-bg">
              <th scope="col">Grade</th>
              <th scope="col">Sum Insured</th>
              <th scope="col" width="13%"> </th>
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
            </tr>
            <tr>
              <td><input type="text"  name="grade" id="grade" class="form-control" onkeypress="return Numeric(event)" required  /></td>
              <td>
               <select class="form-control" name="sum_insured" id="sum_insured" required >
                <option>Select</option>
                <option value="50000">50000</option>
                <option value="100000">100000</option>
                <option value="150000"> 150000</option>
                <option value="200000">200000</option>
                <option value="250000">250000</option>
                <option value="300000"> 300000</option>
                <option value="350000"> 350000</option>
                <option value="400000">400000</option>
                <option value="450000">450000</option>
                <option value="500000"> 500000</option>
                <option value="600000"> 600000</option>
                <option value="700000"> 700000</option>
                <option value="800000"> 800000</option>
                <option value="900000">900000</option>
                <option value="1000000">1000000</option>
              </select>
            </td>
            <td>Employee</td>
            <td><input type="text" name="emp_0_18"  id="emp_0_18"    class="form-control" onkeypress="return Numeric(event);"  oninput=" return Sum_Insured(this,'emp_0_18');"/></td>
            <td><input type="text" name="emp_19_35" id="emp_19_35"   class="form-control" onkeypress="return Numeric(event);" oninput=" return Sum_Insured(this,'emp_19_35');"/></td>
            <td><input type="text" name="emp_36_45" id="emp_36_45"   class="form-control" onkeypress="return Numeric(event);" oninput=" return Sum_Insured(this,'emp_36_45');"/></td>
            <td><input type="text" name="emp_46_55" id="emp_46_55"  class="form-control" onkeypress="return Numeric(event);" oninput=" return Sum_Insured(this,'emp_46_55');"/></td>
            <td><input type="text" name="emp_56_60" id="emp_56_60"   class="form-control" onkeypress="return Numeric(event);" oninput=" return Sum_Insured(this,'emp_56_60');"/></td>
            <td><input type="text" name="emp_61_65" id="emp_61_65"   class="form-control" onkeypress="return Numeric(event);" oninput=" return Sum_Insured(this,'emp_61_65');"/></td>
            <td><input type="text" name="emp_66_70" id="emp_66_70"   class="form-control" onkeypress="return Numeric(event);" oninput=" return Sum_Insured(this,'emp_66_70');"/></td>
            <td><input type="text" name="emp_71_75" id="emp_71_75"   class="form-control" onkeypress="return Numeric(event);" oninput=" return Sum_Insured(this,'emp_71_75');"/></td>
            <td><input type="text" name="emp_76_80" id="emp_76_80"    class="form-control" onkeypress="return Numeric(event);" oninput=" return Sum_Insured(this,'emp_76_80');"/></td>
            <td id=""><input type="text" name="emp_totla"  id="emp_totla" readonly=""></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Non Parental Dependants</td> 
            <td><input type="text" name="npd_0_18"  id="npd_0_18"    class="form-control" onkeypress="return Numeric(event);"  oninput=" return Non_parental_Dep_insured(this,'npd_0_18');"/></td>
            <td><input type="text" name="npd_19_35" id="npd_19_35"   class="form-control" onkeypress="return Numeric(event);" oninput=" return Non_parental_Dep_insured(this,'npd_19_35');"/></td>
            <td><input type="text" name="npd_36_45" id="npd_36_45"   class="form-control" onkeypress="return Numeric(event);" oninput=" return Non_parental_Dep_insured(this,'npd_36_45');"/></td>
            <td><input type="text" name="npd_46_55" id="npd_46_55"  class="form-control" onkeypress="return Numeric(event);" oninput=" return Non_parental_Dep_insured(this,'npd_46_55');"/></td>
            <td><input type="text" name="npd_56_60" id="npd_56_60"   class="form-control" onkeypress="return Numeric(event);" oninput=" return Non_parental_Dep_insured(this,'npd_56_60');"/></td>
            <td><input type="text" name="npd_61_65" id="npd_61_65"   class="form-control" onkeypress="return Numeric(event);" oninput=" return Non_parental_Dep_insured(this,'npd_61_65');"/></td>
            <td><input type="text" name="npd_66_70" id="npd_66_70"   class="form-control" onkeypress="return Numeric(event);" oninput=" return Non_parental_Dep_insured(this,'npd_66_70');"/></td>
            <td><input type="text" name="npd_71_75" id="npd_71_75"   class="form-control" onkeypress="return Numeric(event);" oninput=" return Non_parental_Dep_insured(this,'npd_71_75');"/></td>
            <td><input type="text" name="npd_76_80" id="npd_76_80"    class="form-control" onkeypress="return Numeric(event);" oninput=" return Non_parental_Dep_insured(this,'npd_76_80');"/></td>
            <td id=""><input type="text" name="non_parental_totla"  id="non_parental_totla" readonly=""></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>  Parental Dependants</td>
            <td><input type="text" name="pd_0_18"  id="pd_0_18"    class="form-control" onkeypress="return Numeric(event);"  oninput=" return  parental_Dep_insured(this,'pd_0_18');"/></td>
            <td><input type="text" name="pd_19_35" id="pd_19_35"   class="form-control" onkeypress="return Numeric(event);" oninput=" return  parental_Dep_insured(this,'pd_19_35');"/></td>
            <td><input type="text" name="pd_36_45" id="pd_36_45"   class="form-control" onkeypress="return Numeric(event);" oninput=" return  parental_Dep_insured(this,'pd_36_45');"/></td>
            <td><input type="text" name="pd_46_55" id="pd_46_55"  class="form-control" onkeypress="return Numeric(event);" oninput=" return  parental_Dep_insured(this,'pd_46_55');"/></td>
            <td><input type="text" name="pd_56_60" id="pd_56_60"   class="form-control" onkeypress="return Numeric(event);" oninput=" return  parental_Dep_insured(this,'pd_56_60');"/></td>
            <td><input type="text" name="pd_61_65" id="pd_61_65"   class="form-control" onkeypress="return Numeric(event);" oninput=" return  parental_Dep_insured(this,'pd_61_65');"/></td>
            <td><input type="text" name="pd_66_70" id="pd_66_70"   class="form-control" onkeypress="return Numeric(event);" oninput=" return  parental_Dep_insured(this,'pd_66_70');"/></td>
            <td><input type="text" name="pd_71_75" id="pd_71_75"   class="form-control" onkeypress="return Numeric(event);" oninput=" return  parental_Dep_insured(this,'pd_71_75');"/></td>
            <td><input type="text" name="pd_76_80" id="pd_76_80"    class="form-control" onkeypress="return Numeric(event);" oninput=" return  parental_Dep_insured(this,'pd_76_80');"/></td>
            <td id=""><input type="text" name="parental_totla"  id="parental_totla" readonly=""></td>
          </tr>
        </table> 
      </div>
    </div> 


    <div id="menu1" class="tab-pane fade">
     <p class="text-center"><b>Sum Insured Table</b></p>
           <!--  <div class="text-center pad">
           <span class="small">Do want to Upload Annexure? <input type="radio" /> Yes <input type="radio" /> No</span></div> -->
           <div class="table-responsive">
            <table width="900" border="0" cellspacing="0" cellpadding="0" class="tab_logic table table-bordered table-striped tbl-btm-mrg " id="sum_insured_table">
              <thead>
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
              </thead>
              <tbody id='addr0'>
                <tr >
                  <td><input type="text" data-id="@customer.Id"  name="grade[]" id="sum_grade"  class="form-control grade "   required  /></td>
                  <td>
                    <select class="form-control" name="sum_insured" id="sum_insured" required >
                      <option>Select</option>
                      <option value="50000">50000</option>
                      <option value="100000">100000</option>
                      <option value="150000"> 150000</option>
                      <option value="200000">200000</option>
                      <option value="250000">250000</option>
                      <option value="300000"> 300000</option>
                      <option value="350000"> 350000</option>
                      <option value="400000">400000</option>
                      <option value="450000">450000</option>
                      <option value="500000"> 500000</option>
                      <option value="600000"> 600000</option>
                      <option value="700000"> 700000</option>
                      <option value="800000"> 800000</option>
                      <option value="900000">900000</option>
                      <option value="1000000">1000000</option>
                    </select>
                  </td>
                  <td>Employee</td>
                  <td><input type="text" name="emp_0_18[]"    class="form-control emp_0_18" onkeypress="return Numeric(event);"   /></td>
                  <td><input type="text" name="emp_19_35[]"   class="form-control emp_19_35" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="emp_36_45[]"   class="form-control emp_36_45" onkeypress="return Numeric(event);" /></td>
                  <td><input type="text" name="emp_46_55[]"   class="form-control emp_46_55" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="emp_56_60[]"   class="form-control emp_56_60" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="emp_61_65[]"   class="form-control emp_61_65" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="emp_66_70[]"   class="form-control emp_66_70" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="emp_71_75[]"   class="form-control emp_71_75" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="emp_76_80"     class="form-control emp_76_80" onkeypress="return Numeric(event);"  /></td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>Non Parental Dependants</td>
                  <td><input type="text" name="npd_0_18[]"  id="npd_0_18"    class="form-control npd_0_18" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="npd_19_35[]" id="npd_19_35"   class="form-control npd_19_35" onkeypress="return Numeric(event);" /></td>
                  <td><input type="text" name="npd_36_45[]" id="npd_36_45"   class="form-control npd_36_45" onkeypress="return Numeric(event);" /></td>
                  <td><input type="text" name="npd_46_55[]" id="npd_46_55"   class="form-control  npd_46_55" onkeypress="return Numeric(event);" /></td>
                  <td><input type="text" name="npd_56_60[]" id="npd_56_60"   class="form-control npd_56_60" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="npd_61_65[]" id="npd_61_65"   class="form-control npd_61_65" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="npd_66_70[]" id="npd_66_70"   class="form-control npd_66_70" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="npd_71_75[]" id="npd_71_75"   class="form-control npd_71_75" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="npd_76_80[]" id="npd_76_80"   class="form-control npd_76_80" onkeypress="return Numeric(event);"  /></td>
                  <td>0</td>
                </tr>
                <tr class="border-1">
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>  Parental Dependants</td>
                  <td><input type="text" name="pd_0_18[]"  id="pd_0_18"    class="form-control pd_0_18" onkeypress="return Numeric(event);"   /></td>
                  <td><input type="text" name="pd_19_35[]" id="pd_19_35"   class="form-control pd_19_35" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="pd_36_45[]" id="pd_36_45"   class="form-control pd_36_45" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="pd_46_55[]" id="pd_46_55"  class="form-control  pd_46_55" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="pd_56_60[]" id="pd_56_60"   class="form-control pd_56_60" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="pd_61_65[]" id="pd_61_65"   class="form-control pd_61_65" onkeypress="return Numeric(event);"  ></td>
                  <td><input type="text" name="pd_66_70[]" id="pd_66_70"   class="form-control pd_66_70" onkeypress="return Numeric(event);" /></td>
                  <td><input type="text" name="pd_71_75[]" id="pd_71_75"   class="form-control pd_71_75" onkeypress="return Numeric(event);"  /></td>
                  <td><input type="text" name="pd_76_80[]" id="pd_76_80"    class="form-control pd_76_80" onkeypress="return Numeric(event);" /></td>
                  <td>0</td>
                </tr>
              </tbody>
              <tbody id='addr1'></tbody>

              
              
              
            </table> <!--  <a id="add_row"   class="btn btn-info btn-md"><span class="glyphicon glyphicon-plus-sign"></span> Add Rows</a>  -->
            <a id="add_row" class="btn btn-success pull-left">Add Row</a><a id='delete_row' class="btn btn-danger pull-right">Delete Row</a>

          </div>
        </div>
      </div>

      <button id="sum_insured_id" class="btn btn-primary btn-md" >Submit</button>

      <!-- Table 2 End  --> 
      <!--   <button id="activate-step-3" class="btn btn-primary btn-md">Activate Step 3</button> -->
    </div>
  </div>
</div>

</form>




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
        
        <button id="default_covers_id" class="btn btn-primary btn-md">next-></button>
        <button id="activate-step-4" class="btn btn-primary btn-md">Activate Step 4</button>
      </div>
    </div>
  </div>
</form>
<!-- Table 3 End  -->             


<!-- Table  4  -->    
<form class="container" id="add_on_covers_form" name="default_covers_form" method="POST"> 
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


<script type="text/javascript">

  function nancheck(rows) {
    rows=parseInt(rows);
    return a= isNaN(rows)==true ? 0 : rows;
  }
</script>


<script type="text/javascript">
  
// Activate Next Step
$(document).ready(function() {
  
  var navListItems = $('ul.setup-panel li a'),
  allWells = $('.setup-content');

  allWells.hide();

  navListItems.click(function(e)
  {
    e.preventDefault();
    var $target = $($(this).attr('href')),
    $item = $(this).closest('li');
    
    if (!$item.hasClass('disabled')) {
      navListItems.closest('li').removeClass('active');
      $item.addClass('active');
      allWells.hide();
      $target.show();
    }
  });

  
  $('ul.setup-panel li.active a').trigger('click');
  
    // DEMO ONLY //
    $('#activate-step-2').on('click', function(e) {
      $('ul.setup-panel li:eq(1)').removeClass('disabled');
      $('ul.setup-panel li a[href="#step-2"]').trigger('click');
       // $(this).remove();
     })
    
    $('#activate-step-3').on('click', function(e) {
      $('ul.setup-panel li:eq(2)').removeClass('disabled');
      $('ul.setup-panel li a[href="#step-3"]').trigger('click');
        //$(this).remove();
      })
    
    // $('#activate-step-4').on('click', function(e) {
    //     $('ul.setup-panel li:eq(3)').removeClass('disabled');
    //     $('ul.setup-panel li a[href="#step-4"]').trigger('click');
    //     $(this).remove();
    // })
    
    // $('#activate-step-3').on('click', function(e) {
    //     $('ul.setup-panel li:eq(2)').removeClass('disabled');
    //     $('ul.setup-panel li a[href="#step-3"]').trigger('click');
    //     $(this).remove();
    // })

  });




// Add , Dlelete row dynamically

$(document).ready(function(){
  var i=1;
  $("#add_row").click(function(){
    $('#addr'+i).html('<tr><td><input type="text" data-id="@customer.Id" name="grade[]" id="sum_grade" class="form-control grade"   required /></td><td> <select class="form-control" name="sum_insured" id="sum_insured" required ><option>Select</option><option value="50000">50000</option><option value="100000">100000</option><option value="150000"> 150000</option><option value="200000">200000</option><option value="250000">250000</option><option value="300000"> 300000</option><option value="350000"> 350000</option><option value="400000">400000</option><option value="450000">450000</option><option value="500000"> 500000</option><option value="600000"> 600000</option><option value="700000"> 700000</option><option value="800000"> 800000</option><option value="900000">900000</option><option value="1000000">1000000</option> </select></td><td>Employee</td><td><input type="text" name="emp_0_18[]" class="form-control emp_0_18" onkeypress="return Numeric(event);" /></td><td><input type="text" name="emp_19_35[]" class="form-control emp_19_35" onkeypress="return Numeric(event);" /></td><td><input type="text" name="emp_36_45[]" class="form-control emp_36_45" onkeypress="return Numeric(event);" /></td><td><input type="text" name="emp_46_55[]" class="form-control emp_46_55" onkeypress="return Numeric(event);" /></td><td><input type="text" name="emp_56_60[]" class="form-control emp_56_60" onkeypress="return Numeric(event);" /></td><td><input type="text" name="emp_61_65[]" class="form-control emp_61_65" onkeypress="return Numeric(event);" /></td><td><input type="text" name="emp_66_70[]" class="form-control emp_66_70" onkeypress="return Numeric(event);" /></td><td><input type="text" name="emp_71_75[]" class="form-control emp_71_75" onkeypress="return Numeric(event);" /></td><td><input type="text" name="emp_76_80" class="form-control emp_76_80" onkeypress="return Numeric(event);" /></td><td>0</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>Non Parental Dependants</td><td><input type="text" name="npd_0_18[]" id="npd_0_18" class="form-control npd_0_18" onkeypress="return Numeric(event);" /></td><td><input type="text" name="npd_19_35[]" id="npd_19_35" class="form-control npd_19_35" onkeypress="return Numeric(event);" /></td><td><input type="text" name="npd_36_45[]" id="npd_36_45" class="form-control npd_36_45" onkeypress="return Numeric(event);" /></td><td><input type="text" name="npd_46_55[]" id="npd_46_55" class="form-control npd_46_55" onkeypress="return Numeric(event);" /></td><td><input type="text" name="npd_56_60[]" id="npd_56_60" class="form-control npd_56_60" onkeypress="return Numeric(event);" /></td><td><input type="text" name="npd_61_65[]" id="npd_61_65" class="form-control npd_61_65" onkeypress="return Numeric(event);" /></td><td><input type="text" name="npd_66_70[]" id="npd_66_70" class="form-control npd_66_70" onkeypress="return Numeric(event);" /></td><td><input type="text" name="npd_71_75[]" id="npd_71_75" class="form-control npd_71_75" onkeypress="return Numeric(event);" /></td><td><input type="text" name="npd_76_80[]" id="npd_76_80" class="form-control npd_76_80" onkeypress="return Numeric(event);" /></td><td>0</td></tr><tr class="border-1"><td>&nbsp;</td><td>&nbsp;</td><td> Parental Dependants</td><td><input type="text" name="pd_0_18[]" id="pd_0_18" class="form-control pd_0_18" onkeypress="return Numeric(event);" /></td><td><input type="text" name="pd_19_35[]" id="pd_19_35" class="form-control pd_19_35" onkeypress="return Numeric(event);" /></td><td><input type="text" name="pd_36_45[]" id="pd_36_45" class="form-control pd_36_45" onkeypress="return Numeric(event);" /></td><td><input type="text" name="pd_46_55[]" id="pd_46_55" class="form-control pd_46_55" onkeypress="return Numeric(event);" /></td><td><input type="text" name="pd_56_60[]" id="pd_56_60" class="form-control pd_56_60" onkeypress="return Numeric(event);" /></td><td><input type="text" name="pd_61_65[]" id="pd_61_65" class="form-control pd_61_65" onkeypress="return Numeric(event);" ></td><td><input type="text" name="pd_66_70[]" id="pd_66_70" class="form-control pd_66_70" onkeypress="return Numeric(event);" /></td><td><input type="text" name="pd_71_75[]" id="pd_71_75" class="form-control pd_71_75" onkeypress="return Numeric(event);" /></td><td><input type="text" name="pd_76_80[]" id="pd_76_80" class="form-control pd_76_80" onkeypress="return Numeric(event);" /></td><td>0</td></tr>');

    $('.tab_logic').append('<tbody id="addr'+(i+1)+'"></tbody>');

    i++; 
  });
$("#delete_row").click(function(){
 if(i>1){
   $("#addr"+(i-1)).html('');
   i--;
 }
});

});


</script>

<script type="text/javascript">    
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

$(".search_industry").autocomplete({ 
  source: function(request, response) {  
    $.ajax({
      url: "{{ route('search_industry_ghi') }}",
      dataType: "json",
      data: {
        term :request.term,
      },
      success: function(data) {  response(data);}
    });
  },
  change: function (event, ui) {  
    if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
     $(".search_industry").attr("data-value",""); 
     $("#industry").val('');
     
     alert("Please Select Industry");
   }else{
     $(".search_industry").attr("data-value", ui.item.datavalue);
     $("#industry_id").val(ui.item.datavalue);       
   }
 }    
});


</script>


<script type="text/javascript">
  $('.no_of_Employees').hide();
  $('.no_of_Spouse').hide();
  $('.no_of_Children').hide();
  $('.no_of_Parents').hide();
  $('.Total_id').hide();
// var total=0;
// var total1=0; 
// var total2=0; 
// var total3=0; 
// var total4=0; 
var incr=0;


function initialize(){
 this.total=0;
 this.total1=0;
 this.total2=0;
 this.total3=0;
 this.total4=0;


 
}


var int=0;
var initi=new  initialize();
function Sum_Defination(vl,el){
  

  if(el=='employees'){
    initi.total1=nancheck(vl.value);
  }else if(el=='spouse'){
   initi.total2=nancheck(vl.value);
 }else if(el=='children'){
   initi.total3=nancheck(vl.value);
 }else if(el=='parents'){
   initi.total4=nancheck(vl.value);
 }
 initi.total=parseInt(initi.total1)+parseInt(initi.total2)+parseInt(initi.total3)+parseInt(initi.total4);
 $('#total_daf').val(initi.total);
 

}


function f_defination(element){
        // alert(element.checked = !element.checked);
        if(element.value==1){
          if(element.checked){
           $('.no_of_Employees').show();
         }else{
          $('.no_of_Employees').hide();
          $('#no_of_emp').val('');    
        }}else if(element.value==2){
         if(element.checked){
           $('.no_of_Spouse').show();
         }else{
          $('.no_of_Spouse').hide();
          $('#no_of_spouse').val('');   
        }}else if(element.value==3){
          if(element.checked){
           $('.no_of_Children').show();
         }else{
          $('.no_of_Children').hide();
          $('#no_of_children').val('');                         
        }}else if(element.value==4){
         if(element.checked){
          $('.no_of_Parents').show();
        }else{
          $('.no_of_Parents').hide();
          $('#no_of_parents').val('');
          
          
        }
      }
      $('.Total_id').show();
      incr++;







    }
    
    
    


  </script>

  <!-- form 1 -->
  <script type="text/javascript">
   $('#calc_primium').click(function(e){ e.preventDefault();  
     validator=$('#calculate_primium').validate();
     if(! $('#calculate_primium').valid()){
           //validator.errorList[0].element.focus();
           $.each(validator.errorMap, function (index, value) {
          // console.log('Id: ' + index + ' Message: ' + value);
          $('#'+index).focus();
          return false;
        });
           return false;
         }else{
           
          if(incr!=0){
            $('ul.setup-panel li:eq(1)').removeClass('disabled');
            $('ul.setup-panel li a[href="#step-2"]').trigger('click');
         //$(this).remove();
       }else{

        alert("Please Select Family Defination..");
      }

      
      
    }

  }); </script>


   <script type="text/javascript">
     var   emp_0_18=0,emp_19_35=0, emp_36_45=0,emp_46_55=0, emp_56_60=0,  emp_61_65=0,  emp_66_70=0, emp_71_75=0,emp_76_80=0;
     function Sum_Insured(val,ele){
       if(ele=='emp_0_18'){
         emp_0_18=parseInt(nancheck(val.value));
       }else if(ele=='emp_19_35'){
        emp_19_35=parseInt(nancheck(val.value));
      }else if(ele=='emp_36_45'){
       emp_36_45=parseInt(nancheck(val.value));
     }else if(ele=='emp_46_55'){
      emp_46_55=parseInt(nancheck(val.value));
      
    }else if(ele=='emp_56_60'){
     emp_56_60=parseInt(nancheck(val.value));
     
   }else if(ele=='emp_61_65'){
     emp_61_65=parseInt(nancheck(val.value));
     
   }else if(ele=='emp_66_70'){
     emp_66_70=parseInt(nancheck(val.value));
     
   }else if(ele=='emp_71_75'){
     emp_71_75=parseInt(nancheck(val.value));
     
   }else if(ele=='emp_76_80'){
     emp_76_80=parseInt(nancheck(val.value));
     
   }
   
   
   var emp_totla=emp_0_18+emp_19_35+emp_36_45+emp_46_55+ emp_56_60+emp_61_65+emp_66_70+emp_71_75+emp_76_80;
   
   $('#emp_totla').val(emp_totla);
   
   
   

 }

 var   npd_0_18=0,npd_19_35=0, npd_36_45=0,npd_46_55=0, npd_56_60=0,  npd_61_65=0,  npd_66_70=0, npd_71_75=0,npd_76_80=0;
 function Non_parental_Dep_insured(val,ele){
  if(ele=='npd_0_18'){
   npd_0_18=parseInt(nancheck(val.value));
 }else if(ele=='npd_19_35'){
  npd_19_35=parseInt(nancheck(val.value));
}else if(ele=='npd_36_45'){
 npd_36_45=parseInt(nancheck(val.value));
}else if(ele=='npd_46_55'){
  npd_46_55=parseInt(nancheck(val.value));
}else if(ele=='npd_56_60'){
 npd_56_60=parseInt(nancheck(val.value));
}else if(ele=='npd_61_65'){
 npd_61_65=parseInt(nancheck(val.value));
}else if(ele=='npd_66_70'){
 npd_66_70=parseInt(nancheck(val.value));
}else if(ele=='npd_71_75'){
 npd_71_75=parseInt(nancheck(val.value));
}else if(ele=='npd_76_80'){
 npd_76_80=parseInt(nancheck(val.value));
 
}

var npd_totla=npd_0_18+npd_19_35+npd_36_45+npd_46_55+npd_56_60+npd_61_65+npd_66_70+npd_71_75+npd_76_80;

$('#non_parental_totla').val(npd_totla);
}

var   pd_0_18=0,pd_19_35=0,pd_36_45=0,pd_46_55=0,pd_56_60=0,pd_61_65=0,pd_66_70=0,pd_71_75=0,pd_76_80=0;
function parental_Dep_insured(val,ele){

   // console.log(val.value);
   if(ele=='pd_0_18'){
     pd_0_18=parseInt(nancheck(val.value));
   }else if(ele=='pd_19_35'){
     pd_19_35=parseInt(nancheck(val.value));
   } else if(ele=='pd_36_45'){
     pd_36_45=parseInt(nancheck(val.value));
   }else if(ele=='pd_46_55'){
    pd_46_55=parseInt(nancheck(val.value));
  }else if(ele=='pd_56_60'){
   pd_56_60=parseInt(nancheck(val.value));
 }else if(ele=='pd_61_65'){
   pd_61_65=parseInt(nancheck(val.value));
 }else if(ele=='pd_66_70'){
   pd_66_70=parseInt(nancheck(val.value));
 }else if(ele=='pd_71_75'){
   pd_71_75=parseInt(nancheck(val.value));
 }else if(ele=='pd_76_80'){
   pd_76_80=parseInt(nancheck(val.value));
   
 }

 var   pd_totla=pd_0_18+pd_19_35+pd_36_45+pd_46_55+pd_56_60+pd_61_65+pd_66_70+pd_71_75+pd_76_80;
           //  console.log(pd_totla);
           
           $('#parental_totla').val(pd_totla);
         }



         
//var total=0;
var temp=0;
$(document).ready(function () {
  $(document).on("input", "#sum_insured_table input",function(){
    var $tr = $(this).closest('tr'); 
    Sum_Insured_Table($tr);
  }).trigger('input');  
});

function Sum_Insured_Table($tr){
 var tot = 0;  
 $('input', $tr).each(function(index,c) { 
  if($(this).attr('id')=="sum_grade"){
  }else{
    tot += Number(nancheck($(this).val())) || 0; 
  }
  $('td:last', $tr).text(tot); 

  
  
}); 
 
 // total+=tot;
}


</script>
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
})
  $('#activate-step-2').show();
  $('#sum_insured_id').click(function(e){ e.preventDefault();


    $("table#sum_insured_table tr").each(function( i ) {
      $("td:last", this).each(function( j ) {
    //console.log( $(this).text());
    addflat+=Number(nancheck($(this).text()));
  });
    });
    $("table#Gradesum_insured_table tr ").each(function( i ) {
      $("td:last", this).each(function( j ) {
   //  console.log($(this).find('input').val());
   addgraded+=Number(nancheck($(this).find('input').val()));
 });

    });

    
    if(initi.total!=0 &&initi.total==addflat && flat_graded==1){
      alert(addflat);
      $('ul.setup-panel li:eq(2)').removeClass('disabled');
      $('ul.setup-panel li a[href="#step-3"]').trigger('click');
        //$(this).remove();
      }else if(initi.total!=0 && initi.total==addgraded && flat_graded==0){
        $('ul.setup-panel li:eq(2)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-3"]').trigger('click');
        //$(this).remove();
        alert(addgraded);
      }else{
        
        alert("Please fill form carefully");
      }

// console.log(initi.total+"+"+flat_graded+"="+addflat);
$('#default_covers_id').click(function(e){ e.preventDefault();
  validator=$('#default_covers_form').validate();
  if(! $('#default_covers_form').valid()){
    $.each(validator.errorMap, function (index, value) {
     $('#'+index).focus();
     return false;
   });
    return false;
  }else{

    $('ul.setup-panel li:eq(3)').removeClass('disabled');
    $('ul.setup-panel li a[href="#step-4"]').trigger('click');
        //$(this).remove();

        alert("default_covers_id");

      }
    });


$('#add_on_covers_id').click(function(e){ e.preventDefault();
 validator=$('#add_on_covers_form').validate();
 if(! $('#add_on_covers_form').valid()){
  $.each(validator.errorMap, function (index, value) {
   $('#'+index).focus();
   return false;
 });
  return false;
}else{
 alert($('#calculate_primium').serialize());
 alert($('#sum_insured_form').serialize());
 alert($('#default_covers_form').serialize());
 alert($('#add_on_covers_form').serialize());

}
});



addgraded=0;
addflat=0;

});
  

</script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

@endsection