<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/* 
Possibilità di inserire se lavoro da fare interno o mandare fuori con lista laboratori
Ricerca riparazione per nominativo
Possibilità di spuntare quando fatta o in laboratorio
Consegna riparazione con ricerca nominativa
Archivio riparazioni consegnate con data di consegna e descrizione riparazione 
*/

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('object_elements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('customer');
            $table->boolean('status')->default(false);
            $table->string('description')->nullable();
            $table->string('wheight')->nullable();
            $table->bigInteger('phone')->nullable();
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
        Schema::dropIfExists('object_elements');
    }
};
