<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TieneFase extends Model
{
    protected $table = 'tienefases';  // Define el nombre de la tabla

    protected $fillable = [
        'proyecto_id', 'fase_id', 'created_at', 'updated_at', 'comentarios',
    ];
}
