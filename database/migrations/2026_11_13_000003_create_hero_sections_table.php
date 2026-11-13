<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();
            $table->string('headline')->default('KAP DRS. SINURAYA DAN REKAN');
            $table->string('badge_text')->default('JLN. PASUNDAN 29A, MEDAN');
            $table->string('badge_icon')->nullable();
            $table->string('cta_primary_label')->default('Konsultasi Sekarang');
            $table->string('cta_primary_url')->default('/#contact');
            $table->boolean('cta_primary_active')->default(true);
            $table->string('cta_secondary_label')->default('Lihat Layanan Kami');
            $table->string('cta_secondary_url')->default('/#services');
            $table->boolean('cta_secondary_active')->default(true);
            $table->string('banner_image_light')->nullable();
            $table->string('banner_image_dark')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};

