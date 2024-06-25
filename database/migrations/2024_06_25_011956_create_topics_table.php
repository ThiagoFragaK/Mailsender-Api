<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Topic name');
            $table->timestamps('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
