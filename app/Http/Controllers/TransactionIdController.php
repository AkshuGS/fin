<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\LoanTransactions;


class TransactionIdController extends Controller
{
    

    public function transactionIdGenerator(string $id){
        
        do {
            $txtID = $id.'_'.random_int(100000, 999999);
        } while (LoanTransactions::where("txt_id", "=", $txtID)->first());
         return $txtID;
    }
}
