 
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
                                        <th>Quote Id</th>
                                        <th>Customer name</th>
                                        <th>Product Name</th>
                                        <th>Section</th>
                                        <th>Vertical Name</th>
                                        <th>Approver Status</th>
                                        <th>Manager Status</th>
                                        <th>Days Diff</th>
                                        <th>Datetime Created</th>
                                        <th>Employee Name</th>
                                        <th>Reporting To</th>
                                        <th>Approver Name</th>
                                        
                                        
                                           
                                         
                                        <th>Show Quotes</th>
                                                                  
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($queryuser as $vl)
                                    <tr class="odd gradeX approve">
                                        <td>{{$vl->quote_id}}</td>
                                        <td>{{$vl->customer_name}}</td>
                                        <td>{{$vl->product_name}}</td>
                                        <td>{{$vl->section_type}}</td>
                                        <td>{{$vl->vertical_name}}</td>
                                        <td>{{$vl->approver_status}}</td>
                                        <td>{{$vl->manager_status}}</td>
                                         <td>{{$vl->days_diff}}</td>
                                        <td>{{$vl->datetime_created}}</td>
                                        <td>{{$vl->empname}}</td>
                                        <td>{{$vl->reporting_empname}}</td>
                                        <td>{{$vl->approver_empname}}</td>
                                       
                                              
                                        
                                        <td class="center"><a href="{{url('quotes-details')}}/{{$vl->quote_id}}" class="approved_id">View</a></td>
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
 <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
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
        </script> -->