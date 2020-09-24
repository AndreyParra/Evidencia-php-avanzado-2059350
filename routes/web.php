<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//prueba
Route::get('hola', function () {
    echo "hola mundo";
}); //route tiene un metodo get que vamos a ejecutar

Route::get('arreglo', function () {
    $estudiantes = ["AN" =>"Ana", 
                    "MA" => "Maria",
                    "VA"=> "Valeria", 
                    "CA" => "Carlos"];


    //ciclos foreach: recorrer un arreglo
    foreach($estudiantes as $indice => $e) {
        echo "-$e tiene el indice $indice <br> ";
    }
});

//Ruta de paises 
Route::get('paises', function() {
    $paises = ["Colombia" => ["capital" => "Bogotá",
                              "moneda" => "peso",
                              "poblacion" => 503272424,
                              "ciudades" => ["Medellín", "Cali", "Barranquilla"]             
                             ], 
               "Perú" => ["capital" => "Lima",
                           "moneda" => "sol",
                           "poblacion" => 33050325,
                           "ciudades" => ["Cuzco", "Trujillo", "Arequipa"]              
                         ], 
               "Ecuador"=> ["capital" => "Quito",
                            "moneda" => "dolar",
                            "poblacion" => 17517141,
                            "ciudades" => ["Guayaquil", "Cuenca", "Manta"]                
                            ], 
               "Brasil" => ["capital" => "Brasilia",
                            "moneda" => "real",
                            "poblacion" => 21221678,
                            "ciudades" => ["Rio de Janerio", "Recife", "Bahía"]                 
                            ]
             ];

               //enviar los datos de paises a una vista
               //con la funcion view

               return view('paises')->with("paises", $paises);
});


//Rutas de controlador 
Route::get('artistas', "ArtistaController@index");
Route::get('artistas/create', 'ArtistaController@create');
Route::post('artistas/store', "ArtistaController@store");

Route::resource('empleados', 'EmpleadoController');
Route::get('master', function (){
    
    return view('layouts.master');
});
