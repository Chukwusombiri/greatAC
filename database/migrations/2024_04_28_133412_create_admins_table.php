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
        Schema::create('admins', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->enum('admin_role',['super_admin','operation_manager','moderator','content_manager','support_assistance']);
            $table->rememberToken();
            $table->boolean('isOnline')->default(0);
            $table->boolean('isSuspended')->default(0);
            $table->timestamp('last_sign_in_at')->nullable();
            $table->timestamp('last_sign_out_at')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('admins');
    }
};
