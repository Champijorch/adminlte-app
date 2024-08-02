<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PlanEstudio extends Model
{
    use HasFactory;

    protected $table = 'plan_de_estudios'; 

    protected $dates = [
        'fecha_inicio',
        'fecha_fin',
    ];

    protected $fillable = [
        'nombre',
        'siglas',
        'num_periodos',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function getFechaInicioAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function getFechaFinAttribute($value)
    {
        return $value ? Carbon::parse($value) : null;
    }
}
