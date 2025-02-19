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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('codereservation');
            $table->string('datereservation');
            $table->string('datealler');
            $table->string('dateretour');
            $table->integer('idclient')->unsigned()->index(); 
            $table->foreign('idclient')->references('id')->on('clients')->onDelete('cascade');
            $table->integer('idDossierdelocation')->unsigned()->index(); 
            $table->foreign('idDossierdelocation')->references('id')->on('dossier_de_locations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
