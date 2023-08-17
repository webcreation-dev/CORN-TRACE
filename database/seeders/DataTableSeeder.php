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

        Module::create([
            'name' => 'SEMIS DU MAÏS',
            'status' => 1,
            'table' => null
        ]);

        Module::create([
            'name' => 'RÉCOLTE DU MAÏS',
            'status' => 0,
            'table' => 'recoltes'
        ]);

        SubModule::create([
            'module_id' => 1,
            'name' => 'PLANIFICATION',
            'table' => 'planifications'
        ]);

        SubModule::create([
            'module_id' => 1,
            'name' => 'CONDITIONS DE SOL',
            'table' => 'sols'
        ]);
    }
}
