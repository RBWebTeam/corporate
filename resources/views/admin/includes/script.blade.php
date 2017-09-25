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
    var reloadXML = setInterval(refresh_Div, 5000);
    <!---->


    $(document).on('click','issue',function(){    
        event.preventdefault();
        console.log($(this));
            $('#myModal').modal('toggle');
    }
    );
</script>
 <script type="text/javascript">
  $(document).ready(function(){
        $('body').on('click', '.add-more', function(e) {
          
          e.preventDefault();
          $(this).before('<div class="form-group"><label  class="col-sm-2 col-form-label">Choose File</label><input type="file" name="file[]" class="col-sm-10" required><input type="date" name="expiry_date" class="form-control "><a class="upload btn btn-primary">upload</a></div>');
          
        });
      });
 </script>