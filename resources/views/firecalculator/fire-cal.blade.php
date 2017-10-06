@extends('includes.master')
@section('content')
<div class="row">
 <div class="col-md-4">
 <ul class="menu" type="1">
   <li> <a href="1" id="firecalc">Standard Fire and Special Perils (SFSP)</a></li>
    <li><a href="#" class="btn2">Group Mediclaim</a></li>
    <li><a href="#" class="btn3">Group Personal Accident</a></li>
    <li><a href="#" class="btn4">Director and Officers Liability</a></li>
    <li><a href="#" class="btn5">Workmen's Compensation</a></li>
    <li><a href="#" class="btn6">Project Insurance – CAR / EAR</a></li>
 </ul>
 </div>
 
 
 <div class="col-md-8">
 <div class="righ-col bg-sucsess box-shadow">
   
   
   <!-- Group Mediclaim  -->
   <div style="display:none;" class="group-med">
 <div class="col-md-12">

  <h3 class="mrg-0">Select Policy Type</h3>
  <br>
  <ul>
      <li><a href="#">Floater (4016)</a></li>
	   <li><a href="#">Non Floater (4015)</a></li>
  </ul>
  <button class="btn btn-success"><a href="#" class="clr-wht">Continue >></a></button>
</div>
 </div>
 <!-- Group Mediclaim  -->
 
 
 
 <!-- Group Personal Accident -->
   <div style="display:none;" class="group-personal-accident">
 <div class="col-md-12">
  <h3 class="mrg-0">Group Personal Accident</h3>
  <br>
</div>
 </div>
 <!-- Group Personal Accident -->
 
 
  <!-- Director and Officers Liability -->
   <div style="display:none;" class="director-and-officers">
 <div class="col-md-12">
  <h3 class="mrg-0">Director and Officers Liability</h3>
  <br>
</div>
 </div>
 <!-- Director and Officers Liability -->
 
 
  <!-- Workmen's Compensation -->
   <div style="display:none;" class="workmen-compensation">
 <div class="col-md-12">
  <h3 class="mrg-0">Workmen's Compensation</h3>
  <br>
</div>
 </div>
 <!-- Workmen's Compensation -->
 
 
  <!-- Project Insurance – CAR / EAR -->
   <div style="display:none;" class="project-insurance">
 <div class="col-md-12">
  <h3 class="mrg-0">Project Insurance – CAR / EAR</h3>
  <br>
</div>
 </div>
 <!-- Project Insurance – CAR / EAR -->
 
 

 </div>
 
 
</div>
<script>
$(document).ready(function(){
	var maxAppend = 0;
    $("#firecalc").click(function(e){
       e.preventDefault();

         //alert($(this).attr('href'));

    	maxAppend++;
          $.ajax({
          method: "POST",
          url: "{{url('firecal-sectionlist') }}",
         // dataType: "json",
          data: {
            "_token": "{{ csrf_token() }}",
          },
          success: function(data) {
              if(maxAppend==1){
              $.each(data, function( key, val ) {
 //.replace(/\d+/,',','-').toLowerCase()
              $(".header_li ul").append('<li><a href="section/'+val.section_id+'/1" class="btn-default">'+val.section_name +'</a></li>');
            });
          }else{
          	return false;  
          }
          }
        });
          
    });
});
</script>

<script>
$(document).ready(function(){
    $(".btn2").click(function(){
        $(".group-med").show();
		$(".group-personal-accident").hide();
		$(".director-and-officers").hide();
		$(".workmen-compensation").hide();
		$(".project-insurance").hide();
    });
	$(".btn3").click(function(){
        $(".group-personal-accident").show();
		$(".group-med").hide();
		$(".director-and-officers").hide();
		$(".workmen-compensation").hide();
		$(".project-insurance").hide();
    });
	$(".btn4").click(function(){
        $(".group-personal-accident").hide();
		$(".group-med").hide();
		$(".director-and-officers").show();
		$(".workmen-compensation").hide();
		$(".project-insurance").hide();
    });
	$(".btn5").click(function(){
        $(".group-personal-accident").hide();
		$(".group-med").hide();
		$(".director-and-officers").hide();
		$(".workmen-compensation").show();
		$(".project-insurance").hide();
    });
	$(".btn6").click(function(){
        $(".group-personal-accident").hide();
		$(".group-med").hide();
		$(".director-and-officers").hide();
		$(".workmen-compensation").hide();
		$(".project-insurance").show();
    });
});
</script>
@endsection

