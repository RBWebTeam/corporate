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
                          <form id="upload_policy_form" enctype="multipart/form-data" action ="upload-file" method="POST">
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
                                      <td>
                                        <select name="product[]" required="">
                                          <option  selected="true" disabled="disabled" value="">Select</option>
                                          @foreach($product as $prod)
                                            <option value="{{$prod->id}}" >{{$prod->name}}</option>
                                          @endforeach
                                        </select>
                                       </td>
                                      <td><input type="date" name="policy_period[]" ></td>
                                      <td><input type="text" name="net_premium[]"  required></td>
                                      <td><select name="policy_catg[]" required="">
                                          <option  selected="true" disabled="disabled" value="">Select category</option>
                                          <option value="motor">Motor</option>
                                          <option value="non-motor">Non-Motor</option>
                                        </select>
                                          </td>
                                    

                                  </tr>
                                    
                                </tbody>
                            </table>
                              <button class=" btn btn-primary"> Upload</button>
                           </form>
                            
                           
                        </div>
                        
                    </div>
                   
                </div>
                <a class="add-more btn btn-primary" >add</a>
              
            </div>
            
        </div>

@endsection
