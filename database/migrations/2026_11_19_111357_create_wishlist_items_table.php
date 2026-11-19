
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wishlist_items', function (Blueprint $table) {
            $table->id();

            $table->string('item_name', 150);
            $table->string('product_image')->nullable();

            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('hourly_wage');

            $table->unsignedInteger('weekly_uses');
            $table->unsignedInteger('period_weeks');
            $table->unsignedInteger('total_uses');

            $table->decimal('work_hours', 12, 2);
            $table->decimal('cost_per_use', 12, 2);

            $table->string('status')->default('再確認待ち');
            $table->timestamp('review_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wishlist_items');
    }
};
