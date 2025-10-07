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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignUuid('plan_id')->nullable()->constrained()->onDelete('set null')->onUpdate('cascade');
            $table->uuid('prev_plan_id')->nullable();
            $table->foreign('prev_plan_id')->references('id')->on('plans')->nullOnDelete()->onUpdate('cascade');
            $table->string('uplineUsername')->nullable();   
            $table->uuid('upline_id')->nullable();
            $table->foreign('upline_id')->references('id')->on('users')->nullOnDelete(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
