<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preparation extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'production_modes',
        'climatic_conditions',
        'maize_varieties',
        'soil_preparation',
        'irrigation_methods',
        'fertilizer_type',
        'pest_management_practices',
        'disease_management_practices',
        'soil_type',
        'plowing_method',
        'other_observations',
    ];
}
