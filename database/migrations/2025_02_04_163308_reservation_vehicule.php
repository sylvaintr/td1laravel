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
        Schema::create('reservation_vehicule', function (Blueprint $table) {
            $table->id();
            $table->integer('idreservation')->unsigned()->index(); 
            $table->foreign('idreservation')->references('id')->on('reservations')->onDelete('cascade');
            $table->integer('idvehicule')->unsigned()->index(); 
            $table->foreign('idvehicule')->references('id')->on('vehicules')->onDelete('cascade');
            $table->timestamps(); 
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
