 @extends('admin.includes.master')
 @section('content')

   <div id="page-wrapper">
    @if (Session::has('msg'))
                <div class="alert alert-success" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Success!</strong> {{ Session::get('msg') }}  
               </div>
               @endif

    <form enctype="multipart/form-data" action="{{URL::to('generate')}}" method="post">
      {{csrf_field()}}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="catg" class="col-form-label">Policy Category</label>
     
      <select id="catg" name="catg" class="form-control">
        <option disabled selected>Select Category</option>
        @foreach($catg as $pr)
          <option value="{{$pr->category_id}}">{{$pr->policy_category}}</option>
        @endforeach
        
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="type" class="col-form-label">policy Type
</label>
     <select id="type" name="type" class="form-control">
      <option disabled selected>Select Category</option>
       
        
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-group col-md-6">
    <label for="inputAddress" class="col-form-label">Group Name</label>
    <input type="text" class="form-control" id="group" name="group" placeholder="Group Name">
  </div>
    <div class="form-group col-md-6">
    <label for="inputAddress2" class="col-form-label">Client Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="name">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity" class="col-form-label">Business</label>
      <input type="text" class="form-control" id="business" name="business">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity" class="col-form-label">Renewal Date</label>
      <input type="date" class="form-control" id="renew_date" name="renew_date">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity" class="col-form-label"> Sum Insured</label>
      <input type="text" class="form-control" id="sum_insured" name="sum_insured" onkeypress="return fnAllowNumeric(event)">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity" class="col-form-label">Current Insurer</label>
      <select id="insurer" name="insurer" class="form-control">
        <option disabled selected>Select Insurer</option>
        @foreach($insurer as $pr)
          <option value="{{$pr->company_id}}">{{$pr->company_name}}</option>
        @endforeach
        
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity" class="col-form-label"> Pre Tax Premium
</label>
      <input type="text" class="form-control" id="premium" name="premium" onkeypress="return fnAllowNumeric(event)">
    </div>
   

  
    <div class="form-group col-md-6">
      <label for="file" class="col-form-label">Document Upload</label>
      <input type="file" class="form-control" id="file" name="file">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Generate</button>
  </form>
</div>
<script type="text/javascript">
  
        $("#group").autocomplete({
          source : "{{ URL('autocomplete') }}",
          minlength: 3,
          select: function(event,ui){
           $('#group').val(ui.item.value);

         }
       });

        $('#catg').change(function(){
          $('#type').empty();
          var token='_token={{csrf_token()}}';
           $.ajax({  
                type: "POST",  
                url: "{{URL::to('fetch-prod-by-catg')}}?"+token,
                data : {"catg":$('#catg').val()},
                
                success: function(msg){
                  
                  $.each(msg, function( index, value ) {
                      appendData='<option value="'+value.product_id+'">'+value.product_name+'</option>';
                       $('#type').append(appendData);
                    });
                  
                }
            });
        });
    
</script>
@endsection
