<?php

namespace Database\Seeders;

use App\Models\Modules\Entretien;
use App\Models\Modules\Fertilisation;
use App\Models\Modules\Preparation;
use App\Models\Modules\Protection;
use App\Models\Modules\Recolte;
use App\Models\Modules\Semis;
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
    }
}
