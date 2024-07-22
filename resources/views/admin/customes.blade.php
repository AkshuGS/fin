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
                            <h6 class="m-0 font-weight-bold text-primary">All Customers   <a class="btn btn-success btn-circle" href="/add-customers"><i class="fas fa-plus"></i></a></h6>
                          
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Profession</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Joined</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @forelse ($customers as $customer)
                                        <tr>
                                            <td><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> <a href="/customers-details/{{$customer->id}}" class="btn">
                                                <span class="text">{{$customer->fname}} {{$customer->lname}}</span>
                                             </a></td>
                                            <td>{{$customer->profession}}</td>
                                            <td>{{$customer->address}}</td>
                                            <td>{{$customer->email}}</td>
                                            <td>{{$customer->created_at}}</td>
                                            {{-- <td>{{$customer->profession}}</td> --}}
                                        </tr>
                                        @empty
                                        <p>No users</p>
                                        @endforelse

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