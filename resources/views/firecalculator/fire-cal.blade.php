@extends('includes.master')
@section('content')
<div class="row">
 <div class="col-md-4">
 <ul class="menu" type="1">
   <li> <a href="1" id="firecalc">Standard Fire and Special Perils (SFSP)</a></li>
    <li><a href="#">Group Mediclaim</a></li>
    <li><a href="#">Group Personal Accident</a></li>
    <li><a href="#">Director and Officers Liability</a></li>
    <li><a href="#">Workmen's Compensation</a></li>
    <li><a href="#">Project Insurance – CAR / EAR</a></li>
 </ul>
 </div>
 <div class="col-md-8">
 <div class="righ-col bg-sucsess box-shadow">
   <div   class="header_li">
       <ul >
	       
	   </ul> 
   </div>
 </div>
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
@endsection

