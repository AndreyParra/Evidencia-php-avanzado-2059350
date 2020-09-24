<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artista;
use Illuminate\Support\Facades\Validator;

class ArtistaController extends Controller
{
    //los controladores estan compuestos por acciones metodos de la controller debe haber una ruta para cada accion
    public function index() {

        //capturar datos por los modelos
        $artistas = Artista::all();

        return view ('artistas.index')
                     ->with('artistas', $artistas);
    }

    public function create() {
        return view('artistas.new');
    }
    public function store(Request $r) {
        //paso 1 establecer las reglas de validacion
        $reglas=[
            
            "nombre_artista" => ["required", "alpha", "min:3", "max:20", "unique:artists,Name"]

        ];
        //paso 1b establecer mensajes personalizados
        $mensajes = [
            
            "required"=>"El nombre del artista es obligatorio",
            "alpha"=>"solo letras",
            "min"=>"El :Attribute :val caracteres como minimo"
        ];
        //validacion paso 2 crear objer¿to de validacion
        $validador = Validator::make($r->all(), $reglas, $mensajes);
 
        //comparar el bjeto con el input
       if( $validador ->fails()) {
           
             return redirect('artistas/create')->withErrors($validador);

       }

        //instancia
        $nuevo_artista = new Artista();
        //asignar atributos
        $nuevo_artista->Name = $r ->input('nombre_artista');
        //grabar
        $nuevo_artista-> save();
        
        return redirect('artistas/create')
                         ->with('exito', 'Artista registrado exitosamente');

    }
}
