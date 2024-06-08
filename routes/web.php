<?php

use App\Http\Controllers\PrimerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('crud.index');
});

/*------------------- Ejemplos de rutas  --------------------------------------*/

Route::get('/contact1', function() {
    $datos = [
        'name' => 'JC',
        'edad' => 50
    ];
    return view('crud/contact1',$datos);
})->name('primera');

Route::get('/contact2', function() {
    return view('inicio/contact2', ['provincia' => 'Granada']);
})->name('segunda');

Route::get('/contact3', function() {
    return view('inicio/link');
})->name('enlace');

/*------------------- Redirecciones --------------------------------------*/

Route::get('/contact4', function() {
    //return redirect('/contact2');  //en esta redirección se utiliza la ruta "/contact2"

   // return redirect()->route('segunda');  //en esta redirección se usa el nombre de la ruta "segunda"

    return to_route('primera');  //otra forma de redireccionar usando el nombre de la ruta "primera"       
})->name('tercera');

/*------------------- Rutas hacia los métodos del controlador --------------------------------------*/

Route::get('index',[PrimerController::class,'index']);      //Para usar esta forma hay que habilitar el controlador al inicio del código "use App\Http\Controllers\PrimerController;"
// otra forma de escribir esta ruta seria:
    //Route::get('/controlador1', 'App\Http\Controllers\PrimerController@index');   //de esta forma no necesitamos habilitar el controlador al inicio.

Route::get('controlador1',[PrimerController::class,'contact1']);

Route::get('controlador2',[PrimerController::class,'contact2']);

Route::get('controlador3',[PrimerController::class,'contact3']);

Route::get('controlador4',[PrimerController::class,'contact4']);

/*------------------- Rutas hacia los métodos del controlador con parámetros --------------------------------------*/

Route::get('/prueba/{param}', 'App\Http\Controllers\PrimerController@param');

Route::get('/prueba1', 'App\Http\Controllers\PrimerController@param1');