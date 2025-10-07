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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->timestamp('last_sign_in_at')->nullable();
            $table->timestamp('last_sign_out_at')->nullable();           
            $table->float('acBal', 9, 2)->default(0);
            $table->double('acRoi',9, 2)->default(0);
            $table->double('perMonRoi',9, 2)->default(0);
            $table->float('refBonus')->default(0);
            $table->boolean('isEarning')->default(0);
            $table->boolean('isBanned')->default(0);
            $table->string('username')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();            
            $table->integer('age')->nullable();
            $table->string('phone')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('occupation')->nullable();
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->boolean('hasDeposited')->default(0);
            $table->string('referralId')->nullable();            
            $table->rememberToken();
            $table->boolean('autoReinvest')->default(1);
            $table->integer('earningCounter')->default(0);
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
