<?php

namespace App\Http\Controllers;

use App\Models\calzado;
use App\Models\carrito;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CarritoController extends Controller
{
    //Se puede ver el carrito
    public function verCarrito()
    {
        $carrito = carrito::where('id_usuario', session('user')->id)->get();
        $productos = calzado::get();
        return view('User.carrito',["calzado"=>$productos, "carrito"=>$carrito]);
    }
    /*
    //se agrega un producto a un carrito
    public function agregar($id)
    {
        $carrito = new carrito();
        $producto = calzado::where('id',$id)->first();
        $carrito->id_usuario = session('user')->id;
        $carrito->id_producto = $id;
        $carrito->cantidad = 1;
        $carrito->total = $producto->precio;
        $carrito->save();
        echo "OKKK";
    }
    //se hace una compra
    public function comprar()
    {

    }*/
    //Se elimina un producto del carrito
    public function eliminar($id)
    {
        $producto = carrito::where('id',$id)->first();
        $producto->delete();
        return redirect()->route('carritoView');
    }
}
