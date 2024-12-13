<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    // Especificamos la tabla en caso de que no siga la convención plural
    protected $table = 'empresa';

    // Definimos los campos que pueden ser asignados masivamente
    protected $fillable = [
        'nombre',
        'rfc',
        'lema',
        'mision',
        'estado',
    ];

    // Si quieres deshabilitar la asignación automática de created_at y updated_at
    // puedes agregar las siguientes líneas:
    public $timestamps = true;

    // Si quieres personalizar los nombres de los campos de tiempo:
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
