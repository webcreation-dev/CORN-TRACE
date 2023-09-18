<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fertilisation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date_of_fertilizer_application',
        'fertilizer_dosage',
        'source_of_organic_materials',
        'specific_zone',
        'other_observations',
    ];
}
