 
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
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Company name</th>
                                        <th> </th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($queryuser as $vl)
                                    <tr class="odd gradeX approve">
                                        <td>{{$vl->firstname}}</td>
                                        <td>{{$vl->lastname}}</td>
                                        <td>{{$vl->customer_name}}</td>
                                        <td class="center"> </td>
                                        <td class="center"><a href="{{$vl->quote_id}}" class="approved_id">Approved</a></td>
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
            $(document).on('click','.approved_id',function(){event.preventDefault(); 
            //   comapny_id=$(this).closest('tr').find('.approved_id').text();
              var approved_id=$(this).attr("href");
               $(this).closest("tr").hide();
                $.ajax({  
                type: "GET",  
                url: "{{URL::to('dashboard/approved')}}",
                data :{"approved_id":approved_id},
                success: function(msg){

                   console.log(msg);
                     

                  }

                });
            });
        </script>