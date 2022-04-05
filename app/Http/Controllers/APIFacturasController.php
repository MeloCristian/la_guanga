<?php

namespace App\Http\Controllers;
use App\Models\Factura;
use Illuminate\Http\Request;
use App\Models\Articulo;

class APIFacturasController extends Controller
{
    public function getAll(){    
        $fac = Factura::with(['detalles','persona'])->get();    
        return response()->json($fac);
    }

    public function getFactura($id){
        $fac = Factura::with(['detalles','persona'])->where('id','=',$id)->first();
        return response()->json($fac);
    }
}
