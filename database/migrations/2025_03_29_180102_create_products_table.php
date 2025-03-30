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
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->decimal('price', 8, 2);
            $table->string('currency')->default('DKK');
            $table->decimal('vat_rate', 5, 2)->default(0.00);
            $table->string('tag_name')->nullable();
            $table->enum('tag_color', ['grey', 'green', 'blue', 'orange', 'red', 'black'])->nullable()->default('grey');
            $table->unsignedInteger('sort')->default(0);
            $table->timestamps();
            $table->index('sort');
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
