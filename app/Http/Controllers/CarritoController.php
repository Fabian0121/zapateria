<?php

namespace App\Http\Controllers;

use App\Models\calzado;
use App\Models\carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CarritoController extends Controller
{
    public function verCarrito()
    {
        $carrito = carrito::where('id_usuario', session('user')->id)->get();
        $productos = calzado::where('id_calzado', '$carrito->id_producto')->get();
        $pruebas = null;
        foreach($productos as $a)
        {
            foreach($carrito as $b)
            {
                if($a->id_calzado == $b->id_producto && session('user')->id == $b->id_usuario )
                $pruebas = Arr::collapse([$a, $b]);
            }
        }
        echo $productos;
        echo $carrito->id_productos;
    }
}
