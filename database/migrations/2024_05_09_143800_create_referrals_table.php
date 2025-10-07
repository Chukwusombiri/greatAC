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
        Schema::create('referrals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('username');
            $table->integer('level');
            $table->float('bonus')->default(0);
            $table->string('downlineUsername');
            $table->uuid('downline_id')->nullable();
            $table->foreign('downline_id')->references('id')->on('users')->nullOnDelete();
            $table->foreignUuid('user_id')->constrained();                            
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
        Schema::dropIfExists('referrals');
    }
};
