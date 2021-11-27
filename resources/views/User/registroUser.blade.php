<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Registro usuario</title>
</head>
<style>
    .titulo {
        padding-top: 35px;
        padding-bottom: 35px;
    }

    .form_class {
        padding-bottom: 35px;
        padding-left: 15px;
    }

    .btn_enviar {
        border-radius: 3px;
        border-color: white;
        background-color: white;
    }

    .btn_enviar:hover {
        background-color: red;
        border-color: red;
        cursor: pointer;
        color: white;
    }
    .container1{
        margin-top: 3%;
        margin-bottom: 3%;
    }

</style>

<body>
    <div class="container">
        <div class=" row min-vh-100 justify-content-center align-items-center">
            <div class=" col-lg-6 col-md-12 col-sm-12 m-auto bg-danger container1">
                <form action="{{ route('registro') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="container">
                        <div class=" form_class text-white">
                            <div class=" text-white titulo">
                                <h2 class="text-white"> Registro de usuario</h2>
                            </div>
                            <div>
                                <h5 class=" text-white"> Ingresa la informacion que se te pide </h5>
                                <div class=" form-group text-white">
                                    <label> Nombre </label>
                                    <input typw="text" class=" form-control" placeholder="Nombre" required name="nombre"
                                        value="{{ old('nombre') }}">
                                    @error('nombre')
                                        <p class=" alert-white">{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class=" col-lg-6 col-md-6 col-sm-12">
                                        <div class=" form-group">
                                            <label> Apellido paterno </label>
                                            <input typw="text" class=" form-control" placeholder="Apellido paterno"
                                                required name="apellidoP" value="{{ old('apellidoP') }}">
                                            @error('apellidoP')
                                                <p class=" alert-whiter">{{ $message }} </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6 col-sm-12">
                                        <div class=" form-group">
                                            <label> Apellido materno</label>
                                            <input typw="text" class=" form-control" placeholder="Apellido materno"
                                                required name="apellidoM" value="{{ old('apellidoM') }}">
                                            @error('apellidoM')
                                                <p class=" alert-white">{{ $message }} </p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" col-lg-6 col-md-6 col-sm-12">
                                        <div class=" form-group">
                                            <label> Correo electronico </label>
                                            <input typw="email" class=" form-control" placeholder="example@gmail.com"
                                                required name="email" value="{{ old('email') }}">
                                            @error('email')
                                                <p class=" alert-white">{{ $message }} </p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class=" col-lg-6 col-md-6 col-sm-12">
                                        <div class=" form-group">
                                            <label> Contraseña </label>
                                            <input typw="password" class=" form-control" placeholder="********"
                                                required name="password">
                                            @error('password')
                                                <p class=" alert-white">{{ $message }} </p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class=" form-group text-white">
                                    <label> Telefono </label>
                                    <input type="number" class=" form-control"
                                        placeholder="55469871" required name="telefono"
                                        value="{{ old('telefono') }}">
                                    @error('direccion')
                                        <p class=" alert-white">{{ $message }} </p>
                                    @enderror
                                </div>
                                <div class=" form-group text-white">
                                    <label> Direccion </label>
                                    <input typw="text" class=" form-control"
                                        placeholder="Av Siempre Viva Edo Mex 55630" required name="direccion"
                                        value="{{ old('direccion') }}">
                                    @error('direccion')
                                        <p class=" alert-white">{{ $message }} </p>
                                    @enderror
                                    <br>
                                </div>
                            </div>
                            <div class=" text-center">
                                <button class=" btn btn-sm btn_enviar"> Registrarse </button>
                            </div </div>
                        </div>
                </form>
            </div>
        </div>
</body>

</html>
