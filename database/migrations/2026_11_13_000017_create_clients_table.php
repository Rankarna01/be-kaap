<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('slug')->unique();
            $table->string('logo')->nullable();
            $table->string('industry_sector')->nullable(); // Perkebunan Sawit, Manufaktur, Kesehatan, Jasa, dll.
            $table->string('service_provided')->nullable(); // General Audit, Perpajakan, dll.
            $table->string('pic_name')->nullable();
            $table->string('pic_position')->nullable();
            $table->string('pic_phone')->nullable();
            $table->string('pic_email')->nullable();
            $table->string('website_url')->nullable();
            $table->integer('year_engaged')->nullable();
            $table->integer('order_priority')->default(0);
            $table->boolean('show_in_homepage')->default(true);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};

