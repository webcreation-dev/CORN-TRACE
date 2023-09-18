<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protection extends Model
{
    use HasFactory;

    protected $fillable = [
        'pests_and_threats',
        'fall_armyworm',
        'disease_sensitivity',
        'viral_infection',
        'protection_against_animals',
        'other_observations',
    ];
}
