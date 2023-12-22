<!-- Modal -->
<div class="modal fade" id="updateModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="updateModallabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModallabel">Update Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <!-- Move the error message container outside of the modal-header div -->
      </div>
      
      <div class="errmsgcontainer"></div> <!-- Move this line outside of the modal-header div -->
       <form method="put" id="updateProductform" enctype="multipart/form-data">
      @csrf
      
      <div class="modal-body">
       <!-- Add a hidden input field for the product ID -->
<input type="hidden" id="up_id" name="up_id" value="">

            <div class="form-row">
    <div class="col-md-6 mb-3">
      <label >Name</label>
      <input type="text" class="form-control " name="up_name" id="up_name"  placeholder="Product name" required>
           
    </div>

    <div class="col-md-3 mb-3">
      <label >Price</label>
        <input type="text" class="form-control" name="up_price" id="up_price" placeholder="Product price" required>
     
    </div>
    <div class="col-md-3 mb-3">
      <label >Availability</label>
      <input type="text" class="form-control" name="up_availability" id="up_availability" placeholder="Product availability"  required>
      
    </div>
  </div>
             <div class="form-group">
              <label >Unit</label>
              <input type="text" class="form-control" name="up_unit" id="up_unit" placeholder="Product unit">
             
            </div>
             <div class="form-group">
              <label >Info</label>
              <input type="text" class="form-control" name="up_info" id="up_info" placeholder="Product information">
               
            </div>
             <div class="custom-file">
               <label >Image</label>
                <input type="file" class="custom-file-input" name="up_image" id="up_image" >
                <label class="custom-file-label" for="customFile">Choose Image</label>
                
                
            </div>
            <img id="previewImage" class="table-user-thumb" alt="" width="50" height="60">
            <div class="form-group">
              <label>Expiry Date</label>
              <input type="date" class="form-control" name="up_expiredate" id="up_expiredate">
              
            </div>
            
            
      </div>
   
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="updateProduct"  >Update</button>
      </div>
    </form>
    </div>
  </div>
</div>

