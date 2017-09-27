 @extends('admin.includes.master')
 @section('content')
<?php $count=0;?>
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
                          <form id="upload_policy_form" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <table width="100%" class="table table-striped table-bordered table-hover" >
                              <!-- id="dataTables-example" -->
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>Client Name</th>
                                    <th>Policy Copy</th>
                                    <th>Product</th>
                                    <th>Expiry Date</th>
                                    <th>Net Premium</th>
                                    <th>Policy Category</th><!-- motor, non motor-->
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="clone_row">
                                    <th scope="row" class="upload_row">1</th>
                                   
                                      <td><input type="text" name="client_name[]"  required></td>
                                      <td><input type="file" name="policy[]" required></td>
                                      <td><input type="text" name="product[]"  required></td>
                                      <td><input type="date" name="policy_period[]" ></td>
                                      <td><input type="text" name="net_premium[]"  required></td>
                                      <td><input type="text" name="policy_catg[]"  required></td>
                                    

                                  </tr>
                                    
                                </tbody>
                            </table>
                           </form>
                            
                           
                        </div>
                        
                    </div>
                   
                </div>
                <a class="add-more btn btn-primary" >add</a>
                <a class="upload btn btn-primary pull-right" >upload</a>
            </div>
            
        </div>

@endsection
