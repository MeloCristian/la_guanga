<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;

class Factura extends Model
{
    use HasFactory;

    public function persona(){
        return $this->hasOne(Persona::class,'id','id_cliente');
    }
    public function detalles(){
        return $this->hasMany('App\Models\Detalle','id_factura','id');
    }
}
