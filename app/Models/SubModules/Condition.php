<?php

namespace App\Models\SubModules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'production_id',
        'sub_module_id',
        'ph',
        'level_humidity',
        'type_soil',
    ];
}
