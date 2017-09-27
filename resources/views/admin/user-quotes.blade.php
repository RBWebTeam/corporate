 @extends('admin.includes.master')
 @section('content')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Quotes</h1>
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
                     <!--    <input type="text" class="id='datetimepicker1'" id="myInput1" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"> -->
<table width="100%" class="table table-striped table-bordered table-hover myInputsearc myInput12" id="dataTables-example" style="font-size: 14px;">
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
                                        <th>Expiry Date</th>
                                        <th>Employee Name</th>
                                        <th>Reporting To</th>
                                        <th>Approver Name</th>
                                        <th>Show Quotes</th>
 
                                        <th>Mail Status</th>
                                        <th>Download PDF</th>

 
                                        <th>Comment</th>
 
                                                                  
                                    </tr>
                                </thead>
                                <tbody>    <!-- class="danger" class="warning" class="info" class="success" -->
                                     @foreach($queryuser as $x=> $vl)  

                                       
                                       <?php  //$classtr = ($x%2==0)? 'danger': 'success';
                                              $class =($vl->approver_status=="Approved")? 'background-color: #00C851': 'background-color:#CC0000';
                                              $class1 =($vl->manager_status=="Approved")? 'background-color: #00C851': 'background-color:#CC0000';
                                       ?>
                                        <tr class='odd gradeX approve '>
                                        <td  >{{$vl->quote_id}}</td>
                                        <td>{{$vl->customer_name}}</td>
                                        <td>{{$vl->product_name}}</td>
                                        <td>{{$vl->section_type}}</td>
                                        <td>{{$vl->vertical_name}}</td>
                                        <td style='{{$class}} '>{{$vl->approver_status}}</td>
                                        <td style='{{$class1}}'>{{$vl->manager_status}}</td>
                                        <td>{{$vl->days_diff}}</td>
                                        <td>{{$vl->datetime_created}}</td>
                                          <td>{{$vl->expiry_dt}}</td>
                                        <td>{{$vl->empname}}</td>
                                        <td>{{$vl->reporting_empname}}</td>
                                        <td>{{$vl->approver_empname}}</td>
                                        <td class="center"><a target="_blank" href="{{url('quotes-details')}}/{{$vl->quote_id}}" class="approved_id">View</a></td>
 
                                         <td>

                            @if($vl->approver_status=="Approved" && $vl->manager_status=="Approved")

                                          <a href="#" class="mail_status">{{$vl->mail_status}}</a>
                                            @else
                                            <a class="btn btn-link disabled">{{$vl->mail_status}}</a>
                                            @endif
                                         </td>
                                         <td>
                                          
                                            @if($vl->approver_status=="Approved" && $vl->manager_status=="Approved")
                                           <a href="{{url('downlaod-pdf')}}/{{$vl->quote_id}}">Download PDF</a>
                                            @else
                                            <a class="btn btn-link disabled">Download</a>
                                            @endif
                                         </td>
 
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
        <h4 class="modal-title">Issues</h4>
      </div>
      <div class="modal-body">
        <div class="panel-body">
                    <ul class="chat">
                        @foreach($comments as $val)
                        @if($val->uid==Session::get('userid'))
                        <li class="left clearfix comment comment_{{$val->quote_id}}"><span class="chat-img pull-left">
                            <img src="{{URL::to('images/U.png')}}" alt="You" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">{{$val->user_name}}</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>{{$val->created_at}}</small>
                                </div>
                                <p>
                                   {{$val->text}}
                                </p>
                            </div>
                        </li>

                        @else
                        <li class="right clearfix comment comment_{{$val->quote_id}}"><span class="chat-img pull-right">
                            <img src="{{URL::to('images/O.png')}}" alt="You" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font pull-right" >{{$val->user_name}}</strong> 
                                    <small class="pull-left text-muted">
                                        <span class="glyphicon glyphicon-time"></span>{{$val->created_at}}</small>
                                </div>
                                <br>
                                <p>
                                   {{$val->text}}
                                </p>
                            </div>
                        </li>
                        @endif
                        
                    
                    @endforeach
                    </ul>
                </div>
                <form id="issue_form">
                <div class="panel-footer">
                    <div class="input-group">
                      
                        <input type="hidden" name="issue_id" id="issue_id">
                        {{csrf_field()}}
                        <input id="issue_text" type="text" name="issue" class="form-control input-sm" placeholder="Type your message here..." required />
                        
                        <span class="input-group-btn">
                          <a class="btn btn-warning btn-sm" id="issue_form_submit">
                        Send</a>
                        </span>
                     
                        
                    </div>
                </div>
      </div>
      
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>

  </div>
</div>



<div id="mailModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header modal-header-info">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-envelope"></span> Compose Message</h4>
          </div>
          <div class="modal-body">
            <form   class="form-horizontal"  enctype="multipart/form-data" id="maile_sent_form" role="form" method="POST" action="">
                <div class="form-group">
                        <label for="to" class="col-sm-1 control-label">To:</label>
                        <div class="col-sm-11">
                              <input type="email" name="to_email" class="form-control select2-offscreen" id="to" placeholder="Type email" tabindex="-1" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cc" class="col-sm-1 control-label">CC:</label>
                        <div class="col-sm-11">
                              <input type="email" name="cc_email" class="form-control select2-offscreen" id="cc" placeholder="Type email" tabindex="-1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bcc" class="col-sm-1 control-label">BCC:</label>
                        <div class="col-sm-11">
                              <input type="email" name="bcc_email" class="form-control select2-offscreen" id="bcc" placeholder="Type email" tabindex="-1">
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="bcc" class="col-sm-1 control-label">Subject:</label>
                        <div class="col-sm-11">
                              <input type="email" name="subject_email" class="form-control select2-offscreen" id="bcc" placeholder="Subject" tabindex="-1">
                        </div>
                    </div>
                <div class="form-group">
                  <label class="col-sm-12" for="inputBody"><span class="glyphicon glyphicon-list"></span>Message</label>
                  <div class="col-sm-12"><textarea class="form-control" name="mail_ms" id="inputBody" rows="8" ></textarea></div>
                </div>

         <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button> 
           <!--  <button type="button" class="btn btn-warning pull-left">Save Draft</button> -->
            <input type="file" name="attachment_path" id="attachment_path"  class="btn btn-warning pull-left"> 
            <input type="hidden" name="quote_id" value="{{$vl->quote_id}}">
                {{ csrf_field() }}

            <button type="button" class="btn btn-primary " id="mail_sent">Send <i class="fa fa-arrow-circle-right fa-lg"></i></button>
            
          </div>
            </form>
          </div>
         
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTables-example");
  
 tr = table.getElementsByTagName("tr");
 
  
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }

}
</script>