
<!DOCTYPE html>
<html lang="en">
  <head>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
 
 <div class="container" >
 <br>
    <nav class="navbar">
    <div class="col-sm-12"> <p class="h2">LANDMARK INSURANCE PRIVATE LIMITED</p> <img src="{{URL::to('images/landmark.png')}}" width="80"  class="pull-right" style="margin-top:-50px; position: absolute; right:0px;z-index:1000;"> </div>
     
    </nav>
      <div class="row">
        <div class="col-md-10 ">
          <h3 class="text-center"><strong>Target Intimation 
           
          </strong> </h3>
        </div>
     <div class="col-md-12"> 
    <label class="control-label col-sm-2"  > </label>
    <div class="col-sm-8">
   <table class="table table-bordered table-striped">
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
    </thead>
  </table>
</div>
</div>
</div>
</div>
</body>
</html>
