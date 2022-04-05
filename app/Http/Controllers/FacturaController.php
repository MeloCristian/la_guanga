<?php

namespace App\Http\Controllers;

use App\Models\Detalle;
use App\Models\Factura;
use App\Models\Persona;
use PDF;
use Cart;
use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FacturaController extends Controller
{

    public function getForm()
    {
        return view('pagos.show', array('encontrado' => false, 'registro' => false));
    }


    public function postCreate(Request $req)
    {
        notify()->error("Hiii");
        $data = \Cart::getContent();
        $cliente = Persona::findOrFail($req->id_cliente);
        $total = 0;
        foreach ($data as $item) {
            $total += $item->quantity * $item->price;
        }
        $date = date('Y-m-d');
        $fac = new Factura();
        $fac->fecha = $date;
        $fac->total = $total;
        $fac->tipo_pago = 'EFECTIVO';
        $fac->id_cliente = $req->id_cliente;
        try {
            $fac->save();
            foreach ($data as $item) {
                $detalle = new Detalle();
                $detalle->cantidad = $item->quantity;
                $detalle->precio = $item->price * $item->quantity;
                $detalle->id_factura = $fac->id;
                $detalle->id_articulo = $item->id;
                $detalle->save();
            }
            $datos = array('cliente'=>$cliente,'factura'=>$fac);
            $pdf = PDF::loadView('pagos.pdf', $datos);
            notify()->success("Factura generada, y descargada a sus archivos");
            return $pdf->download('factura.pdf');
        } catch (Exception $e) {
            notify()->error("Error al crear la factura, intente más tarde");
            return view('pagos.show', array('encontrado' => false, 'registro' => false));
        }
    }
}
