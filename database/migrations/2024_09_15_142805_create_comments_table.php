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
        Schema::create('comments', function (Blueprint $table) {
            $table->integer('user_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->string('subject',100)->nullable();
            $table->string('review')->nullable();
            $table->string('IP',20)->nullable();
            $table->integer('rate')->default('0');
            $table->string('status','5')->default('New');
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
