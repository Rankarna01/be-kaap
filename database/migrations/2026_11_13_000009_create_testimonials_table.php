<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('role');
            $table->string('company');
            $table->string('avatar_image')->nullable();
            $table->string('service_category')->default('General Audit & Asurans');
            $table->text('quote');
            $table->string('marquee_row')->default('row1'); // row1, row2
            $table->tinyInteger('rating')->default(5);
            $table->integer('order_priority')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};

