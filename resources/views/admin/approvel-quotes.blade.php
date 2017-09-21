 
 @extends('admin.includes.master')
 @section('content')
 
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="font-size: 14px;">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                       
                                        <th>Company name</th>
                                         <th>Date</th>
                                        <th> Approve</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($queryuser as $vl)
                                    <tr class="odd gradeX approve">
                                        <td>{{$vl->firstname}}</td>
                                        <td>{{$vl->customer_name}}</td>
                                         
                                           
                                         
              <?php   $time_ago = strtotime($vl->datetime_created);  
              $current_time = time();  
              $time_difference = $current_time - $time_ago;  
              $seconds = $time_difference;  
              $days          = round($seconds / 86400);     //343731 ?>

             @if($days<=1)  
            <td style="color: green" >{{facebook_time_ago($vl->datetime_created)}}</td>
             @elseif($days<=2)
                  <td style="color: yellow" >{{facebook_time_ago($vl->datetime_created)}}</td>
             @elseif($days>=3)

               <td style="color: red" >{{facebook_time_ago($vl->datetime_created)}}</td>
             @else
                <td   >{{facebook_time_ago($vl->datetime_created)}}</td>
             @endif
            
               @if((Session::get('user_type_id')==3) && ($vl->is_approve==1 ) )
                <td class="center">Approved </td>
                @elseif(Session::get('user_type_id')==2 && ($vl->is_approve1==1 )) 
                <td class="center">Approved </td>
                @else 
                  <td class="center"><a  class="approve-it" data-id="{{$vl->quote_id}}">Approve</a> </td>
                  @endif
            
             
                <td class="center"><a href="{{url('quotes-details')}}/{{$vl->quote_id}}" class="approved_id">show quotes</a>||<a <a href="{{url('quotes-edite')}}/{{$vl->quote_id}}">Edit</a></td>
            </tr>
            @endforeach
            
        </tbody>
  </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>



        @endsection
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
  <script type="text/javascript">
            $(document).on('click','.approve-it',function(){event.preventDefault(); 
                var id=$(this).attr('data-id');
               update_approve(id,$(this));
            });
           function update_approve(id,elem){
               $.ajax({  
                type: "POST",  
                url: "{{URL::to('approve-it')}}?_token={{csrf_token()}}",
                data :{"approved_id":id},
                success: function(msg){
                  parent=elem.parent();
                    
                   if(msg==1){
                    parent.empty().text('Approved');
                   }
                     

                  }
                   

                });
            }
        </script>
<?php  

   
 function facebook_time_ago($timestamp)  
 {  
      $time_ago = strtotime($timestamp);  
      $current_time = time();  
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
      if($seconds <= 60)  
      {  
     return "Just Now";  
   }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
       return "one minute ago";  
     }  
     else  
           {  
       return "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
       return "an hour ago";  
     }  
           else  
           {  
       return "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
       return "yesterday";  
     }  
           else  
           {  
       return "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       return "a week ago";  
     }  
           else  
           {  
       return "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       return "a month ago";  
     }  
           else  
           {  
       return "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       return "one year ago";  
     }  
           else  
           {  
       return "$years years ago";  
     }  
   }  
 }    


 ?>  