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
        Schema::create('users_emails', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->index()->comment('UsersID from users table"');
            $table->foreign('user_id')->references('user_id');
            $table->tinyInteger('status');
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_emails');
    }
};
