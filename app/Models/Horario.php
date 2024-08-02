<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso_id',
        'maestro_id',
        'periodo_id',
        'dia',
        'hora',
        'aula',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function maestro()
    {
        return $this->belongsTo(Maestro::class);
    }

    public function periodo()
    {
        return $this->belongsTo(Periodo::class);
    }
}
