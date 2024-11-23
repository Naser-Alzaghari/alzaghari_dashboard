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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->nullable()->index('user_id');
            $table->timestamp('order_date')->nullable()->useCurrent();
            $table->enum('status', ['pending', 'shipped', 'delivered', 'cancelled'])->nullable()->default('pending');
            $table->decimal('total_amount', 10)->nullable();
            $table->decimal('total_amount_after_discount', 10);
            $table->enum('payment_status', ['paid', 'unpaid'])->nullable()->default('unpaid');
            $table->date('pickup_date');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
