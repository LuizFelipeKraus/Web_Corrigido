<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compras';

    function clientes(){
        return $this->belongsTo(Cliente::class, 'id_clientes', 'id');
    
    }
}
