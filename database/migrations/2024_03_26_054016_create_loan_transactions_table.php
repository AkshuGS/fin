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
        Schema::create('loan_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('custo_id');
            $table->string('txt_id');
            $table->string('amount');
            $table->tinyInteger('per');
            $table->tinyInteger('duration');
            $table->tinyInteger('installment');
            $table->tinyInteger('installment_date');
            $table->tinyInteger('status');

            //foreign key
            $table->foreign('custo_id')->references('id')->on('customers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_transactions');
    }
};
