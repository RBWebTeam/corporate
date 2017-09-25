 @extends('admin.includes.master')
 @section('content')
 
<script src="js/jquery.min.js"></script>
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
                                    <tr class="warning">
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
                                        <th>Comment</th>
                                                                  
                                    </tr>
                                </thead>
                                <tbody>    <!-- class="danger" class="warning" class="info" class="success" -->
                                     @foreach($queryuser as $x=> $vl)  

                                       <?php  $class = ($x%2==0)? 'danger': 'success';?>
                                        <tr class='odd gradeX approve {{$class}}'>
                                        <td >{{$vl->quote_id}}</td>
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
                                        <td > 
                                        <span id="{{$vl->quote_id}}" class="issue btn btn-info btn-lg" >
                                        Open Issue</span>
                                        </td> 
                                        
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
 <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
    $(document).on('click','issue',function(){
        event.preventdefault();
        console.log($(this));
            $('#myModal').modal('toggle');
    }
    );
</script>