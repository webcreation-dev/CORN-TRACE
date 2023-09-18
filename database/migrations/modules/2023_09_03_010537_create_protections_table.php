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
        Schema::create('protections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id')->references('id')->on('modules');

            $table->string('pests_and_threats'); // Ravageurs et Menaces
            $table->string('fall_armyworm'); // Chenille légionnaire d'automne
            $table->string('disease_sensitivity'); // Sensibilité aux Maladies
            $table->string('viral_infection'); // Infection Virale
            $table->string('protection_against_animals'); // Protection contre les Animaux
            $table->text('other_observations')->nullable(); // Autres observations

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
        Schema::dropIfExists('protections');
    }
};
