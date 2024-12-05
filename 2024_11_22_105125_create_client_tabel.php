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
        Schema::create('client_tabel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users_tabel');
            $table->string('phone_number');
            $table->string('address');
            $table->string('city');
            $table->foreignId('admin_id')->constrained('admin_tabel');
            $table->enum('status', ['active', 'inactive', 'banned']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_tabel');
    }
};
