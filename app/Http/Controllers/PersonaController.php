<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;
use Exception;
class PersonaController extends Controller
{
    public function getPerson($id)
    {
        $persona =  Persona::where('dni', '=', $id)->first();
        if ($persona) {
            notify()->success('Cliente encontrado');
            return view('pagos.show', array('encontrado' => true, 'registro' => false, 'persona' => $persona));
        } else {
            notify()->error('Cliente no encontrado, debe registrarlo');
            return view('pagos.show', array('encontrado' => false, 'registro' => true));
        }
    }


    public function postCreate(Request $req){
        $per = new Persona();
        $per->nombres = $req->nombre;
        $per->apellidos = $req->apellido;
        $per->telefono = $req->telefono;
        $per->dni = $req->dni;
        try {
            $result = $per->save();
        } catch (Exception $e) {
            notify()->error("Error al crear la persona, intente más tarde");
            return view('pagos.show', array('encontrado' => false, 'registro' => true));
        }
        
        if ($result){
            notify()->error("Éxito, se agrego correctamente sus datos, ahora puede generar su factura");
            return view('pagos.show', array('encontrado' => true, 'registro' => false, 'persona' => $per));
        }else {
            return view('pagos.show', array('encontrado' => true, 'registro' => false, 'persona' => $per));
        }
    }
}
