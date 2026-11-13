<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('city');
            $table->string('name');
            $table->text('address');
            $table->string('phone');
            $table->string('email');
            $table->string('whatsapp_number')->nullable();
            $table->text('map_embed_url')->nullable();
            $table->text('direct_map_link')->nullable();
            $table->boolean('is_headquarters')->default(false);
            $table->integer('order_priority')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('offices');
    }
};

