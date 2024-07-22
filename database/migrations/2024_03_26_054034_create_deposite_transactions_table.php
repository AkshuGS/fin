<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('deposite_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('custo_id');
            $table->unsignedBigInteger('loan_id');
            $table->string('txt_id');
            $table->string('amount');
            $table->string('remaining_amount');
            $table->tinyInteger('status');

            //foreign key
            $table->foreign('custo_id')->references('id')->on('customers');
            $table->foreign('loan_id')->references('id')->on('loan_transactions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposite_transactions');
    }
};
