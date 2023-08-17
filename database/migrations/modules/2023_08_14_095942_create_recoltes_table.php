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
            $table->unsignedBigInteger('production_id');

            $table->foreign('module_id')->references('id')->on('modules');
            $table->foreign('production_id')->references('id')->on('productions');

            $table->date('date');
            $table->string('quantity');
            $table->enum('method',['moist_cereals','dry_cereals']);
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
