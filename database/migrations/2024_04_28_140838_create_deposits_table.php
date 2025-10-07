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
        Schema::create('deposits', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('amount');
            $table->boolean('isApproved')->default(0);
            $table->foreignUuid('user_id')->nullable()->constrained()->onDelete('set null')->onUpdate('cascade');
            $table->string('plan');
            $table->string('plan_id')->nullable();
            $table->string('wallet');            
            $table->string('address');
            $table->string('wallet_id')->nullable();
            $table->string('receipt')->nullable();
            $table->boolean('isFromBal')->default(0);
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
        Schema::dropIfExists('deposits');
    }
};
