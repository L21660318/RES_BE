<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyectos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'estado', // Asegúrate de tener este campo
        'usuario_id',
        'archivo_pdf',
    ];

    // Relaciones
    public function tienefases()
    {
        return $this->hasMany(TieneFase::class, 'proyecto_id');
    }
}
