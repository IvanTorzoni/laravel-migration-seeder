<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * Create TABLE ‘trains’ (
     * ‘id’ Unsigned BIGINT NOT NULL AUTO_INCREMENT,
     * ‘azienda’ VARCHAR(255) NOT NULL,
     * ‘stazione_partenza’ VARCHAR(255) NOT NULL,
     * ‘stazione_arrivo’ VARCHAR(255) NOT NULL,
     * ‘orario_partenza’ TIME NOT NULL,
     * ‘orario_arrivo’ TIME NOT NULL,
     * ‘codice_treno’ VARCHAR(255) NOT NULL,
     * ‘numero_carrozze’ UNSIGNET TINYINT NOT NULL,
     * ‘in_orario’ TINIYNT NOT NULL DEFAULT(1)
     * ‘in_ritardo’ TINIYNT NOT NULL DEFAULT(0)
     * );
     */

    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda');
            $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno');
            $table->tinyInteger('numero_carrozze')->unsigned();
            $table->boolean('in_orario')->default(1);
            $table->boolean('in_ritardo')->default(0);
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
