<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semis extends Model
{
    use HasFactory;

    protected $fillable = [
        'planting_period',
        'planting_method',
        'row_or_hill_planting',
        'seed_quantity',
        'maize_varieties',
        'replanting_methods',
        'other_observations',
    ];
}
