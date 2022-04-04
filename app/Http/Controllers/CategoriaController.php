<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function postCreate(Request $req){
        $p = new Categoria();
        $p->nombre = $req->nombre;
        $p->descripcion =  ($req->descripcion);
        $result =  $p->save();
        if ($result) {
            notify()->success('Categoría Agregada');
            return redirect()->action(
                [CatalogController::class, 'getIndex']
            );
        } else {
            notify()->error('Error al crear categoría');
            return ["result" => "Error"];
        }
    }

    public function getCreate(Request $req){       
        return view('categoria.create');
    }

    public function getEdit($id){       
        $categoria = Categoria::findOrFail($id);
        return view('categoria.edit',array('categoria'=>$categoria));
    }

    public function putEdit(Request $req){     
        $categoria = Categoria::findOrFail($req->id);
        $categoria->nombre = $req->nombre;
        $categoria->descripcion = $req->descripcion;
        $result = $categoria->save();
        if ($result) {
            notify()->success('Categoria actualizada');
            return redirect()->action(
                [CategoriaController::class, 'getIndex']                
            );
        } else {
            notify()->error('Error al actualizar categoria');
            return ["result" => "Error"];
        }
        return view('categoria.create');
    }

    public function getIndex(){
        $categorias = Categoria::all();
        return view('categoria.index',array('categorias'=> $categorias));
    }
}
