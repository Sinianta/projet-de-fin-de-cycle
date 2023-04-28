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
            $table->string('code')->unique();
            $table->string('etat')->default('En cour');
            $table->string('prenom');
            $table->string('nom');
            $table->string('email');
            $table->string('telphone');
            $table->string('nin');
            $table->date('date_res');
            $table->time('date_depart');
            $table->time('date_depart');
            $table->string('plaque');
            $table->string('marque');
            $table->string('place_numero');
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
