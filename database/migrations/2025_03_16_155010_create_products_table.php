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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->unique();
            $table->float('price', 10,2)->nullable()->default(0);
            $table->float('sale', 10,2)->nullable()->default(0);
            $table->string('image',)->nullable();
            $table->text('description',500)->nullable();
            $table->tinyInteger('status')->nullable()->default();
            $table->timestamps();
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
