  @extends('admin.includes.master')
 @section('content')

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">LANDMARK CORPORATE INSURANCE</h3>

                     
                @if (Session::has('msg'))
                <div class="alert alert-success" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Success!</strong> {{ Session::get('msg') }}  
               </div>
               @endif

                </div>


                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                               </i><i class="fa fa-list-alt fa-5x" aria-hidden="true"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$count->all_cnt}}</div>
                                    <div>All Quotes</div>
                                </div>
                            </div>
                        </div>
                        <a href="user-quotes/0">
                            <div class="panel-footer">
                                <span class="pull-left">All Quotes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <i class="fa fa-check fa-5x" aria-hidden="true"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$count->approve_cnt}}</div>
                                    <div>Approved Quotes</div>
                                </div>
                            </div>
                        </div>
                       <a href="user-quotes/1">
                            <div class="panel-footer">
                                <span class="pull-left"> Approved Quotes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                             <i class="fa fa-list-alt fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$count->pending_cnt}}</div>
                                    <div>Pending Quotes</div>
                                </div>
                            </div>
                        </div>
                      <a href="user-quotes/2">
                            <div class="panel-footer">
                                <span class="pull-left">Pending Quotes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                 <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Upload GHI sheet here</h2>
                <form method="POST" action="{{URL::to('upload-ghi-xl')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" name="excel">
                    <button type="submit">upload</button>
                    upload
                </form>
                </div>
               <!--  <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div> -->
            </div>
          
            <!-- /.row -->
            <div class="row"> 
            
            </div>
            <!-- /.row -->
        </div>

        @endsection
   
 <script type="text/javascript">
     window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
 </script>


 
    

  



 

<!--html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">

  
  

  
  
  

  

  <script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>

  

  

  

  
    <link rel="stylesheet" type="text/css" href="/css/result-light.css">
  

  
    
      <link rel="stylesheet" type="text/css" href="http://akquinet.github.com/jquery-toastmessage-plugin/demo/css/jquery.toastmessage-min.css">
    
  
    
      <script type="text/javascript" src="http://akquinet.github.com/jquery-toastmessage-plugin/demo/jquery.toastmessage-min.js"></script>
    
  

  <style type="text/css">
    
  </style>

  <title>jQuery Toastmessage plugin (akquinet)</title>

  
    




<script type='text/javascript'>//<![CDATA[

$(document).ready(function() {

    var yourText = 'Success Dialog which is NOT sticky',
        toastMessageSettings = {
            text: yourText,
            sticky: false,
            position: 'top-right',
            type: 'success',
            closeText: '',
            close: function() {
                console.log("toast is closed ...");
            }
        };


     
        var myToast = $().toastmessage('showToast', toastMessageSettings);
        console.log('myToast:');
        console.log(myToast);
    

});
//]]> 

</script>

  
</head>

<body>
  

  
  <script>
  // tell the embed parent frame the height of the content
  if (window.parent && window.parent.parent){
    window.parent.parent.postMessage(["resultsFrame", {
      height: document.body.getBoundingClientRect().height,
      slug: "None"
    }], "*")
  }
</script>

</body>

</html>

