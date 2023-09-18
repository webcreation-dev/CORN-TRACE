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
        Schema::create('fertilisations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id')->references('id')->on('modules');

            $table->date('date_of_fertilizer_application'); // Date d'application des engrais
            $table->string('fertilizer_dosage'); // Dose d'engrais
            $table->string('source_of_organic_materials'); // Source des matières organiques
            $table->string('specific_zone'); // Zone spécifique
            $table->text('other_observations')->nullable();

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
        Schema::dropIfExists('fertilisations');
    }
};
