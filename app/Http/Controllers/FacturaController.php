<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Detalle;
use App\Models\Factura;
use App\Models\Persona;
use PDF;
use Cart;
use Exception;

use Illuminate\Http\Request;

class FacturaController extends Controller
{

    public function getForm()
    {
        return view('pagos.show', array('encontrado' => false, 'registro' => false));
    }


    public function postCreate(Request $req)
    {
        try {
            if (!\Cart::isEmpty()) {


                $data = \Cart::getContent();
                $cliente = Persona::findOrFail($req->id_cliente);
                $total = 0;
                foreach ($data as $item) {
                    $articulo = Articulo::findOrFail($item->id);
                    if ($articulo->existencias >= $item->quantity) {
                        $articulo->existencias = $articulo->existencias - $item->quantity;
                        $articulo->save();
                    } else {
                        notify()->error("Error al crear la factura, no hay inventario disponible");
                        return view('pagos.show', array('encontrado' => false, 'registro' => false));
                    }
                    $total += $item->quantity * $item->price;
                }
                $date = date('Y-m-d');
                $fac = new Factura();
                $fac->fecha = $date;
                $fac->total = $total;
                $fac->tipo_pago = 'EFECTIVO';
                $fac->id_cliente = $req->id_cliente;

                $fac->save();
                foreach ($data as $item) {
                    $detalle = new Detalle();
                    $detalle->cantidad = $item->quantity;
                    $detalle->precio = $item->price * $item->quantity;
                    $detalle->id_factura = $fac->id;
                    $detalle->id_articulo = $item->id;
                    $detalle->save();
                }
                $datos = array('cliente' => $cliente, 'factura' => $fac);
                $pdf = PDF::loadView('pagos.pdf', $datos);
                notify()->success("Factura generada, y descargada a sus archivos");
                \Cart::clear();
                return $pdf->download('factura.pdf');
            } else {
                notify()->error("Error al crear la factura, no hay elementos agregados al carrito");
                return view('pagos.show', array('encontrado' => false, 'registro' => false));
            }
        } catch (Exception $e) {
            notify()->error("Error al crear la factura, intente más tarde");
            return view('pagos.show', array('encontrado' => false, 'registro' => false));
        }
    }
}
