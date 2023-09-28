<?php

namespace Database\Seeders;

use App\Models\App\Module;
use App\Models\App\Production;
use App\Models\App\SubModule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Production::create([
            'identifiant' => '#BOH-001',
            'type' => 'Mais blanc',
            'region' => 'Bohicon'
        ]);

        //Modules de production
        Module::create([
            'name' => 'PRÉPARATION DU SOL',
            'image' => 'preparation.png',
            'svg' => 'preparation.svg',
            'description' =>'Préparation du sol avant mise en place de la culture',
            'status' => 0,
            'table' => 'preparations'
        ]);

        Module::create([
            'name' => 'SEMIS',
            'image' => 'semis.png',
            'svg' => 'semis.svg',
            'description' =>'Processus de semis des graines pour démarrer la croissance des plantes.',
            'status' => 0,
            'table' => 'semis'
        ]);

        Module::create([
            'name' => 'ENTRETIEN',
            'image' => 'entretien.png',
            'svg' => 'entretien.svg',
            'description' =>'Soins réguliers pour assurer la santé et la croissance des cultures.',
            'status' => 0,
            'table' => 'entretiens'
        ]);

        Module::create([
            'name' => 'PROTECTION',
            'image' => 'protection.png',
            'svg' => 'protection.svg',
            'description' =>'Mesures pour protéger les cultures contre les ravageurs, les maladies et les intempéries.',
            'status' => 0,
            'table' => 'protections'
        ]);

        Module::create([
            'name' => 'FERTISISATION',
            'image' => 'fertilisation.png',
            'svg' => 'fertilisation.svg',
            'description' =>'Apport de nutriments essentiels pour favoriser la croissance des plantes.',
            'status' => 0,
            'table' => 'fertilisations'
        ]);

        Module::create([
            'name' => 'RÉCOLTE',
            'image' => 'recolte.png',
            'svg' => 'recolte.svg',
            'description' =>'Moment crucial où les cultures sont récoltées à maturité pour utilisation ou vente.',
            'status' => 0,
            'table' => 'recoltes'
        ]);

        Module::create([
            'name' => 'STOCKAGE',
            'image' => 'stockage.png',
            'svg' => 'stockage.svg',
            'description' =>'Moment crucial où les cultures sont récoltées et stockés pour etre vendus.',
            'status' => 0,
            'table' => 'stockages'
        ]);

        // SubModule::create([
        //     'module_id' => 1,
        //     'name' => 'PLANIFICATION',
        //     'table' => 'planifications'
        // ]);

        // SubModule::create([
        //     'module_id' => 1,
        //     'name' => 'CONDITIONS DE SOL',
        //     'table' => 'sols'
        // ]);
    }
}
