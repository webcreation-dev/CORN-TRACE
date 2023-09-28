<?php

namespace App\Models\App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'status',
        'table',
    ];

   public static function getTableName($module_id, $production_id)  {

        $table_name = ModulesProduction::where('module_id', $module_id)->where('production_id', $production_id)->first();
        return ($table_name) ? false : true;
   }
}
