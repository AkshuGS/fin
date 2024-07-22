<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanTransactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'custo_id',
        'txt_id',
        'amount',
        'per',
        'duration',
        'installment',
        'installment_date',
        'status'

    ];
}
