<?php

namespace App\Livewire;

use Livewire\Component;

class ModuleFormController extends Component
{
    public $modules;
    public $module;
    public $step_modules;
    public $module_id;
    public $production;

    public function render()
    {
        return view('livewire.module-form', [
            'modules' => $this->modules,
            'module' => $this->module,
            'step_modules' => $this->step_modules,
            'module_id' => $this->module_id,
            'production' => $this->production,
        ]);
    }
}
