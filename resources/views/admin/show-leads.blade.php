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
          <form id="upload_policy_form" enctype="multipart/form-data" action ="upload-file" method="POST">
            {{csrf_field()}}
            <table width="100%" class="table table-striped table-bordered table-hover myInputsearc myInput12 " id="dataTables-example" style="font-size: 12px;" >
              <!-- id="dataTables-example" -->


              <thead>
                <tr  style="background-color: #0099CC; color:white;" >
                  <th>Lead ID</th>
                  <th>Policy Category</th>
                  <th>Policy Name</th>
                  <th>Group</th>
                  <th>Client Name</th>
                  <th>Business Type</th>
                  <th>current insurer</th>
                  <th>Renewal date</th>
                  <th>Sum insured</th>
                  <th>Pre Tax Premium</th>
                  <th>IDV</th>
                  <th>NCB</th>
                  <th>Make</th>
                  <th>Model</th>
                  <th>Variant</th>
                  <th>Manufacturing Date</th>
                  <th>Registration Number</th>
                  <th>policy Copy</th>
                  <th>Created By</th>
           

                </tr>
              </thead>
              <tbody>
               @foreach($lead as $lead)
               <tr class="clone_row">
                <td> {{$lead->lead_id?$lead->lead_id:"-"}}</td>
                <td> {{$lead->policy_category?$lead->policy_category:"-"}}</td>
                <td> {{$lead->product_name?$lead->product_name:"-"}}</td>
                <td>{{$lead->group_name?$lead->group_name:"-"}}</td>
                <td> {{$lead->client_name?$lead->client_name:"-"}}</td>
                <td> {{$lead->business_type?$lead->business_type:"-"}}</td>
                <td> {{$lead->company_name?$lead->company_name:"-"}}</td>
                <td> {{$lead->renewal_date}}</td>
                <td> {{$lead->sum_insured?$lead->sum_insured:"-"}}</td>
                <td> {{$lead->pretax_premium?$lead->pretax_premium:"-"}}</td>
                <td> {{$lead->IDV?$lead->IDV:"-"}}</td>
                <td> {{$lead->NCB?$lead->NCB:"-"}}</td>
                <td> {{$lead->make?$lead->make:"-"}}</td>
                <td> {{$lead->model?$lead->model:"-"}}</td>
                <td> {{$lead->variant?$lead->variant:"-"}}</td>
                <td> {{$lead->manufacturing_year?$lead->manufacturing_year:"-"}}</td>
                <td> {{$lead->registration_no?$lead->registration_no:"-"}}</td>
                <td>
                  @if($lead->document_path)
                  <a href="{{url('upload_format/lead_documents')}}/{{$lead->document_path}}" target="_new">Document </a>
                  @else
                  <a href="{{$lead->lead_id}}" id="upload_lead_id">Upload</a>
                  @endif
                </td>
                <td> {{$lead->created_by?$lead->created_by:"-"}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </form>


      </div>

    </div>

  </div>

</div>

</div>




<div id="policy_copy_lead" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header modal-header-info">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4 class="modal-title"> Document Upload</h4>
    </div>
    <div class="modal-body">
      <form   class="form-horizontal"  enctype="multipart/form-data" id="maile_sent_form" role="form" method="POST" action="{{url('document-upload-leads')}}">
        <div class="form-group">
          <!-- <label for="to" class="col-sm-1 control-label">To:</label> -->
          <div class="col-sm-11">{{ csrf_field() }}
            <input type="file" name="file" id="file"  class="btn btn-warning pull-left" required> 
            <input type="hidden" name="lead_id" id="g_leadid" required>
          </div>
        </div>
        <div class="modal-footer">
         <center>  <input type="submit" name="submit"  class="btn btn-primary"  value="upload"></center>
       </div>
     </form>
   </div>
 </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>

<script type="text/javascript">
 $(document).on('click','#upload_lead_id',function(event){ event.preventDefault(); 
              $('#g_leadid').val($(this).attr('href'));
              $('#policy_copy_lead').modal('show');
            });
          </script>
          @endsection
