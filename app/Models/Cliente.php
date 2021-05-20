<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    
    protected $table = 'clientes';

    function compras(){
        return $this->hasMany(Compra::class, 'id_clientes', 'id');
    }
}
