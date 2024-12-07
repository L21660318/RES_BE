<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'archivo_pdf', 'usuario_id'];

    // Relación con el modelo Usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
