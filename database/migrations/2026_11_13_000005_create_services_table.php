<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('number')->nullable();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('short_desc')->nullable();
            $table->longText('full_desc')->nullable();
            $table->json('scope')->nullable();
            $table->string('mascot_image')->nullable();
            $table->string('fallback_image')->nullable();
            $table->string('icon_name')->nullable();
            $table->boolean('show_in_core_features')->default(true);
            $table->integer('order_priority')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

