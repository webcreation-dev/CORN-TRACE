<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockage extends Model
{
    use HasFactory;

    protected $fillable = [
        'Maïs_mal_séché_ou_mouillé_Yes',
        'Mauvaise_conservation_du_maïs_Yes',
        'Séchage_du_maïs_sur_le_sol_Yes',
        'Égrenage_du_maïs_humide_Yes',
        'Mode_de_traitement_Maize_stovers_stacked_in_heaps',
        'Sacs_en_toile_Yes',
        'Sacs_à_photos_Yes',
        'Chaume_du_grenier_Yes',
        'Grenier_Tôle_dacier_Yes',
        'Bacs_étanches_Yes',
        'Stockage_hermétique_Yes',
        'Stocker_les_sacs_sur_le_sol_Yes',
        'Sécher_les_grains_sur_une_bâche_Yes',
        'Grains_sèches_sur_toit_de_terre_nue_Yes',
        'Grains_de_qualité_Yes',
        'Stocker_les_sacs_sur_des_palettes_en_bois_Yes',
        'Type_de_stockage',
        'Séchage',
        'Décorticage',
        'Mode_de_conservation',
        'other_observations'
    ];
}
