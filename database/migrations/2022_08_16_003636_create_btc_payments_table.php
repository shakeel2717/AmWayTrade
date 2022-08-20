<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('btc_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId("currency_id")->default(3)->constrained()->onDelete("cascade");
            $table->string('currencyf');
            $table->double('amount');
            $table->double('amountf');
            $table->string('address');
            $table->string('dest_tag')->nullable();
            $table->string('txn_id');
            $table->string('status')->default('initialized');
            $table->string('checkout_url')->default('initialized');
            $table->string('status_url')->default('initialized');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('btc_payments');
    }
};
