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
        Schema::create('reviews', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('product_id')->nullable()->index('product_id');
            $table->integer('user_id')->nullable()->index('user_id');
            $table->integer('rating')->nullable();
            $table->text('comment')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->boolean('is_active')->default(false);
            $table->softDeletes();
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
