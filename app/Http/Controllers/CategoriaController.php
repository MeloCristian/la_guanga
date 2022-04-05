<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Exception;
use Illuminate\Http\Request;
use Prophecy\Call\Call;

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

    public function delete($id){
        try {
            $categoria = Categoria::findOrfail($id);
            $categoria->delete();
            notify()->success('La categoria fue eliminada');
            return back();            
        } catch (Exception $e) {
            notify()->error('No fue posible eliminar la categoria, tenga en cuenta que si hay productos asociados a esta no se puede eliminar');
            return back();
        }
        
    }
}
