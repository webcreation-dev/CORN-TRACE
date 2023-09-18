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
        Schema::create('semis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id')->references('id')->on('modules');

            $table->date('planting_period');  // Période de Semis
            $table->string('planting_method'); // Méthode de Semis
            $table->string('row_or_hill_planting'); // Semis en Ligne ou en Poquet
            $table->integer('seed_quantity'); // Quantité de Semences
            $table->string('maize_varieties'); // Variétés de Maïs
            $table->string('replanting_methods'); // Méthodes de Re-semis
            $table->text('other_observations')->nullable();  // Autres observations
            
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
        Schema::dropIfExists('semis');
    }
};
