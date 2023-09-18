<?php

namespace App\Livewire;

use App\Models\App\Module;
use App\Models\App\Production;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ModuleInfoController extends Component
{

    public $modules;
    public $module;
    public $step_modules;
    public $module_id;
    public $production;

    public function render()
    {

        return view('livewire.module-info', [
            'modules' => $this->modules,
            'module' => $this->module,
            'step_modules' => $this->step_modules,
            'module_id' => $this->module_id,
            'production' => $this->production,
        ]);
    }

    public function changeModule($module_id, $production_id ) {

        $this->modules = Module::all();
        $this->module = Module::find($module_id);
        $this->production = Production::find($production_id);
        $this->step_modules = DB::table($this->module->table)
            ->where('module_id', $module_id)
            ->get();
        $this->step_modules = Module::hydrate($this->step_modules->toArray());
        $this->module_id = $module_id;
    }
}
