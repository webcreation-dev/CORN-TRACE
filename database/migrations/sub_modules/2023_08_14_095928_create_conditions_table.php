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
        Schema::create('conditions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('production_id');
            $table->unsignedBigInteger('sub_module_id');

            $table->foreign('module_id')->references('id')->on('modules');
            $table->foreign('production_id')->references('id')->on('productions');
            $table->foreign('sub_module_id')->references('id')->on('sub_modules');

            $table->string('ph');
            $table->string('level_humidity');
            $table->enum('type_soil',['argileuse','silicieuse']);
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
        Schema::dropIfExists('conditions');
    }
};
