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
                                            <code id="amountcheck"></code>
                                        </div>
                                        
                                    </div>
                                     <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" name="processingfee" id="processingfee" placeholder="Processing Fee">
                                        <code id="pfcheck">Processing Fee should not be empty</code>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" name="interest" id="Interest" placeholder="Interests per year">
                                        <code id="intrestcheck">Interest should not be empty</code>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" name="months" id="Months" placeholder="Months">
                                        <code id="monthscheck">Months should not be empty</code>
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
                                   <table class="table table-bordered" id="details"  style="display:none;">
                                        <thead>
                                        <tr>
                                        <th>Principal</th>
                                        <th>Interest</th>
                                        <th>Months</th>
                                        </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            
                                        </tbody>
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
                                    <p><b class="text-info">Total Amount: </b><span id="totalLoan">0</span></p>
                                    <p><b class="text-info">Monthly EMI: </b><span id="monthlyEMI">0</span></p>
                                    <p><b class="text-info">Intrest Amount: </b><span id="interestamount">0</span></p>
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
    @include('admin.auth.logout')

    @include('admin.js.js')
    <script type="text/javascript">

    $().ready(function (){
        $("#amountcheck").hide();
        $("#pfcheck").hide();
        $("#intrestcheck").hide();
        $("#monthscheck").hide();
        let amountError = true; 
        let pfError = true;
        let interestError = true;
        let monthsError = true;
        $("#loanAmount").keyup(function (){
            validateAmount();
        });
        $("#pfcheck").keyup(function (){
            validatePf();
        });
        $("#intrestcheck").keyup(function (){
            validateInterest();
        });
        $("#monthscheck").keyup(function (){
            validateMonths();
        });

    });
    

    
    function validatePf(){
        let pf= $("#processingfee").val();
        if(pf.length == ""){
            $("#pfcheck").show();
            $("#pfcheck").html("Processing fee should not be empty")
            pfError = false;
            return false;
        }
        else if($.isNumeric(pf) == false){
            
            $("#pfcheck").show();
            $("#pfcheck").html("Processing fee should be in number");
            pfError = false;
            return false;
        }
        else{
            $("pfcheck").hide();
            pfError = true;
            return true;
        }
    }
    
    function validateInterest(){
        let getValue= $("#Interest").val();
        if(getValue.length == ""){
            $("#intrestcheck").show();
            $("#intrestcheck").html("Interest should not be empty")
            interestError = false;
            return false;
        }
        else if($.isNumeric(getValue) == false){
            $("#intrestcheck").show();
            $("#intrestcheck").html("Interest should be in number");
            interestError = false;
            return false;
        }
        else{
            $("intrestcheck").hide();
            interestError = true;
            return true;
        }
    }
    
    function validateMonths(){
        let getValue= $("#Months").val();
        if(getValue.length == ""){
            $("#monthscheck").show();
            $("#monthscheck").html("Months should not be empty")
            monthsError = false;
            return false;
        }
        else if($.isNumeric(getValue) == false){
            $("#monthscheck").show();
            $("#monthscheck").html("Months should be in number");
            monthsError = false;
            return false;
        }
        else{
            $("monthscheck").hide();
            monthsError = true;
            return true;
        }
    }

    function validateAmount(){
        let loanAmountValue= $("#loanAmount").val();
        if(loanAmountValue.length == ""){
            $("#amountcheck").show();
            $("#amountcheck").html("Loan Amount should not be empty")
            amountError = false;
            return false;
        }
        else if($.isNumeric(loanAmountValue) == false){
            $("#amountcheck").show();
            $("#amountcheck").html("Amount should be in number");
            amountError = false;
            return false;
        }
        else{
            $("amountcheck").hide();
            amountError = true;
            return true;
        }
    }
   
    $("#calculate").click(

    function(){

    validateAmount();
    validatePf();
    validateInterest();
    validateMonths();

    

    var $inputs = $('#myForm :input');
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
    if(amountError == true && pfError == true && interestError == true && monthsError == true){
        $("#table").show();

    }           
    
               
             }
        );
    </script>

</body>

</html>