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
        Schema::create('waiters', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_number')->nullable();
            $table->string('passport_number')->unique();
            $table->enum('status', ['active', 'inactive', 'banned', 'booked'])->default('active');
            $table->string('reference_code')->unique()->nullable();
            $table->string('birth_place')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('travel_date')->nullable();
            $table->string('grp_create_at')->nullable();
            $table->foreignId('center_id')->constrained('center');
            $table->foreignId('city_id')->constrained('city');
            $table->enum('cas', ['1', '2', '3'] );
            $table->string('passport_expire_date')->nullable();
            $table->string('passport_issue_date')->nullable();
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('sub_category_id')->constrained('sub_categories');
            $table->boolean('created')->default(false);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('type', ['admin', 'client'])->default('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waiters');
    }
};
