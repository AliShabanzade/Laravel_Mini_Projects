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
            $table->foreignId('user_id')->nullable()->comment('is writer')->constrained()->cascadeOnUpdate()->nullOnDelete();
            $table->string('title');
            $table->text('body');
            $table->unsignedBigInteger('views')->default(0);
            $table->boolean('published')->default(false);
            $table->unsignedDouble('price')->default(0);
            $table->unsignedBigInteger('inventory')->default(0);
            $table->timestamps();
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
