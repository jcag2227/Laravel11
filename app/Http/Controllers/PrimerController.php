<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller {
    public function index() {
        return view('inicio.index');
    }

    public function contact1() {
        /*$datos = [
            'name' => 'JC',
            'edad' => 50
        ];
        return view('crud/contact1',$datos);*/
        return view('inicio/contact1', ['name' => 'JC','edad' => 50]);                    
    }

    public function contact2() {
        return view('inicio/contact2', ['provincia' => 'Granada']);
    }

    public function contact3() {
        return view('inicio/link');
    }

    public function contact4() {
        return to_route('primera');
    }   

    public function param($parametro) {
        echo '<h1>Parametro enviado: ' . $parametro . '</h1>';
    } 

    public function param1() {
        $datos = [
            'nombre' => 'JC',
            'telefono' => '913456879',
            'email' => 'hola1@hola.es'
        ];

        return view('inicio/parametros', compact('datos'));

    } 

}
