<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = [
<<<<<<< HEAD
        'nombre',
        'descripcion',
        'imagen'
    ];
=======
        'nombre', 'descripcion', 'imagen', 'usuario_id', 'archivo_pdf'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
>>>>>>> paginas-Diego
}
