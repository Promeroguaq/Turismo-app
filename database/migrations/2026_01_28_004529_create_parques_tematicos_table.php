<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('parque_tematicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('locality_id');
            $table->unsignedBigInteger('country_id');
            $table->timestamps();

            $table->foreign('locality_id')->references('id')->on('localities');
            $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('parque_tematicos');
    }
};
