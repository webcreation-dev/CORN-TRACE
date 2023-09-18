<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preparations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id')->references('id')->on('modules');

            $table->text('description'); // Description
            $table->string('production_modes'); // Production Modes
            $table->string('climatic_conditions'); // Climatic Conditions
            $table->string('maize_varieties'); // Maize Varieties
            $table->string('soil_preparation'); // Soil Preparation
            $table->string('irrigation_methods'); // Irrigation Methods
            $table->string('fertilizer_type'); // Fertilizer Type
            $table->string('pest_management_practices'); // Pest Management Practices
            $table->string('disease_management_practices'); // Disease Management Practices
            $table->string('soil_type'); // Soil Type
            $table->string('plowing_method'); // Plowing Method
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
        Schema::dropIfExists('preparations');
    }
};
