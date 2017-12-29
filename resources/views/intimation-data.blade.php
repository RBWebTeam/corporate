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
      <tr style="background: skyblue">
       <th>id</th>
       <th>leadid</th>
       <th>policy_category</th>
       <th>productname</th>
       <th>company_groupname</th>
       <th>company_name</th>
       <th>business_type</th>
       <th>insurer_name</th>
       <th>renewaldate</th>
       <th>sum_insured</th>
       <th>pretax_prem</th>
       <th>created_by</th>
       </thead>
       <tbody>
          </tr>
          @foreach($data as $value)
           <tr>
              @foreach($value as $val)
              <td>
                {{$val}}
              </td>
              @endforeach
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
