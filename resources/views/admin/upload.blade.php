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
                          <form>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>Client Name</th>
                                    <th>Policy Copy</th>
                                    <th>Product</th>
                                    <th>Expiry Date</th>
                                    <th>Net Premium</th>
                                    <th>Policy Category</th><!-- motor, non motor-->
                                    <th>Upload</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="clone_row">
                                    <th scope="row">1</th>
                                    <td><input type="text" name="client_name[]"  required></td>
                                    <td><input type="file" name="file[]" required></td>
                                    <td><input type="text" name="product[]"  required></td>
                                    <td><input type="date" name="policy_period[]" ></td>
                                    <td><input type="text" name="net_premium[]"  required></td>
                                    <td><input type="text" name="policy_catg[]"  required></td>
                                    <td><a class="upload btn btn-primary" >upload</a></td>
                                  </tr>
                                    <a class="add-more btn btn-primary" >add</a>
                                </tbody>
                            </table>
                          </form>
                            
                           
                        </div>
                        
                    </div>
                   
                </div>
                
            </div>
            
        </div>

@endsection
