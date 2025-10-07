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
        Schema::create('transfers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->decimal('amount');
            $table->uuid('sender_id')->nullable();
            $table->foreign('sender_id')->references('id')->on('users')->nullOnDelete();
            $table->string('sender');
            $table->uuid('receiver_id')->nullable();
            $table->foreign('receiver_id')->references('id')->on('users')->nullOnDelete();
            $table->string('receiver');
            $table->enum('status',['pending','transferred','rejected'])->default('pending');
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
        Schema::dropIfExists('transfers');
    }
};
