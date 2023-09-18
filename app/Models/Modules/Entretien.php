<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entretien extends Model
{
    use HasFactory;

    protected $fillable = [
        'frequency',
        'hoeing_methods',
        'planting_density',
        'weed_control_methods',
        'herbicide_usage',
        'other_observations',
    ];
}
