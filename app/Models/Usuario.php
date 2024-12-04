<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'role_id',  // Asegúrate de incluir el role_id
    ];

    protected $hidden = [
        'password',
    ];

    // Definir la relación con el modelo Role
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}

