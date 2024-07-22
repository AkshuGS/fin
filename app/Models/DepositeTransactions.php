<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositeTransactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'custo_id',
        'txt_id',
        'amount',
        'loan_id',
        'remaining_amount',
        'status'

    ];
}
