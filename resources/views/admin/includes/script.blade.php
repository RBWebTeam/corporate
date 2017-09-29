<script type="text/javascript">

    $(document).ready(function() {    // for table script
        $('#dataTables-example').DataTable({
            "order": [[0, "desc" ]],

            responsive: true
        });
    });


    function Numeric(event) {     // for numeric value function
      if ((event.keyCode < 48 || event.keyCode > 57) && event.keyCode != 8) {
          event.keyCode = 0;
          return false;
      }
    }



  function timeDifference(current, previous) {          //  time ago
    var msPerMinute = 60 * 1000;
    var msPerHour = msPerMinute * 60;
    var msPerDay = msPerHour * 24;
    var msPerMonth = msPerDay * 30;
    var msPerYear = msPerDay * 365;

    var elapsed = current - previous;

    if (elapsed < msPerMinute) {
         return Math.round(elapsed/1000) + ' seconds ago';   
    }

    else if (elapsed < msPerHour) {
         return Math.round(elapsed/msPerMinute) + ' minutes ago';   
    }

    else if (elapsed < msPerDay ) {
         return Math.round(elapsed/msPerHour ) + ' hours ago';   
    }

    else if (elapsed < msPerMonth) {
        return   Math.round(elapsed/msPerDay) + ' days ago';   
    }

    else if (elapsed < msPerYear) {
        return   Math.round(elapsed/msPerMonth) + ' months ago';   
    }

    else {
        return   Math.round(elapsed/msPerYear ) + ' years ago';   
    }
}



  // notification function. refresh div without reload page
    $(document).ready(function () {
        refresh_Div();
    });
    function refresh_Div() {
        $.ajax({
          method: "POST",
          url: "{{url('dashboard/notification')}}",
          //dataType: "json",
          data: {"_token": "{{ csrf_token() }}",},
          success: function(data) {
            $('#refreshID').text(data.count);
               $("#notification_id ").empty();
              $.each(data.is_approve, function( key, val ) {

                      $("#notification_id ").append('<li><a href="{{url("dashboard/user-show-groups")}}"><div><strong>'+val.firstname+'</strong><span class="pull-right text-muted"><em>'+timeDifference(new Date(),new Date(val.datetime_created))+'</em></span></div><div>1</div></a></li><li class="divider"></li>');
             });

            
          }
             });
    }
    var reloadXML = setInterval(refresh_Div, 50000);
    <!---->

   
    $(document).on('click','.issue',function(){  
          
          $('#after_sub').hide();
          issue_id=$(this).attr('id');
          $('#issue_id').val(issue_id);  
          $('.comment').hide();
          $('.comment_'+issue_id).show();
          $('#myModal').modal('toggle');
    });

$(document).on('click','.mail_status',function(event){  
              console.log($(this));
            $('#mailModal').modal('toggle');
    });

$('#issue_form_submit').click(function(){
 // console.log($('li:last'));return;
   if(!$('#issue_form').valid()){
    return false;
   }
    $.ajax({  
                type: "POST",  
                url: "{{URL::to('issue-submit')}}",
                data : $('#issue_form').serialize(),
                
                success: function(msg){
                  append_issue($('#issue_text').val());
                  
                 // $('#myModal').modal('toggle');
                }
            });
});
  function append_issue(text){
    console.log('appending');
    data='<li class="left clearfix comment "><span class="chat-img pull-left"><img src="/images/U.png" alt="You" class="img-circle" /></span><div class="chat-body clearfix"><div class="header"><strong class="primary-font">{{Session::get("firstname")}}</strong> <small class="pull-right text-muted"><span class="glyphicon glyphicon-time"></span>Just Now</small></div><p>'+text+'</p></div></li>';
      $('.comment:last').after(data);
      $('#issue_text').val('');
  }






  $('#mail_sent').click(function(e){ 
                   e.preventDefault();


// var form = $('#postAddProject');
// var button = $('#project-button');
// var name = $('#name');
// var link = $('#link');

var image = $('#attachment_path');
 

// var message = $('#message');
// var name_error = $('#name-error');
// var link_error = $('#link-error');
// var image_error = $('#image-error');

 


var formData = new FormData();
 
 
formData.append('attachment_path', image[0].files[0]); 

$.ajax({
url:"{{URL::to('mail-to-customer')}}",
method: 'post',
dataType: 'json',
contentType: false,
processData: false,
headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
data: formData,

error: function (data) {

    if (data.status === 422) {

         // name_error.html(data.responseJSON.name);
         // link_error.html(data.responseJSON.link);
         // image_error.html(data.responseJSON.image);

    } else {

         alert('success');
    }
}



});



        
// var formData = new FormData($("#uploaded_file")[0]);

// $.ajax({
//     url: "{{URL::to('mail-to-customer')}}",
//     type: 'POST',
//     data: formData,
//     headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
//     success: function (data) {
//         alert(data)
//     },
//     cache: false,
//     processData: false
// });

// return false;

    

})







</script>
 <script type="text/javascript">

  $(document).ready(function(){
        $('body').on('click', '.add-more', function(e) {

          var $tr    = $('.clone_row').last();
          var $clone = $tr.clone();
          $tr.after($clone);
        });
      });


  $('.upload').click(function(e){    // mail 
     e.preventDefault();
     data=$(this).attr('id').split('_');
  

        $.ajax({  
                type: "POST",  
                url: "{{URL::to('upload-file')}}",
                data : $('#form_'+data[1]).serialize(),
                
                success: function(msg){
                  console.log(msg);
                }
            });
      });
 </script>