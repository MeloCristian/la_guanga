<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function getIndex()
    {
        $articulos = Articulo::all();
        return view('catalog.index', array('articulos' => $articulos));
    }

    public function getIndexByCategoria($id)
    {
        $articulos = Articulo::all()->where('id_categoria', '=', $id);
        return view('catalog.index', array('articulos' => $articulos));
    }

    public function getShow($id)
    {
        $articulo = Articulo::findOrFail($id);
        return view('catalog.show', array('articulo' => $articulo));
    }

    public function getEdit($id)
    {
        $articulo = Articulo::findOrFail($id);
        $categorias = Categoria::all();
        if ($articulo) {
            return view('catalog.edit', array('articulo' => $articulo, 'categorias' => $categorias));
        } else {
            notify()->error('Error al actualizar el articulo');
        }
    }

    public function putEdit(Request $req)
    {
        $p = Articulo::find($req->id);
        $p->nombre = $req->nombre;
        $p->descripcion =  ($req->descripcion);
        $p->existencias = $req->existencias;
        $p->precio = $req->precio;
        $p->img = $req->img;
        $p->id_categoria = $req->id_categoria;
        $result = $p->save();
        if ($result) {
            notify()->success('Articulo actualizado');
            return redirect()->action(
                [CatalogController::class, 'getShow'],
                ['id' => $req->id]
            );
        } else {
            notify()->error('Error al actualizar articulo');
            return ["result" => "Error"];
        }
    }

    public function delete($id)
    {
        $p = Articulo::find($id);
        $result = $p->delete();
        if ($result) {
            notify()->success('Articulo eliminado');
            return redirect()->action(
                [CatalogController::class, 'getIndex'],
            );
        } else {
            notify()->error('Error al eliminar articulo');
            return ["result" => "Error"];
        }
    }

    public function postCreate(Request $req)
    {
        $p = new Articulo();
        $p->nombre = $req->nombre;
        $p->descripcion =  ($req->descripcion);
        $p->existencias = $req->existencias;
        $p->precio = $req->precio;
        $p->img = $req->img;
        $p->id_categoria = $req->id_categoria;
        $result =  $p->save();
        if ($result) {
            notify()->success('Articulo creado');
            return redirect()->action(
                [CatalogController::class, 'getIndex']
            );
        } else {
            notify()->error('Error al crear articulo');
            return ["result" => "Error"];
        }
    }

    public function getCreate(Request $req)
    {
        $categorias = Categoria::all();
        return view('catalog.create', array('categorias' => $categorias));
    }

    public function addItemStore(Request $req)
    {
        $articulo = Articulo::findOrFail($req->id);
        \Cart::add(array(
            'id' => $req->id,
            'name' => $articulo->nombre,
            'price' => $articulo->precio,
            'quantity' => $req->cantidad,
            'associatedModel' => $articulo
        ));
        notify()->success('Articulo agregado al carrito');
        return back();
    }

    public function removeItemCart($cart)
    {
        \Cart::remove($cart);
        return back();
    }

    public function getCart()
    {
        $articulos =  \Cart::getContent();
        return view('cart.index', array('articulos' => $articulos));
    }
}
