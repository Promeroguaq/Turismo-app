<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('iglesias', function (Blueprint $table) {
            $table->id('id_iglesia');
            $table->string('nombre_iglesia');
            $table->unsignedBigInteger('id_localities');
            $table->text('descripcion')->nullable();
            $table->timestamps();

            $table->foreign('id_localities')
                  ->references('id')
                  ->on('localities')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('iglesias');
    }
};
