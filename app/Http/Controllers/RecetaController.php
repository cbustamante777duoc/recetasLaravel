<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    // public function hola()
    // {
    //     return view('nosotros');
    // }

    public function __invoke()
    {

        $recetas = ['Recetas pizzas','Recetas hamburgueza','Recetas sopaipilla pasadas'];
        $categorias = ['Comida chilena','Comida italiana','Comida estadounidense'];

        // return view('recetas.index')
        //             ->with('recetas',$recetas)
        //             ->with('categorias',$categorias);

         return view('recetas.index',compact('recetas','categorias'));
    }
}
