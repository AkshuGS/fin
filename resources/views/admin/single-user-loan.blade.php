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
                            <h6 class="m-0 font-weight-bold text-primary">Customer name :<code> {{$customer->fname}}  {{$customer->lname}}</code>
                                {{-- <a href="/customers-details"> <button class="btn ">Details</button></a> --}}
                            </h6>
                            
                        </div>
                        
                        <div class="card-body">
                            <div class="row">
                               
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        {{-- <div class="text-left">
                                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                        </div> --}}
                                        @if (session('alert'))
                                        <div class="alert alert-success">
                                            {{ session('alert') }}
                                        </div>
                                         @endif
                                        <form class="user" action="{{ route('give.loan') }}" method="post">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label><b>Amount</b></label>
                                                    <input type="text" name="amount" class="form-control form-control-user" id="amount" placeholder="Amount">
                                                    @if ($errors->has('amount'))
                                                    <span class="text-danger">{{ $errors->first('amount') }}</span>
                                                    @endif
                                                </div>
                                                <div class="col-sm-6">
                                                    <label><b>Installment</b></label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" value="3" type="radio" name="installment" id="3installment">
                                                        <label class="form-check-label" for="3installment">
                                                          3 Months
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" value="6" type="radio" name="installment" id="6installment">
                                                        <label class="form-check-label" for="6installment">
                                                          6 Months
                                                        </label>
                                                      </div>
                                                      @if ($errors->has('installment'))
                                                      <span class="text-danger">{{ $errors->first('installment') }}</span>
                                                      @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label><b>Percentage</b></label>
                                                <span id="slider_value2" style="color:red;font-weight:bold;"></span>%<br>
                                                <input type="range" min="20" max="25" step="1" name="percentage" value="24" onchange="show_value2(this.value)">
                                                {{-- <select class="form-control form-control-user" name="percentage"id="percentage"  placeholder="percentage">
                                                    <option value="24">24%</option>
                                                </select> --}}
                                                @if ($errors->has('percentage'))
                                                      <span class="text-danger">{{ $errors->first('percentage') }}</span>
                                                      @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label><b>Loan Processing Date</b></label>
                                                    <input  type="datetime-local"
                                                    id="Test_DatetimeLocal"
                                                    min="1960-01-01"
                                                    max="2025-12-31"
                                                    step="1" style=" font-size: .8rem;
                                                    border-radius: 10rem;
                                                    padding: 0.8rem 5.6rem;
                                                    border: 1px solid #d1d3e2;" name="txndate">
                                                     @if ($errors->has('txndate'))
                                                     <span class="text-danger">{{ $errors->first('txndate') }}</span>
                                                     @endif
                                                </div>
                                               
                                            </div>
                                            <button type="submit" class="btn btn-success btn-user">
                                                Sanction
                                            </button>
                                           
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
  <script>
    function show_value2(x)
    {
    document.getElementById("slider_value2").innerHTML=x;
    }
  </script>
  
</body>

</html>