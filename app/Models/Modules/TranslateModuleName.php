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

        // AUTRES
        'other_observations' => "Other Observations",

    ];
}
