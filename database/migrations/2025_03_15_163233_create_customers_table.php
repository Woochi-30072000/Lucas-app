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
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('image')->nullable();
            $table->string('email',100)->unique();
            $table->string('phone',100)->unique();
            $table->string('address',200)->nullable(); 
            $table->date('birthday')->nullable();
            $table->text('description')->nullable();
            $table->text('customer_agent')->nullable();
            $table->tinyInteger('gender')->nullable()->default(1);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
