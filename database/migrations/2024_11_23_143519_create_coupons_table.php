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
        Schema::create('coupons', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('coupon_code', 50)->unique('coupon_code');
            $table->decimal('discount_percentage', 5);
            $table->timestamp('expiration_date')->useCurrent();
            $table->integer('usage_limit')->nullable();
            $table->boolean('coupon_status')->default(true);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
