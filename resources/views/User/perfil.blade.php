@extends('layout.layout')

@section('titulo')
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@endsection

@section('css')
    <style>
        .img {
            padding-left: 15px;
            margin-left: 20px;
        }

        .titulo {
            padding-top: 18px;
            padding-bottom: 1px;
        }

        .titulo1 {
            padding-left: 25%;
            padding-right: 25%;
        }

        .contenido {
            padding-left: 15px;
            padding-top: 10px;
            padding-bottom: 1px;
        }
        .line{
            margin-top: 10px;
        }
        .btn_enviar {
            border-radius: 3px;
            border-color: #dc3545!important;
            background-color: #dc3545!important;
        }
        .btn_enviar:hover {
            background-color: white;
            border-color: white;
            cursor: pointer;
            color: white;
        }

    </style>
@endsection

@section('titulo-pagina')
    <div class="container col-md-6">
        <div class="bg-white text-dark cont-1">
            <div class="text-center">
                <h3> Mis datos </h3>
                <hr color="black" size=10>
            </div>
            <div class="titulo">
                <h5> Datos de la cuenta </h5>
            </div>
            <div class="bg-danger text-white contenido rounded">
                <div class="row border-bottom">
                    <div class="col-md-6">
                        <p> Usuario </p>
                    </div>
                    <div class="col-md-6">
                        <p> {{session('user')->nombre}} {{session('user')->apellido_p}} {{session('user')->apellido_m}} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 line">
                        <p> Correo electronico </p>
                    </div>
                    <div class="col-md-6 line">
                        <p> {{session('user')->email}} </p>
                    </div>
                </div>
            </div>
            <div class="titulo">
                <h5> Informacion personal </h5>
            </div>
            <div class="bg-danger text-white contenido rounded">
                <div class="row border-bottom">
                    <div class="col-md-6">
                        <p> Nombre y apellidos </p>
                    </div>
                    <div class="col-md-6">
                        <p> {{session('user')->nombre}} {{session('user')->apellido_p}} {{session('user')->apellido_m}} </p>
                    </div>
                </div>
                <div class="row border-bottom line">
                    <div class="col-md-6">
                        <p> Correo electronico </p>
                    </div>
                    <div class="col-md-6">
                        <p> {{session('user')->email}} </p>
                    </div>
                </div>
                <div class="row border-bottom line">
                    <div class="col-md-6">
                        <p>Contraseña </p>
                    </div>
                    <div class="col-md-6">
                        <p> ************* </p>
                    </div>
                </div>
                <div class="row border-bottom line">
                    <div class="col-md-6">
                        <p>Telefono </p>
                    </div>
                    <div class="col-md-6">
                        <p> {{session('user')->telefono}} </p>
                    </div>
                </div>
            </div>
            <div class="titulo">
                <h5> Direccion </h5>
            </div>
            <div class="bg-danger text-white contenido rounded">
                <div class="row line">
                    <div class="col-md-6">
                        <p>Direccion </p>
                    </div>
                    <div class="col-md-6">
                        <p> {{session('user')->Direccion}} </p>
                    </div>
                </div>
            </div>
            <div class="" style="margin-top: 2%">
                <button class="btn btn-md btn_enviar"> Editar </button>
            </div>
            <div class="" style="margin-bottom: 15px">
            </div>
        </div>
    @endsection

    @section('contenido')

    @endsection

    @section('js')

    @endsection
