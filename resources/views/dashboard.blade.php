<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Dynell Product</title>

    <!-- Custom fonts for this template -->
    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

  
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Exam <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Product</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Dynell Ayon</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('template/img/undraw_profile.svg')}}">
                            </a>
                            
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Products</h1>
                 
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                            <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary " id="addproductmodal" data-toggle="modal" data-target="#staticBackdrop">
  Add Product
</button>       
                        </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Unit</th>
                                            <th>Availability Inventory </th>
                                            <th>Expiry Date</th>
                                            <th>Availability Inventory Cost</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Unit</th>
                                            <th>Availability Inventory </th>
                                            <th>Expiry Date</th>
                                            <th>Availability Inventory Cost</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($data as $key=>$dataa)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td><img src="{{asset('product')}}/{{$dataa->image}}" class="table-user-thumb" alt="" width="50" height="60"></td>
                                            <td>{{$dataa->name}}</td>
                                            <td>{{$dataa->price}}</td>
                                            <td>{{$dataa->unit}}</td>
                                            <td>{{$dataa->available}}</td>
                                            <td>{{$dataa->expiredate}}</td>
                                            <td>{{($dataa->available)*($dataa->price)}}</td>
                                            <td>
                                            <i class="fa fa-edit" style="font-size:20px;padding-left: 5px;padding-right: 10px;" 
                                            data-toggle="modal" data-target="#updateModal" data-product-id="{{$dataa->id}}"  
                                                    data-product-name="{{$dataa->name}}"
                                                    data-product-price="{{$dataa->price}}"
                                                    data-product-availability="{{$dataa->available}}"
                                                    data-product-unit="{{$dataa->unit}}"
                                                    data-product-image="{{$dataa->image}}"
                                                    data-product-info="{{$dataa->info}}"
                                                    data-product-expiredate="{{$dataa->expiredate}}"></i>
                                         <a href="" class="btn btn-danger deleteProduct" data-product-id="{{$dataa->id}}">   <i class="fa fa-trash" style="font-size:20px"></i></a></td>
                                        </tr>
                                      @endforeach
                                        
                                        
                                    </tbody>
                                    
                                </table>
{{$data->links()}}
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; My Exam 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
   

    <!-- Bootstrap core JavaScript-->
  <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
  
    
   
    <script>
  $(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  

  }) 
</script>
@include('add_product_modal')
@include('update_product_modal')
<script>
    $(document).ready(function() {
        // Triggered when the modal is about to be shown
        $('#updateModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal

            // Retrieve data attributes from the button
            var productId = button.data('product-id');
            var productName = button.data('product-name');
            var productPrice = button.data('product-price');
            var productAvailability = button.data('product-availability');
            var productUnit = button.data('product-unit');
            var productInfo = button.data('product-info');
            var productExpiredate = button.data('product-expiredate');
            var productImage = button.data('product-image');
            // Retrieve more data attributes as needed

            // Pre-fill the form fields with the retrieved data
            $('#up_id').val(productId);
            $('#up_name').val(productName);
            $('#up_price').val(productPrice);
            
            
            $('#up_availability').val(productAvailability);
            $('#up_unit').val(productUnit);
            $('#up_info').val(productInfo);
             $('#up_expiredate').val(productExpiredate);
             
             // Set the preview image source

$('#previewImage').attr('src', "{{ asset('product') }}/" + productImage);

            // Pre-fill more form fields as needed
        });

        // Update Product button click event
       $('#updateProduct').click(function(e) {
            e.preventDefault();

// Set the value of the hidden input field in the form
          var id = $('#up_id').val();
          var name=$('#up_name').val();
            // Create FormData object
            var formData = new FormData($('#updateProductform')[0]);

            // Add additional data if needed
            formData.append('name', name);
            formData.append('price', $('#up_price').val());
            formData.append('availability', $('#up_availability').val());
            formData.append('unit', $('#up_unit').val());
            formData.append('info', $('#up_info').val());
            formData.append('expiredate', $('#up_expiredate').val());
            formData.append('image', $('#up_image')[0].files[0]);

         
              $.ajax({
                 url: "{{route('update.product', '')}}/"+id,
                 type: 'POST',
                 data: formData,
                 processData: false,
                 contentType: false,
                 success: function(response) {
                     if(response.status == "success"){          
                      

                      $('#updateProductform')[0].reset();
                       $('#updateModal').modal('hide');
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


         $(document).on('click','.deleteProduct',function() {
        // Get the product ID from the data-product-id attribute
        

        // Confirm with the user before proceeding with the delete
        if (confirm('Are you sure you want to delete this product?')) {
            // Send AJAX request to delete the product
            $.ajax({
                url: "{{ route('delete.product','')}}/" + $(this).data('product-id'),
                type: 'DELETE',
                success: function(response) {
                    if (response.status == "success") {
                        // Optionally, update the UI or perform other actions on success
                        alert('Product deleted successfully!');
                        // Reload or update the product list

                        // Remove the deleted row from the DOM
                    $(".table").load(location.href + " .table");
                    } else {
                        alert('Failed to delete product.');
                    }
                },
                error: function(err) {
                    alert('Error deleting product.');
                }
            });
        }
    });

    });
</script>


</body>

</html>