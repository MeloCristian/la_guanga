<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Exception;
use Illuminate\Http\Request;

class APIArticulosController extends Controller
{
    public function getAll(){
        try {
            return response()->json(Articulo::with('categoria')->get());
        } catch (Exception $e) {
            return response()->json(
                array('ok'=>false,'sms'=>'error la obtener los artículos')
            );
        }
    }

    public function getArticulo($id){
        try {
            $articulo = Articulo::with('categoria')->where('id','=',$id)->get();
            return response()->json($articulo);
        } catch (Exception $e) {
            return response()->json(
                array('ok'=>false,'sms'=>'error la obtener los artículos')
            );
        }
    }

    public function postArticulo(Request $req){
        try {
            $articulo = new Articulo();
            $articulo->nombre = $req->nombre;
            $articulo->existencias = $req->existencias;
            $articulo->precio = $req->precio;
            $articulo->descripcion = $req->descripcion;
            $articulo->img = $req->img;
            $articulo->id_categoria = $req->id_categoria;
            $articulo->save();
            return response()->json(array('ok'=>true,'sms'=>'Artículo agregado'));
        } catch (Exception $e) {
            return response()->json(
                array('ok'=>false,'sms'=>'error al crear el artículo')
            );
        }
    }

    public function updateExistencias(Request $req){
        try {
            $articulo = Articulo::findOrFail($req->id);
            $articulo->existencias = $req->existencias;
            $articulo->save();
            return response()->json(array('ok'=>true,'sms'=>'Existencias actualizadas'));
        } catch (Exception $e) {
            return response()->json(
                array('ok'=>false,'sms'=>'Error al actualizar el artículo')
            );
        }
    }

}
