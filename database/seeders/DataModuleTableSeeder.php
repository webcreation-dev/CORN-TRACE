<?php

namespace Database\Seeders;

use App\Models\Modules\Entretien;
use App\Models\Modules\Fertilisation;
use App\Models\Modules\Preparation;
use App\Models\Modules\Protection;
use App\Models\Modules\Recolte;
use App\Models\Modules\Semis;
use App\Models\Modules\Stockage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Preparation
        Preparation::create([
            'module_id' => 1,
            'description' => 'description',
            'production_modes'  => 'production_modes',
            'climatic_conditions'  => 'climatic_conditions',
            'maize_varieties'  => 'maize_varieties',
            'soil_preparation'  => 'soil_preparation',
            'irrigation_methods'  => 'irrigation_methods',
            'fertilizer_type'  => 'fertilizer_type',
            'pest_management_practices'  => 'pest_management_practices',
            'disease_management_practices'  => 'disease_management_practices',
            'soil_type'  => 'soil_type',
            'plowing_method'  => 'plowing_method',
            'other_observations'  => 'other_observations',
        ]);

        // Semis
        Semis::create([
            'module_id' => 2,
            'planting_period'  => date('Y-m-d H:i:s'),
            'planting_method'  => 'planting_method',
            'row_or_hill_planting'  => 'row_or_hill_planting',
            'seed_quantity'  => 400,
            'maize_varieties'  => 'maize_varieties',
            'replanting_methods'  => 'replanting_methods',
            'other_observations'  => 'other_observations',
        ]);

        //Entretien
        Entretien::create([
            'module_id' => 3,
            'frequency'  => 'frequency',
            'hoeing_methods'  => 'hoeing_methods',
            'planting_density'  => 'planting_density',
            'weed_control_methods'  => 'weed_control_methods',
            'herbicide_usage'  => 'herbicide_usage',
            'other_observations'  => 'other_observations',
        ]);

        //Protection
        Protection::create([
            'module_id' => 4,
            'pests_and_threats'  => 'pests_and_threats',
            'fall_armyworm'  => 'fall_armyworm',
            'disease_sensitivity'  => 'disease_sensitivity',
            'viral_infection'  => 'viral_infection',
            'protection_against_animals'  => 'protection_against_animals',
            'other_observations'  => 'other_observations',
        ]);

        //Fertilisation
        Fertilisation::create([
            'module_id' => 5,
            'date_of_fertilizer_application'  => date('Y-m-d H:i:s'),
            'fertilizer_dosage'  => 'fertilizer_dosage',
            'source_of_organic_materials'  => 'source_of_organic_materials',
            'specific_zone'  => 'specific_zone',
            'other_observations'  => 'other_observations',
        ]);

        //Récolte
        Recolte::create([
            'module_id' => 6,
            'harvesting_method'  => 'harvesting_method',
            'harvesting_period'  => 'harvesting_period',
            'maturity_indicators'  => 'maturity_indicators',
            'loss_prevention_method'  => 'loss_prevention_method',
            'other_observations'  => 'other_observations',
        ]);

        Stockage::create([
            'module_id' => 7,
            'Maïs_mal_séché_ou_mouillé_Yes'  => 1,
            'Mauvaise_conservation_du_maïs_Yes'  => 1,
            'Séchage_du_maïs_sur_le_sol_Yes'  => 1,
            'Égrenage_du_maïs_humide_Yes'  => 1,
            'Mode_de_traitement_Maize_stovers_stacked_in_heaps'  => 1,
            'Sacs_en_toile_Yes'  => 1,
            'Sacs_à_photos_Yes'  => 1,
            'Chaume_du_grenier_Yes'  => 1,
            'Grenier_Tôle_dacier_Yes'  => 1,
            'Bacs_étanches_Yes'  => 1,
            'Stockage_hermétique_Yes'  => 1,
            'Stocker_les_sacs_sur_le_sol_Yes'  => 1,
            'Sécher_les_grains_sur_une_bâche_Yes'  => 1,
            'Grains_sèches_sur_toit_de_terre_nue_Yes'  => 1,
            'Grains_de_qualité_Yes'  => 1,
            'Stocker_les_sacs_sur_des_palettes_en_bois_Yes'  => 1,
            'Type_de_stockage'  => 1,
            'Séchage'  => 1,
            'Décorticage'  => 1,
            'Mode_de_conservation'  => 1,
            'other_observations'  => 'other_observations',
        ]);
    }
}
