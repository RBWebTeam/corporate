<!DOCTYPE html>
<html class="no-js"> 
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"> -->
    <title><?php if(isset($title))echo $title; else echo "RupeeBoss-Apply for a Loan";  ?></title>
    <!-- <meta name="google-signin-client_id" content="752185558821-9vlmac53np7bgdo3kn9d2e5ft39t7gud.apps.googleusercontent.com"> -->
    <meta name="msvalidate.01" content="3744048BDD61F7FE6837BD664522C8F9" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php if(isset($description))echo $description; else echo "RupeeBoss provides all kind of loans."; ?>" />
    <meta name="keywords" content="<?php if(isset($keywords))echo $keywords; else echo "rupeeboss loans getloan expressloan"; ?>" />
    <meta name="p:domain_verify" content="05d8ec5b6a704fa5b78abd5f636fdc24"/>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{URL::to('images/rb_fav.png')}}">
    <!-- <link rel="stylesheet" href="{{URL::to('fonts/Raleway.css')}}" type="text/css"> -->
    <!-- Animate.css -->

    <link  rel="stylesheet" type="text/css" href="{{URL::to('css/mysite.css')}}"/>






 <link href="{{URL::to('css/freshslider.min.css')}}" rel="stylesheet" type="text/css" /> 

    <!-- Modernizr JS -->
    <!-- <link rel="manifest" href="{{URL::to('extension/manifest.json')}}"> -->
    @if( request()->url() == url('/') )
     <link rel="canonical" href="https://www.rupeeboss.com/" />
    @else
         <link rel="canonical" href="{!! request()->fullUrl() !!}"  />
    @endif
    
    
<meta name="google-site-verification" content="WX6V_57BIW9ttEdt8-lFFx9AWksmU0OzrSB8CqEW084" />
<script type="application/ld+json">
 { 
 "@context" : "http://schema.org",
 "@type" : "Organization",
 "name" : "Rupeeboss Financial Services Pvt Ltd",
 "url" : "http://www.rupeeboss.com/",
 "logo": "http://www.rupeeboss.com/images/logo.png",
 "email": "wecare@rupeeboss.com",
 "telephone": "1800-267-629-6",
 "sameAs" : [ 
 "https://www.facebook.com/rupeeboss",
 "https://www.linkedin.com/company/rupeeboss.com",
 "https://plus.google.com/113191059621763008376",
 "https://twitter.com/rupeeboss",
 "https://www.instagram.com/rupeeboss/"
 ]
 }

 </script>
 
    <body>
