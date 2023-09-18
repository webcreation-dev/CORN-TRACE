<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recolte extends Model
{
    use HasFactory;

    protected $fillable = [
        'harvesting_method',
        'harvesting_period',
        'maturity_indicators',
        'loss_prevention_method',
        'other_observations',
    ];
}
