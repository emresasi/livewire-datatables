<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dummy_has_one_models', static function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('dummy_model_id');
            $table->string('name', 64);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummy_has_one_models');
    }
};
