<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Finance</title>

    <!-- Custom fonts for this template -->
  @include('admin.css.css')
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       @include('admin.sidebar.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               @include('admin.navbar.navbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                  <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add new customer
                                <a href="/customers"> <button class="btn ">list</button></a>
                            </h6>
                            
                        </div>
                        
                        <div class="card-body">
                            <div class="row">
                               
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        {{-- <div class="text-left">
                                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                        </div> --}}
                                        <form class="user">
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="text" class="form-control form-control-user" id="age" placeholder="Age">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control form-control-user" id="professional" placeholder="Professional">
                                                </div>
                                            </div>
                                            {{-- <div class="form-group">
                                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                                            </div> --}}
                                            <div class="form-group">
                                                
                                            <input type="text" class="form-control form-control-user" id="address" placeholder="Address">
                                               
                                            </div>
                                            <a href="login.html" class="btn btn-success btn-user btn-block">
                                                Save
                                            </a>
                                           
                                        </form>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    

  @include('admin.js.js')

</body>

</html>