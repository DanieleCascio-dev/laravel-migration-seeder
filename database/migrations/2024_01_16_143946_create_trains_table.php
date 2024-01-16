<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',50);
            $table->string('stazione_di_partenza',50);
            $table->string('stazione_di_arrivo');
            $table->time('orario_di_partenza', 1);
            $table->time('orario_di_arrivo',1);
            $table->char('codice_treno',255);
            $table->smallInteger('numero_carrozze');
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancellato')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
