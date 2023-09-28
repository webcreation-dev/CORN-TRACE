<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranslateModuleName extends Model
{
    use HasFactory;

    const MODULE_NAME_TRANSLATE = [

        // PREPARATION DU SOL
        'description' => "Description",
        'production_modes' => "Production Modes",
        'climatic_conditions' => "Climatic Conditions",
        'maize_varieties' => "Maize Varieties",
        'soil_preparation' => "Soil Preparation",
        'irrigation_methods' => "Irrigation Methods",
        'fertilizer_type' => "Fertilizer Type",
        'pest_management_practices' => "Pest Management Practices",
        'disease_management_practices' => "Disease Management Practices",
        'soil_type' => "Soil Type",
        'plowing_method' => "Plowing Method",

        //SEMIS
        'planting_period' => "Période de Semis",
        'planting_method' => "Méthode de Semis",
        'row_or_hill_planting' => "Semis en Ligne ou en Poquet",
        'seed_quantity' => "Quantité de Semences",
        'maize_varieties' => "Variétés de Maïs",
        'replanting_methods' => "Méthodes de Re-semis",

        // ENTRETIEN

        'frequency' => "Fréquence",
        'hoeing_methods' => "Méthodes de Sarclage",
        'planting_density' => "Densité de Plantation",
        'weed_control_methods' => "Méthodes de Désherbage",
        'herbicide_usage' => "Utilisation d'Herbicides",

        //PROTECTION
        'pests_and_threats' => "Ravageurs et Menaces",
        'fall_armyworm' => "Chenille légionnaire d'automne",
        'disease_sensitivity' => "Sensibilité aux Maladies",
        'viral_infection' => "Infection Virale",
        'protection_against_animals' => "Protection contre les Animaux",

        // RECOLTE
        'harvesting_method' => "Mode de Récolte",
        'harvesting_period' => "Période de Récolte",
        'maturity_indicators' => "Indicateurs de Maturité",
        'loss_prevention_method' => "Méthode de prévention des Pertes",

        //FERTILISATION
        'date_of_fertilizer_application' => "Date d'application des engrais",
        'fertilizer_dosage' => "Dose d'engrais",
        'source_of_organic_materials' => "Source des matières organiques",
        'specific_zone' => "Zone spécifique",

        //STOCKAGE
        'Maïs_mal_séché_ou_mouillé_Yes' => "Maïs mal séché ou mouillé",
        'Mauvaise_conservation_du_maïs_Yes' => "Mauvaise conservation du maïs",
        'Séchage_du_maïs_sur_le_sol_Yes' => "Séchage du maïs sur le sol",
        'Égrenage_du_maïs_humide_Yes' => "Égrenage du maïs humide",
        'Mode_de_traitement_Maize_stovers_stacked_in_heaps' => "Mode de traitement (Maize stovers stacked in heaps)",
        'Sacs_en_toile_Yes' => "Sacs en toile",
        'Sacs_à_photos_Yes' => "Sacs à photos",
        'Chaume_du_grenier_Yes' => "Chaume du grenier",
        'Grenier_Tôle_dacier_Yes' => "Grenier (Tôle d'acier)",
        'Bacs_étanches_Yes' => "Bacs étanches",
        'Stockage_hermétique_Yes' => "Stockage hermétique",
        'Stocker_les_sacs_sur_le_sol_Yes' => "Stocker les sacs sur le sol",
        'Sécher_les_grains_sur_une_bâche_Yes' => "Sécher les grains sur une bâche",
        'Grains_sèches_sur_toit_de_terre_nue_Yes' => "Grains sèches sur toit de terre nue",
        'Grains_de_qualité_Yes' => "Grains de qualité",
        'Stocker_les_sacs_sur_des_palettes_en_bois_Yes' => "Stocker les sacs sur des palettes en bois",
        'Type_de_stockage' => "Type de stockage",
        'Séchage' => "Séchage",
        'Décorticage' => "Décorticage",
        'Mode_de_conservation' => "Mode de conservation",
        'other_observations' => "Autres observations",

        // AUTRES
        'other_observations' => "Other Observations",
    ];

    const MODULE_STOCKAGE_OPTIONS = [
        'Maïs_mal_séché_ou_mouillé_Yes' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Mauvaise_conservation_du_maïs_Yes' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Séchage_du_maïs_sur_le_sol_Yes' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Égrenage_du_maïs_humide_Yes' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Mode_de_traitement_Maize_stovers_stacked_in_heaps' => [
            0 => 'Maize stovers stacked in heaps',
            1 => 'Maize stovers stacked in heaps',
        ],
        'Sacs_en_toile_Yes' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Sacs_à_photos_Yes' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Chaume_du_grenier_Yes' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Grenier_Tôle_dacier_Yes' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Bacs_étanches_Yes' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Stockage_hermétique_Yes' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Stocker_les_sacs_sur_le_sol_Yes' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Sécher_les_grains_sur_une_bâche_Yes' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Grains_sèches_sur_toit_de_terre_nue_Yes' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Grains_de_qualité_Yes' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Stocker_les_sacs_sur_des_palettes_en_bois_Yes' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Type_de_stockage' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Séchage' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Décorticage' => [
            0 => 'OUI',
            1 => 'NON',
        ],
        'Mode_de_conservation' => [
            0 => 'OUI',
            1 => 'NON',
        ],
    ];

}
