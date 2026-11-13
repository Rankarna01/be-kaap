<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stats_metrics', function (Blueprint $table) {
            $table->id();
            $table->string('metric_key')->unique();
            $table->integer('count_value');
            $table->string('count_suffix')->nullable();
            $table->string('highlight_title');
            $table->string('description');
            $table->string('icon_type')->default('clients');
            $table->integer('order_priority')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stats_metrics');
    }
};

