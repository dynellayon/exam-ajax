<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
     
      </div>
       <div class="errmsgcontainer"></div>
    <form method="post" id="addProductform" enctype="multipart/form-data">
      @csrf
      <div class="modal-body">
       
            <div class="form-row">
    <div class="col-md-6 mb-3">
      <label >Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Product name" required>
            @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
    </div>

    <div class="col-md-3 mb-3">
      <label >Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Product price" required>
     @error('price')
          <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
    </div>
    <div class="col-md-3 mb-3">
      <label >Availability</label>
      <input type="text" class="form-control" name="availability" id="availability" placeholder="Product availability"  required>
      @error('availability')
          <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
    </div>
  </div>
             <div class="form-group">
              <label >Unit</label>
              <input type="text" class="form-control" name="unit" id="unit" placeholder="Product unit">
              @error('unit')
          <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            </div>
             <div class="form-group">
              <label >Info</label>
              <input type="text" class="form-control" name="info" id="info" placeholder="Product information">
              @error('info')
          <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            </div>
             <div class="custom-file">
               <label >Image</label>
                <input type="file" class="custom-file-input" id="image">
                <label class="custom-file-label" for="customFile">Choose Image</label>
                @error('image')
          <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            </div>
            <div class="form-group">
              <label>Expiry Date</label>
              <input type="date" class="form-control" name="expiredate" id="expiredate">
              @error('expiredate')
          <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            </div>
            
            
      </div>
   
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="addProduct" >Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#addProduct').click(function(e) {
            e.preventDefault();

            // Create FormData object
            var formData = new FormData($('#addProductform')[0]);

            // Add additional data if needed
            formData.append('name', $('#name').val());
            formData.append('price', $('#price').val());
            formData.append('availability', $('#availability').val());
            formData.append('unit', $('#unit').val());
            formData.append('info', $('#info').val());
            formData.append('expiredate', $('#expiredate').val());
            formData.append('image', $('#image')[0].files[0]);
            // Perform AJAX request
             $.ajax({
                url: "{{route('add.product')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if(response.status == "success"){          
                      $('#staticBackdrop').modal('hide');

                     $('#addProductform')[0].reset();
                      $(".table").load(location.href + " .table");
                    }
                },
                error: function(err) {
                  $('.errmsgcontainer').html('');
                    let error =err.responseJSON;
                    $.each(error.errors, function(index,value){
                      $('.errmsgcontainer').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });
                }
            });
        });
    });
</script>
