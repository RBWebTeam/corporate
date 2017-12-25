 @extends('admin.includes.master')
 @section('content')
 <div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          DataTables Advanced Tables
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body table-responsive">
            <table width="100%" class="table table-striped table-bordered table-hover myInputsearc myInput12 " id="dataTables-example" style="font-size: 12px;" >
              <thead>
                <tr  style="background-color: #0099CC; color:white;" >
                  <th>Lead ID</th>
                  <th>Description</th>
                   <th>Name</th>
                   <th>company_name</th>
                   <th>email_ids</th>
                   <th>mobile_nos</th>
                   <th>designation</th>
                   <th>address</th>
                  <!--  <th>Image</th> -->
                  
                </tr>
              </thead>
              <tbody>
               @foreach($query as $val)
               <tr >
                <td> <a href="{{url('dashboard/visiting-cart-edit')}}/{{$val->visiting_id}}"  class="visiting_id" >{{$val->visiting_id}}</a> </td>
                <td> {{$val->description}}</td>
                <td> {{$val->name}}</td>
                <td> {{$val->company_name}}</td>
                <td> {{$val->email_ids}}</td>
                <td> {{$val->mobile_nos}}</td>
                <td> {{$val->designation}}</td>
                <td> {{$val->address}}</td>
             <!--    <td> {{$val->run_time_id}}</td> -->


              </tr>
              @endforeach
            </tbody>
          </table>
         

      </div>

    </div>

  </div>

</div>

</div>

<script type="text/javascript">
	
// $(document).on('click','.visiting_id',function(e){
//    event.preventDefault(); 
//         var id=$(this).attr('href');


	 
// })

</script>
@endsection
