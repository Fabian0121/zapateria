<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\UserController;
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
    return view('User.carrito');
});

Route::get('/agregar',[AdminController::class,'agregarCalzado'])->name('agregar');
Route::post('/agregar',[AdminController::class, 'agregar']) -> name('agregar.form');
//Rutas para vista login y registro usuarios
//login
Route::get("/registro", [UserController::class, 'viewRegistro'])->name('registroView');
Route::post('/registro/function', [UserController::class, 'registro'])->name('registro');
//registro
Route::get('/login', [UserController::class, 'loginView'])->name('loginView');
Route::post('/login/function', [UserController::class, 'login'])->name('login');
//logout
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
//Usuarios
Route::prefix('/user')->middleware('verificarUsuario')->group(function(){
    //Datos de usuario
    Route::get("/inicio",[UserController::class,'inicio'])->name('user.inicio');

    //Carrito
    Route::get("/carrito",[CarritoController::class,'verCarrito'])->name('carrito');
});
