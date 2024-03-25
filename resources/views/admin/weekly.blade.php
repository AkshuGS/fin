<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   @include('admin.css.css')

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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Calculator</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                   

                    <!-- Content Row -->

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-8 mb-7">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Calculate</h6>
                                </div>
                                <div class="card-body">
                                <form id="myForm" onsubmit="return false">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" name="loanAmount" id="loanAmount" placeholder="Loan Amount">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" name="processingfee" id="processingfee" placeholder="Processing Fee">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" name="interest" id="Interest" placeholder="Interests per year">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" name="months" id="Months" placeholder="Months">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                    <button  id="calculate" class="btn btn-danger btn-user btn-block">
                                        Calculate
                                    </button>
                                        
                                    </div>
                                    </div>
                                </form>
                                <hr>
                                <div class="row">
                                   
                                   <h6>Weekly Installment</h6>
                                    <table class="table table-bordered" id="details"  style="display:none;">
                                        <th>Amount</th>
                                        <th>Interest</th>
                                        <th>total</th>
                                    </table>
                               
                                   </div>
                                 
                                </div>
                            </div>
                        <!-- Color System -->
                        </div>

                        <div class="col-lg-4 mb-5">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4" id="table" style="display:none;">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Deatils</h6>
                                </div>
                                <div class="card-body hidden">
                                    <p><b>Total Amount:</b><span id="totalLoan">0</span></p>
                                    <p><b>Monthly EMI:</b><span id="monthlyEMI">0</span></p>
                                    <p><b>Intrest Amount:</b><span id="interestamount">0</span></p>
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

   
   
    @include('admin.auth.logout')
    @include('admin.js.js')
    <script type="text/javascript">
   
//     $('#myForm').submit(function() {
//     // Get all the forms elements and their values in one step
//     var $inputs = $('#myForm :input');

//     // not sure if you wanted this, but I thought I'd add it.
//     // get an associative array of just the values.
//     var values = {};
//     $inputs.each(function() {
//         values[this.name] = $(this).val();
//     });
//     dataValue=JSON.stringify(values);
//     laonA=values["loanAmount"];
//     pf=values["processingfee"];

//     alert(JSON.stringify(values));
//     // alert(laonA);


// });
       
       
    $("#calculate").click(
    function(){
           
    var $inputs = $('#myForm :input');
    // not sure if you wanted this, but I thought I'd add it.
    // get an associative array of just the values.
    var values = {};
    $inputs.each(function() {
        values[this.name] = $(this).val();
    });
    dataValue=JSON.stringify(values);
    loanA=values["loanAmount"];
    pf=values["processingfee"];
    interest=values["interest"];
    months=values["months"];

    per= interest/12/100;
    i=per.toFixed(3);

    f=(1+parseFloat(i))**months;
    s=(1+parseFloat(i))**months-1;
    res= f.toFixed(5)/s.toFixed(5);
    resD = res.toFixed(5)
    monthlyEmi = loanA * parseFloat(i) * resD;
    totalLoan = Math.round(monthlyEmi) * months;


    document.getElementById("totalLoan").innerHTML = totalLoan ;
    document.getElementById("monthlyEMI").innerHTML = Math.round(monthlyEmi);
    document.getElementById("interestamount").innerHTML = parseInt(totalLoan) - parseInt(loanA);
                $("#table").show();
                $("#details").show();

            }
        );
    </script>

</body>

</html>