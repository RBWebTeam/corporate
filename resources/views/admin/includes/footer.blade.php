
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <!-- jQuery -->
    <script src="{{url('admin/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('admin/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{url('admin/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{url('admin/raphael/raphael.min.js')}}"></script>
    
   <!--  <script src="{{url('admin/morrisjs/morris.min.js')}}"></script>
    <script src="{{url('data/morris-data.js')}}"></script> -->
 
    <!-- Custom Theme JavaScript -->
    <script src="{{url('dist/js/sb-admin-2.js')}}"></script>
  <!--   <script type="text/javascript" src="http://timeago.yarp.com/jquery.timeago.js"></script>
  -->
   
    <!-- DataTables JavaScript -->
    <script src="{{url('admin/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('admin/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{url('admin/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>


  <script>    

  function timeDifference(current, previous) {

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

//console.log(timeDifference(new Date(),new Date(val.datetime_created)));


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
</script>
 