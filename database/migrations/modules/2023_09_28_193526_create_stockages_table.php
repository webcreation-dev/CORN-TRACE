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
        Schema::create('stockages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id')->references('id')->on('modules');

            $table->string('Maïs_mal_séché_ou_mouillé_Yes');
            $table->string('Mauvaise_conservation_du_maïs_Yes');
            $table->string('Séchage_du_maïs_sur_le_sol_Yes');
            $table->string('Égrenage_du_maïs_humide_Yes');
            $table->string('Mode_de_traitement_Maize_stovers_stacked_in_heaps');
            $table->string('Sacs_en_toile_Yes');
            $table->string('Sacs_à_photos_Yes');
            $table->string('Chaume_du_grenier_Yes');
            $table->string('Grenier_Tôle_dacier_Yes');
            $table->string('Bacs_étanches_Yes');
            $table->string('Stockage_hermétique_Yes');
            $table->string('Stocker_les_sacs_sur_le_sol_Yes');
            $table->string('Sécher_les_grains_sur_une_bâche_Yes');
            $table->string('Grains_sèches_sur_toit_de_terre_nue_Yes');
            $table->string('Grains_de_qualité_Yes');
            $table->string('Stocker_les_sacs_sur_des_palettes_en_bois_Yes');
            $table->string('Type_de_stockage');
            $table->string('Séchage');
            $table->string('Décorticage');
            $table->string('Mode_de_conservation');
            $table->string('Jours');
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
        Schema::dropIfExists('stockages');
    }
};
