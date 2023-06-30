<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class cuentas extends Model
{
    use HasFactory;

    public function perfil(){
        return $this->belongsTo(perfiles::class, 'perfil_id', 'id');
    }
}
