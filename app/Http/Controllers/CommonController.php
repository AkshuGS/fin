<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\LoanTransactions;

use App\Http\Controllers\TransactionIdController;


class CommonController extends Controller
{

    public function dashboard()
    {
        return view('welcome');
    }
    public function customers()
    {
        $customers = Customers::latest()->get();
        // dd($customers);
        return view('admin.customes', ["customers"=>$customers]);
    }
    public function addcustomers()
    {
        return view('admin.add-customer');
    }

    public function customersdetails(Request $request, string $id)
    {
        $customer = Customers::where("id",$id)->first();
        return view('admin.customer-details', ["customer"=>$customer]);
    }

    public function giveloan(Request $request, string $id)
    {
        $customer = Customers::where("id",$id)->first();
        return view('admin.single-user-loan',["customer"=>$customer]);
    }

    public function sanctionLoan(Request $request){
        
       
        $request->validate([
            'amount' => 'required',
            'installment' => 'required',
            'percentage' => 'required',
            'txndate' =>"required"
           
        ]);
        $data = $request->all();
        
        $trObject = new TransactionIdController();
        $trancarionID = $trObject->transactionIdGenerator("TH");

        if($data['installment']==6){
            
        }  
        else if($data['installment']==3){

        }
        else{

        }

        LoanTransactions::create([
            'amount' => $data['amount'],
            'installment' => $data['installment'],
            'per' => $data['percentage'],
            'txt_id' => $trancarionID,
            'duration' =>$data['installment'],
            'installment_date'=>1,
            'status' =>1,
            'custo_id' =>1

        ]);
        return redirect()->back()->with('alert', 'Loan has been sanctioned');
    }

    public function trasactions()
    {
        return view('admin.all-transactions');
    }
    public function usertrasactions()
    {
        return view('admin.user-transactions');
    }
    public function singletrasactions()
    {
        return view('admin.single-loan-transaction');
    }
    
   
    public function vendors()
    {
        return view('admin.vendors');
    }

    public function vendorsdetails()
    {
        return view('admin.vendor-details');
    }
    public function addvendors()
    {
        return view('admin.add-vendor');
    }
    public function addmoney()
    {
        return view('admin.deposite-money');
    }
    public function monthly()
    {
        return view('admin.monthly');
    }
    public function weekly()
    {
        return view('admin.weekly');
    }

    public function addCustomer(Request $request){
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users',
            'professional' => 'required',
            'dob' => 'required',
            'address' => 'required',
        ]);
        $data = $request->all();
        Customers::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'profession' => $data['professional'],
            'dob' => $data['dob'],
            'address' => $data['address'],
           
        ]);
        return redirect()->back()->with('alert', 'Customer added successfully');
    }
   

}
