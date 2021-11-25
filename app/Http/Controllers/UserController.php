<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class UserController extends Controller
{
    //Registro
    public function viewRegistro()
    {
        return view('user.registroUser');
    }
    //Funcion   
    public function registro(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:32',
            'apellidoP' => 'required|min:3|max:32',
            'apellidoM' => 'required|min:3|max:32',
            'email' => 'required|email',
            'password' => 'required|min:3|max:32',
            'direccion' => 'required|min:3|max:32',
            'telefono' => 'required|max:10'
        ]);

        //$user = usuario::where('email',$request->email)->first();
        $usuario = usuario::where('email', $request->email)->first();
        if ($usuario) {
            throw ValidationValidationException::withMessages([
                'email' => __('auth.email')
            ]);
        }
        $user = new usuario();
        $user->nombre = $request->nombre;
        $user->apellido_p = $request->apellidoP;
        $user->apellido_m = $request->apellidoM;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->telefono = $request->telefono;
        $user->Direccion = $request->direccion;
        $user->save();
        return redirect()->route('loginView');
    }
    //Login user
    public function loginView()
    {
        return view('user.loginUser');
    }
    public function login(Request $request)
    {
        //Validaciones para los inputs
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4|max:32'
        ]);
        //Validar el email
        $usuario = usuario::where('email', $request->email)->first();
        if (!$usuario)
            throw ValidationValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        //Validar contras
        if (!Hash::check($request->password, $usuario->password))
            throw ValidationValidationException::withMessages([
                'password' => __('auth.password')
            ]);

        $request->session()->put('user', $usuario);


        //Esta funcion redirecciona a la siguiente vista
        if (isset($request->url)) {
            $url = decrypt($request->url);
            return redirect($url);
        } else {
            return redirect()->route('user.inicio');
        }
    }
    //Cerrar sesion
    public function logout()
    {
        if (session()->has('user'))
            
            session()->forget('user');
            
        //Retornar a vista login
        return redirect()->route('loginView');
    }
    //Vista de inicio
    public function inicio()
    {
        return view('User.listaDeseos');
    }
}
