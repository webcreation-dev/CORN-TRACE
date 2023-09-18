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
        Schema::create('entretiens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id')->references('id')->on('modules');

            $table->string('frequency'); // Fréquence
            $table->string('hoeing_methods'); // Méthodes de Sarclage
            $table->string('planting_density'); // Densité de Plantation
            $table->string('weed_control_methods'); // Méthodes de Désherbage
            $table->string('herbicide_usage'); // Utilisation d'Herbicides
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
        Schema::dropIfExists('entretiens');
    }
};
