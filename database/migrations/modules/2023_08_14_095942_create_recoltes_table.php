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
        Schema::create('recoltes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id')->references('id')->on('modules');

            $table->string('harvesting_method'); // Mode de Récolte
            $table->string('harvesting_period'); // Période de Récolte
            $table->string('maturity_indicators'); // Indicateurs de Maturité
            $table->string('loss_prevention_method'); // Méthode de prévention des Pertes
            $table->text('other_observations')->nullable(); // Other Observations

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
        Schema::dropIfExists('recoltes');
    }
};