<style>
   td {text-transform:uppercase; vertical-align: middle !important;}
   input {border:none;background:#f1f1f1;}
</style>

<div class="container" id="fh5co-hero">
<form id="corporate_insurance" name="corporate_insurance" method="POST">
 {{ csrf_field() }}
     <div class="fh5co-contact animate-box">
                         <div>
                          <div class="row">
                        <center>
                       <a href="#"><img src="{{url('images/landmark-logo.png')}}" alt="Landmark Insurance" title="Landmark" width="140"></a>
                        <h1 class="loan-head">Fire Calculator</h1>
                      </center>
                      <div class="col-md-12">
                      <div class="col-md-2"></div>

                      <div class="col-md-8">
                    
                      <!-- <h2 class="pad">SFSP QUOTE</h2> -->
                      <div>
                      <table class="table table-striped table-bordered white-bg box-shadow comp-pg">
                       
                       <tr>
                          <td width="60%">Date</td>
                          <td width="38%"><input type="text" id="date" name="date" required class="newsletter-name lastReporteddate1"/></td>
                          
                       </tr>
                       <tr>
                          <td>Client</td>
                          <!-- <input type="hidden" name="company_name" id="company_name" value="">
                          <td><input type="text" name="company" id="company" class="newsletter-name search_company"/></td>  -->
                          <td><input type="text" name="company_name" id="company_name" class="newsletter-name"/></td>
                       </tr>
                       <tr>
                          <td>Correspondence Address</td>
                          <td><input type="text" name="address" id="address" class="newsletter-name"/></td> 
                       </tr>
                       <tr>
                          <td>Risk Location</td>
                          <td><input type="text" name="location" id="location" class="newsletter-name"/></td> 
                       </tr>
                       <tr>
                          <td>State</td>
                          <td>
                          <input type="hidden" name="stateid" id="stateid" value="">
                          <input type="text" class="newsletter-name search_state " name="state" value="" id="state">
                          </td> 
                       </tr>
                       <tr>
                          <td>District</td>
                          <td>
                           <input type="hidden" name="districtid" id="districtid" value="">
                          <input type="text" class="newsletter-name search_district" name="district" id="district" value="">
                          <!-- <div id="district"></div> -->
                          </td> 
                       </tr>
                       <tr>
                          <td>Occupied As</td>
                          <td>
                          <input type="hidden" name="occ_id" id="occ_id" value="">
                          <input type="text" class="newsletter-name search_occupied " name="occ" value="" id="occ" required >
                          </td> 
                       </tr>
                      
                       <!-- <tr>
                          <td>USGI Policy No.</td>
                          <td><input type="text" name="usgi_no" id="usgi_no" onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td> 
                       </tr> -->
                       <tr>
                          <td>Business Type</td>
                          <td><select class="newsletter-name drop-arr" name="business_type" id="business_type" required>
                        <option value="" >Select Proposal</option>
                        <option value="Fresh Proposal">Fresh Proposal</option>
                        <option value="Renewal Proposal">Renewal Proposal</option>
                       
                        
                    </select></td> 
                       </tr>

                        <tr id="periodofin_id" style="display:none;" colspan="2">
                          <td>Period of Insurance</td>
                          <td> From : <input type="text" name="period_from" id="period_from" class="newsletter-name lastReporteddate_from"/>
                          <div id="hidden_id" style="display:none;"> To :
                         <input type="text" name="period_to" id="period_to"   class="newsletter-name lastReporteddate" /></div>
                         </td>
                       </tr>

                      </table>
                      </div>
                      </div>
                      
                      <div class="col-md-12">
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                      <br>
                      
                      <table class="table table-striped table-bordered white-bg box-shadow comp-pg">
                       
                       <tr class="bg-info">
                          <td>SL</td>
                          <td>Discription of Assets</td>
                          <td>Sum Insured<p>Total (INR)</p></td>
                          
                       </tr>
                       <tr>
                          <td>1.</td>
                          <td>Building (INCH. Plinch & Foundation)</td> 
                          <td><input type="text" name="sum_building" id="sum_building" value="0" onkeypress="return fnAllowNumeric(event)" required class="newsletter-name"/></td>
                       </tr>
                       <tr>
                          <td>2.</td>
                          <td>Plinth & Foundation of Building</td> 
                          <td><input type="text" name="sum_plith" id="sum_plith" value="0" onkeypress="return fnAllowNumeric(event)"  class="newsletter-name" required /></td>
                       </tr>
                       <tr>
                          <td>3.</td>
                          <td>FFF</td> 
                          <td><input type="text" name="sum_fff" id="sum_fff" onkeypress="return fnAllowNumeric(event)" value="0"  class="newsletter-name"/></td>
                       </tr>
                       <tr>
                          <td>4.</td>

                          <td>Electric Fittings</td> 
                          <td><input type="text" name="sum_electric" id="sum_electric" onkeypress="return fnAllowNumeric(event)"  class="newsletter-name" value="0" /></td>
                          </td> 
                       </tr>
                       <tr>
                          <td>5.</td>
                          <td>Stock - Finish, RM, SIP</td>
                          <td><input type="text" name="sum_stock" id="sum_stock" value="0" onkeypress="return fnAllowNumeric(event)"  class="newsletter-name"/></td>
                       </tr>
                       <tr>
                          <td>6.</td>
                          <td>Other Contents*</td> 
                          <td><input type="text" name="sum_others" id="sum_others" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name" /></td>
                       </tr>
                       <!-- <tr>
                          <td></td>
                          <td><h3><b>TOTAL</b></h3></td> 
                          <td><input type="text" name="txt" class="newsletter-name"/></td>
                       </tr> -->
                      </table>
                      </div>
                      </div>
                      
                      
                      
                      <div class="col-md-12">
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                      <br>
                      
                      <table class="table table-striped table-bordered white-bg box-shadow comp-pg">
                       
                       <tr class="bg-info">
                          <td colspan="3">Addon Coverage</td>
                       </tr>
                       <tr>
                          <td width="11%">
                             <select name="is_stfi"  class="select-sty drop-arr" id="is_stfi">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>STFI</td> 
                          <td width="30%"><input type="text" name="sum_stfi" id="sum_stfi" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name" readonly/></td>
                        </tr>
                         <tr>
                          <td width="11%">
                             <select name="is_earthquake" class="select-sty drop-arr" id="is_earthquake">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Earthquake </td> 
                          <td><input type="text" name="sum_earthquake" id="sum_earthquake" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name" readonly/></td>
                        </tr>
                         <tr>
                          <td width="11%">
                             <select name="is_terrorism" class="select-sty drop-arr" id="is_terrorism">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Terrorism</td> 
                          <td><input type="text" name="sum_terrorism" id="sum_terrorism" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name" readonly/></td>
                        </tr>
                         <tr>
                          <td width="11%">
                             <select name="is_architect" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Architects, Surveyors and Consulting Engineers Fees ( in excess of 3% claim amount)</td> 
                          <td><input type="text" name="sum_architect" id="sum_architect"  value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                        </tr>
                        
                        
                        
                        
                        <tr>
                          <td width="11%">
                             <select name="is_removedebris" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Removal of Debris (in excess of 1% claim amount)</td> 
                          <td><input type="text" name="sum_removedebris" id="sum_removedebris" value="0"  onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_powerfail" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>(A) Deterioration of Stocks in Cold Storage premises due to accidental power failure consequent to damage at the premises of Power Station due to an insured peril</td> 
                          <td><input type="text" name="sum_powerfail" id="sum_powerfail" value="0"  onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_temprise" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>(B) Deterioration of stocks in cold storage premises due to change in temperature arising out of loss or damage to the cold storage machinery(ies) in the Insured’s premises due to operation of insured peril.</td> 
                          <td><input type="text" name="sum_temprise" id="sum_temprise" value="0"  onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_forestfire" class="select-sty drop-arr" >
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Forest Fire</td> 
                          <td><input type="text" name="sum_forestfire" id="sum_forestfire" value="0"  onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_accident" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Impact Damage due to Insured’s own Rail/Road Vehicles, Fork lifts, Cranes, Stackers and the like and articles dropped therefrom.</td> 
                          <td><input type="text" name="sum_accident" id="sum_accident" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_spontcomb" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Spontaneous Combustion</td> 
                          <td><input type="text" name="sum_spontcomb" id="sum_spontcomb" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_omission" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Ommission to insure additions, deletions etc</td> 
                          <td><input type="text" name="sum_omission" id="sum_omission" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_materialstock" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Spoilage Material Damage Cover for stocks</td> 
                          <td><input type="text" name="sum_materialstock" id="sum_materialstock" value="0" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_materialplant" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Spoilage Material Damage Cover for Plant and Machinery</td> 
                          <td><input type="text" name="sum_materialplant" id="sum_materialplant" value="0" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_tempstock" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Temporary Removal of Stocks Clause</td> 
                          <td><input type="text" name="sum_tempstock" id="is_tempstock" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_lossrent" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Loss Of Rent clause</td> 
                          <td><input type="text" name="sum_lossrent" id="sum_lossrent" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_accomrent" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Rent for alternative accomodation</td> 
                          <td>
                          <input type="text" name="sum_accomrent" id="sum_accomrent" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                          </td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_escalation" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Escalation</td> 
                          <td><input type="text" name="sum_escalation" id="sum_escalation" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_startup" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Start Up Expenses</td> 
                          <td><input type="text" name="sum_startup" id="is_startup" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_leakage" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Leakage Cover for tanks in insured's premises</td> 
                          <td><input type="text" name="sum_leakage" id="sum_leakage" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_leakageoutside" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Leakage Cover for tanks outside insured's premises</td> 
                          <td><input type="text" name="sum_leakageoutside" id="sum_leakageoutside" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_contaminate" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Contamination Cover for tanks outside insured's premises</td> 
                          <td><input type="text" name="sum_contaminate" id="sum_contaminate" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                        </tr>
                        <tr>
                          <td width="11%">
                             <select name="is_contamoutside" class="select-sty drop-arr">
                                    <option value="Y">Yes</option>
                                    <option selected value="N">No</option>
                             </select>
                          </td>
                          <td>Contamination Cover for tanks located elsewhere</td> 
                          <td><input type="text" name="sum_contamoutside" id="sum_contamoutside" value="0" onkeypress="return fnAllowNumeric(event)" class="newsletter-name"/></td>
                         <!--  <input type="hidden" name="zoneid" id="zoneid" value="2"/></td> -->
                         <!--  <input type="hidden" name="zoneid" id="zoneid" value="2"/></td> -->
                        </tr>
                        <tr>
                         
                          <td colspan="3"><a class="btn btn-danger btn-outline with-arrow mrg-top" id="insurance">Get Quotes<i class="icon-arrow-right"></i></a></i></a></td> 
                        
                        </tr>
                        
                        
                        
                      </table>
                      </div>
                      </div>
                      
                      
                      
                      
                       <div class="col-md-12 container white-bg box-shadow">
                      <div class="col-md-1"></div>
                      <div class="col-md-10">
                      <br>
                      
                      <div id="premium_table"></div>
                    </div>
                    </div>
                    </div>
                    </form>
                          
</div>
<br>

<script src="{{URL::to('js/Myapp.js')}}"></script>
    <script src="{{URL::to('js/jsPdf.js')}}"></script>
     <script src="{{URL::to('js/freshslider.min.js')}}"></script>
<script type="text/javascript">
    var d = new Date();
    var year = d.getFullYear() ;
    d.setFullYear(year);


    $(".lastReporteddate1").datepicker({ dateFormat: "dd-mm-yy",
      changeMonth: true,
      changeYear: true,
      maxDate: year,
      minDate: "-100Y",
      yearRange: '-100:' + year + '',
      defaultDate: d
    });
</script>

<script type="text/javascript">

    var start = new Date();
    start.setFullYear(start.getFullYear() - 70);
    var end = new Date();
    end.setFullYear(end.getFullYear() - 10);



 $(".lastReporteddate_from").datepicker({ dateFormat: "dd-mm-yy",
        changeMonth: true,
        changeYear: true,
        // minDate: start,
        // maxDate: end,
        // yearRange: start.getFullYear() + ':' + end.getFullYear(),
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


//     $(".lastReporteddate_from").datepicker({
//     dateFormat: 'dd/mm/yy',
//     onSelect: function(dateStr) {
//         var d = $.datepicker.parseDate('dd/mm/yy', dateStr);
//         var years =1;

//         d.setFullYear(d.getFullYear() + years);

//         $('.lastReporteddate').datepicker('setDate', d);
        
//     }
// });
// $(".lastReporteddate").datepicker({
//     dateFormat: 'dd/mm/yy'
// });

</script>

<script type="text/javascript">
  
 
 $(document).ready(function(){

    
    $(".search_company").autocomplete({ 
      source: function(request, response) {
        
        $.ajax({
          url: "{{ route('searchpbcorporatecompanyajax') }}",
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
          //$(".search_company").val("");
          $(".search_company").attr("data-value",""); 
          $("#company_name").val("");
         
        }else{
          $(".search_company").attr("data-value",ui.item.datavalue); 
          $("#company_name").val(ui.item.datavalue);
         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">
  
 
 $(document).ready(function(){

    
    $(".search_occupied").autocomplete({ 
      source: function(request, response) {
        
        $.ajax({
          url: "{{ route('searchoccupiedajax') }}",
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
         $(".search_occupied").attr("data-value",""); 
          $("#occ_id").val("");
         
        }else{
           $(".search_occupied").attr("data-value", ui.item.datavalue);
            $("#occ_id").val(ui.item.datavalue);       
         
         $(".Q6").show();
         
          
             }
           }

        
      });
   });

</script>

<script type="text/javascript">
  
 var stateid=0;
 $(document).ready(function(){

    
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
          $("#stateid").val("");
         
        }else{
           $(".search_state").attr("data-value", ui.item.datavalue);
            $("#stateid").val(ui.item.datavalue);       
         stateid=ui.item.datavalue;
         // alert(stateid);
        // state(ui.item.datavalue);
         
          
             }
           }

        
      });




    $(".search_district").autocomplete({ 
      source: function(request, response) {
        if(stateid!=0){
        $.ajax({
          url: "{{ route('searchdistrictajax') }}",
          dataType: "json",
          data: {
            term : stateid, district:request.term
          },
          success: function(data) {
           

            response(data);
            
          }
        });
}else{

     // $('.search_city').val('');
     alert("Please Select State");
}

      },
      change: function (event, ui) {
        if (ui.item == null || ui.item == undefined || ui.item.value=='No Result Found') {
         $(".search_district").attr("data-value",""); 
          $("#districtid").val("");
         
        }else{
           
         $(".search_district").attr("data-value", ui.item.datavalue);
            $("#districtid").val(ui.item.datavalue);       
          
             }
           }

        
      });





   });

</script>

<script type="text/javascript">
    
    function fnAllowNumeric(event) {
      if ((event.keyCode < 48 || event.keyCode > 57) && event.keyCode != 8) {
          event.keyCode = 0;
          
          return false;
      }
    }

</script>

<script type="text/javascript">
    $('#insurance').click(function(){
     // alert('okae');
     if(! $('#corporate_insurance').valid()){
         return false;
    }else{
        $.ajax({  
                type: "POST",  
                url: "{{URL::to('corporate')}}",
                data : $('#corporate_insurance').serialize(),
                success: function(msg){
                    console.log(msg);
                        var tablerows = new Array();
                         $.each(msg, function( index, value ) {
            tablerows.push('<tr><td>' + value.company_id + '</td><td>' + value.company_name + '</td><td>' + value.discount_rate + '</td><td>' + value.tariffrate + '</td><td>' + value.base_rate + '</td><td>' + value.tot_rate + '</td><td>' + value.gross_premium + '</td></tr>');
        }); 
                         
                         if(msg){
                            $('#premium_table').empty().append('<table class="table table-striped table-bordered"><tr class="text-capitalize"><td>Company ID</td><td>Comapny Name</td><td>Discount Rate</td><td>Tariff Rate</td><td>Base Rate</td><td>Total Rate</td><td>Gross Premium</td></tr><tr>'+tablerows+'</tr></table>');
                         }else{
                            $('#premium_table').empty().append('No Result Found');
                         }



                
                        
    }  
    });

    }
});


 
$('#business_type').change(function(){
         if($(this).val()=="Fresh Proposal"){

               $("#periodofin_id").hide();

         }else{
          $("#periodofin_id").show();
         }
});




$('#is_stfi').change(function(){


    if($(this).val()=="Y"){
       // $('#sum_stfi').val($("#sum_plith").val());

sum_building=parseFloat($("#sum_building").val());
sum_fff=parseFloat($("#sum_fff").val());
sum_electric=parseFloat($("#sum_electric").val());
sum_stock=parseFloat($("#sum_stock").val());
sum_others=parseFloat($("#sum_others").val());
total=sum_building+sum_fff+sum_electric+sum_stock+sum_others;

$('#sum_stfi').val(total);


    }else{
      $('#sum_stfi').val(0);
    }
              
});

$('#is_earthquake').change(function(){
    if($(this).val()=="Y"){
      sum_plith=parseFloat($("#sum_plith").val());
      sum_building=parseFloat($("#sum_building").val());
      sum_fff=parseFloat($("#sum_fff").val());
      sum_electric=parseFloat($("#sum_electric").val());
      sum_stock=parseFloat($("#sum_stock").val());
      sum_others=parseFloat($("#sum_others").val());
      total=sum_building+sum_fff+sum_electric+sum_stock+sum_others + sum_plith;
      $('#sum_earthquake').val(total);


    }else{
       $('#sum_earthquake').val(0);
    }
              
});


$('#is_terrorism').change(function(){
    if($(this).val()=="Y"){      
      sum_building=parseFloat($("#sum_building").val());
      sum_fff=parseFloat($("#sum_fff").val());
      sum_electric=parseFloat($("#sum_electric").val());
      sum_stock=parseFloat($("#sum_stock").val());
      sum_others=parseFloat($("#sum_others").val());
      total=sum_building+sum_fff+sum_electric+sum_stock+sum_others ;

      $('#sum_terrorism').val(total);


    }else{
       $('#sum_terrorism').val(0);
    }
              
});

</script>

<!-- <script type="text/javascript">
    $('#state').blur(function(){

        var state=$('#state').data("data-value");
        console.log(state);
        return false;
     
        $.ajax({  
                type: "POST",  
                url: "{{URL::to('corporate')}}",
                data : $('#corporate_insurance').serialize(),
                success: function(msg){
                        var tablerows = new Array();
                         $.each(msg, function( index, value ) {
            tablerows.push('<tr><td>' + value.company_id + '</td><td>' + value.company_name + '</td><td>' + value.discount_rate + '</td><td>' + value.tariffrate + '</td><td>' + value.base_rate + '</td><td>' + value.tot_rate + '</td><td>' + value.gross_premium + '</td></tr>');
        }); 
                         
                         if(msg){
                            $('#premium_table').empty().append('<table class="table table-striped table-bordered"><tr class="text-capitalize"><td>Company ID</td><td>Comapny Name</td><td>Discount Rate</td><td>Tariff Rate</td><td>Base Rate</td><td>Total Rate</td><td>Gross Premium</td></tr><tr>'+tablerows+'</tr></table>');
                         }else{
                            $('#premium_table').empty().append('No Result Found');
                         }



                
                        
    }  
    });

});
</script>
 -->
<!-- <script type="text/javascript">
    function state(id){
        var stateid = id;
       var v_token = "{{csrf_token()}}";
        $.ajax({  
                type: "POST",  
                url: "{{URL::to('district')}}",
                data : {'stateid':stateid,'_token': v_token},
                success: function(msg){
                    //console.log(msg);
                    //return false;
                        var tablerows = new Array();
                         $.each(msg, function( index, value ) {
            tablerows.push('<option value='+value.district_id+'>'+value.district_name+'</option>');

        }); 
             //console.log(tablerows);
             //return false;            
                         if(msg){
                            $('#district').empty().append('<td width="11%"><select name="districtid" class="select-sty drop-arr">'+tablerows+'</select></td>');
                         }else{
                            $('#district').empty().append('No Result Found');
                         }
                    }
         }); 
    }
</script> -->