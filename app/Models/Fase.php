<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fase extends Model
{
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }
}
