<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recolte extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'production_id',
        'date',
        'quantity',
        'method',
    ];
}
