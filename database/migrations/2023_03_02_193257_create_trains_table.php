<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 30);
            $table->string('stazione_di_partenza', 30);
            $table->string('stazione_di_arrivo', 30);
            $table->string('orario_di_partenza', 20);
            $table->string('orario_di_arrivo', 20);
            $table->tinyInteger('codice_treno');
            $table->tinyInteger('numero_carrozze' )->unsigned();
            $table->boolean('in_orario', 10);
            $table->boolean('cancellato', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
