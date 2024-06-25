<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->longText('code')->comment("Emails code to identify this specific email");
            $table->string('sender_id')->comment("UserID from Users table who sent the emails");
            $table->string('receiver_id')->comment("UserID from Users table who will receive the emails");
            $table->boolean('status')->comment("Email status, if successefull sent or not");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};
