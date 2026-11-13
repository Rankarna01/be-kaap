<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('location')->default('Medan & Pekanbaru');
            $table->string('job_type')->default('Full-Time');
            $table->text('requirements');
            $table->text('responsibilities')->nullable();
            $table->string('application_email')->nullable();
            $table->date('deadline_date')->nullable();
            $table->boolean('is_open')->default(true);
            $table->integer('order_priority')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};

