<?php

namespace App\Models\App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulesProduction extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'production_id',
    ];
}
