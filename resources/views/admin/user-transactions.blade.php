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
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-6">  <h6 class="m-1 font-weight-bold text-primary">Transactions </h6></div>
                                <div class="col-sm-12 col-md-4 col-lg-3">  <h6 class="m-1 font-weight-bold text-info">Total Amount: 20000 </h6></div>
                                <div class="col-sm-12 col-md-4 col-lg-3">  <h6 class="m-1 font-weight-bold text-danger">Remainng Amount: 10000 </h6></div>
                           
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Transaction ID</th>
                                            <th>Amount</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Date</th>
                                            <th>Transaction ID</th>
                                            <th>Amount</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                           
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>2011/04/25</td>
                                            <td>TXT123</td>
                                            <td>20000</td>
                                            <td>Deposite</td>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td>2011/04/25</td>
                                            <td>TXT123</td>
                                            <td>20000</td>
                                            <td>Barrowed</td>
                                            <td> 
                                                <div class="dropdown no-arrow">
                                                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        ON
                                                    </button>
                                                    <div class="dropdown-menu animated--fade-in"
                                                        aria-labelledby="dropdownMenuButton">
                                                        <div class="dropdown-item">IL: 10 <br>MI:1000 </div>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="/trasactions/txt">view</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
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
                        <span>Copyright &copy; Your Website 2020</span>
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

    <!-- Logout Modal-->
    @include('admin.auth.logout')

  @include('admin.js.js')

</body>

</html>