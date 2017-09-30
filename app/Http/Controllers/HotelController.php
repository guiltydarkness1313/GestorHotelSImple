<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function VerResultado(Request $request){
        $instancia=new Hotel();

        $instancia->setCantidadDias($request->input('dias'));
        $instancia->setCantidadPersonas($request->input('personas'));
        $instancia->setTipoHabitacion($request->input('tipo'));

        $personas=$instancia->getCantidadPersonas();
        $dias=$instancia->getCantidadDias();
        $tipo=$instancia->getTipoHabitacion();

        $instancia->calcularPrecio($tipo,$dias,$personas);

        echo "el precio del hospedaje es: {$instancia->getPrecioHospedaje()}";
     //   echo "$instancia->getCantidadPersonas()";
    }
}
