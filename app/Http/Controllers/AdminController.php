<?php

namespace App\Http\Controllers;

use App\Models\calzadomodel;
use App\Models\categoriamodel;
use App\Models\marcamodel;
use Illuminate\Http\Request;

class AdminController extends Controller
{

public function agregarCalzado()
{
    $categorias = categoriamodel::get();
    $marcas = marcamodel::get();
    return view("RegistroProducto",["categorias" => $categorias,"marcas" => $marcas]);

}
public function productos(){
    $productos = calzadomodel::get();
    return view("productos",["productos"=>$productos]);
}

public function eliminar(Request $datos){
    $productos = calzadomodel::get();
    $eliminar = calzadomodel::where('id_calzado',$datos -> ID)->delete();
    if ($eliminar)
        return view("productos",["productos" => $productos,"estatus" => "success","mensaje" => "producto eliminado exitosamente"]);
    else
        return view("productos",["productos" => $productos,"estatus" => "error","mensaje" => "No se pudo eliminar :c"]);

}

    public function agregar(Request $datos){

        if(!$datos -> marca || !$datos -> tipo || !$datos -> modelo || !$datos -> talla || !$datos -> precio || !$datos -> stock)
            return view("RegistroProducto",["estatus" => "error","mensaje" => "Falta informacion"]);

        $zapato = calzadomodel::where('modelo',$datos->modelo)->first();
        if ($zapato) return view("RegistroProducto",["estatus" => "error","mensaje" => "Este modelo ya esta registrado"]);

        $zapato = new calzadomodel();

        $zapato -> id_admin =1;
        $zapato -> marca = $datos -> marca;
        $zapato -> tipo = $datos -> tipo;
        $zapato -> modelo = $datos -> modelo;
        $zapato -> medida = $datos -> talla;
        $zapato -> precio = $datos -> precio;
        $zapato -> stock = $datos -> stock;
        $zapato -> save();
//return route('agregar',["estatus" => "success","mensaje" => "modelo ".$datos->modelo." agregada exitosamente"]);
        return view("RegistroProducto", ["estatus" => "success","mensaje" => "modelo ".$datos->modelo." agregado exitosamente"]);
    }

}
