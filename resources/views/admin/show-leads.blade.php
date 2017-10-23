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
                                    <th>policy Copy</th>
                                    <th>Created By</th>
                                    
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                	@foreach($lead as $lead)
                                  <tr class="clone_row">
                                  		<td> {{$lead->lead_id}}</td>
                                  		<td> {{$lead->policy_category}}</td>
                                  		<td> {{$lead->product_name}}</td>
                                  		<td>{{$lead->group_name}}</td>
                                  		<td> {{$lead->client_name}}</td>
                                  		<td> {{$lead->business_type}}</td>
                                  		<td> {{$lead->company_name}}</td>
                                  		<td> {{$lead->renewal_date}}</td>
                                  		<td> {{$lead->sum_insured}}</td>
                                  		<td> {{$lead->pretax_premium}}</td>
                                  		<td><a href="{{$lead->document_path}}" target="_new">Document</a></td>
                                  		<td> {{$lead->created_by}}</td>

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
 @endsection
