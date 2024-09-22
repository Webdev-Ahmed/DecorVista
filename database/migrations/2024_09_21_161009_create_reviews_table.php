<?php

use App\Models\InteriorDesigners;
use App\Models\Product;
use App\Models\User;
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
      $table->uuid('id')->primary();
      $table->foreignIdFor(User::class, 'user_id');
      $table->foreignIdFor(Product::class, 'product_id');
      $table->foreignIdFor(InteriorDesigners::class, 'designer_id');
      $table->text('comment');
      $table->timestamps();
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
