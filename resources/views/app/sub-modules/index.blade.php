@extends('layouts.dashboard')

@section('content')
@livewire('module-info-controller', ['modules' => $modules, 'module' => $module, 'step_modules' => $step_modules, '' => $module_id, 'production' => $production, ])
@livewire('module-form-controller')
@endsection
