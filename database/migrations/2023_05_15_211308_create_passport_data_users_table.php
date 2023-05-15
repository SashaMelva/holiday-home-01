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
        Schema::create('passport_data_users', function (Blueprint $table) {
            $table->id();
            $table->integer('data_user_id');
            $table->string('citizenship');
            $table->integer('passport_series');
            $table->integer('passport_number');
            $table->date('date_registration');
            $table->string('issued_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passport_data_users');
    }
};
