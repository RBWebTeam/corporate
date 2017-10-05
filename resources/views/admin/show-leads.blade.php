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
                        <div class="panel-body table-responsive">
                          <form id="upload_policy_form" enctype="multipart/form-data" action ="upload-file" method="POST">
                            {{csrf_field()}}
                            <table width="100%" class="table table-striped table-bordered table-hover" >
                              <!-- id="dataTables-example" -->
                              

                                <thead>
                                    <tr>
                                    <th>Lead ID</th>
                                    <th>Policy Category</th>
                                    <th>Policy Type</th>
                                    <th>Group</th>
                                    <th>Client Name</th>
                                    <th>Business Type</th>
                                    <th>current insurer</th>
                                    <th>Renewal date</th>
                                    <th>Sum insured</th>
                                    <th>Pre Tax Premium</th>
                                    <th>policy Copy</th>
                                    <th>uploaded by</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                	@foreach($lead as $lead)
                                  <tr class="clone_row">
                                  	
                                  		<td> {{$lead->lead_id}}</td>
                                  		<td> {{$lead->policy_category}}</td>
                                  		<td> {{$lead->policy_type}}</td>
                                  		<td>{{$lead->group_id}}</td>
                                  		<td> {{$lead->client_name}}</td>
                                  		<td> {{$lead->business_type}}</td>
                                  		<td> {{$lead->current_insurer_id}}</td>
                                  		<td> {{$lead->renewal_date}}</td>
                                  		<td> {{$lead->sum_insured}}</td>
                                  		<td> {{$lead->pretax_premium}}</td>
                                  		
                                  		<td><a href="{{$lead->document_path}}" target="_new">Document</a></td>
                                  		<td> {{$lead->userid}}</td>
                                  		<td> {{$lead->created_at}}</td>
                                  		<td> {{$lead->updated_at}}</td>

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
