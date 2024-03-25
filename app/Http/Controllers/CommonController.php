<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{

    public function dashboard()
    {
        return view('welcome');
    }
    public function customers()
    {
        return view('admin.customes');
    }
    public function addcustomers()
    {
        return view('admin.add-customer');
    }
    public function customersdetails()
    {
        return view('admin.customer-details');
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
    
    public function giveloan()
    {
        return view('admin.single-user-loan');
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
   

}
