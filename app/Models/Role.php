<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';  // Nombre de la tabla de roles

    protected $fillable = [
        'nombre',  // Asegúrate de que este campo existe en la tabla 'roles'
    ];

    // Relación con los usuarios (uno a muchos)
    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'role_id');  // 'role_id' es la clave foránea
    }
}
