<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('interior_designers', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->foreignIdFor(User::class, 'user_id');
      $table->bigInteger('contact')->unique();
      $table->text('address');
      $table->string('yearsOfExperience');
      $table->string('specializtion');
      $table->text('portfolio');
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('interior_designers');
  }
};
