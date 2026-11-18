<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('purchase_items', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('product_image')->nullable();
            $table->integer('price');
            $table->integer('hourly_wage');
            $table->integer('weekly_uses');
            $table->integer('period_weeks');
            $table->integer('total_uses');
            $table->decimal('work_hours', 10, 2);
            $table->decimal('cost_per_use', 10, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('purchase_items');
    }
};
