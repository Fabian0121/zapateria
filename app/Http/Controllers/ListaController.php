<?php

namespace App\Http\Controllers;

use App\Models\calzado;
use App\Models\carrito;
use App\Models\lista;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    //Mostrar vista
    public function listaView()
    {
         $lista = lista::where('id_usuario', session('user')->id)->get();
         $productos = calzado::get();
         //echo $lista;
         return view('user.listaDeseos',["lista"=>$lista, "calzado"=>$productos]);

    }
    //Agregar
    public function agregar($id,$id0)
    {
        $agregar = new lista();
        $productos = calzado::where('id_calzado',$id)->first();
        $pruebas = lista::get();
        
        $agregar->id_usuario = session('user')->id;
        $agregar->id_producto = $productos->id_calzado;
        $agregar->precio = $productos->precio;
        $agregar->save();
        
        $producto = carrito::where('id',$id0)->first();
        $producto->delete();
        return redirect()->route('listaView');
    }
    //eliminar
    public function eliminar($id)
    {
        $objeto = lista::where('id',$id)->first();
        $objeto->delete();
        return redirect()->route('listaView');
    }
}
