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

            $table->enum('Maïs_mal_séché_ou_mouillé_Yes', [0, 1]);
            $table->enum('Mauvaise_conservation_du_maïs_Yes', [0, 1]);
            $table->enum('Séchage_du_maïs_sur_le_sol_Yes', [0, 1]);
            $table->enum('Égrenage_du_maïs_humide_Yes', [0, 1]);
            $table->enum('Mode_de_traitement_Maize_stovers_stacked_in_heaps', [0, 1]);
            $table->enum('Sacs_en_toile_Yes', [0, 1]);
            $table->enum('Sacs_à_photos_Yes', [0, 1]);
            $table->enum('Chaume_du_grenier_Yes', [0, 1]);
            $table->enum('Grenier_Tôle_dacier_Yes', [0, 1]);
            $table->enum('Bacs_étanches_Yes', [0, 1]);
            $table->enum('Stockage_hermétique_Yes', [0, 1]);
            $table->enum('Stocker_les_sacs_sur_le_sol_Yes', [0, 1]);
            $table->enum('Sécher_les_grains_sur_une_bâche_Yes', [0, 1]);
            $table->enum('Grains_sèches_sur_toit_de_terre_nue_Yes', [0, 1]);
            $table->enum('Grains_de_qualité_Yes', [0, 1]);
            $table->enum('Stocker_les_sacs_sur_des_palettes_en_bois_Yes', [0, 1]);
            $table->enum('Type_de_stockage', [0, 1]);
            $table->enum('Séchage', [0, 1]);
            $table->enum('Décorticage', [0, 1]);
            $table->enum('Mode_de_conservation', [0, 1]);
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
