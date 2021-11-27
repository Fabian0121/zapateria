@extends('layout.layout')

@section('titulo')
    <title>Lista de deseos</title>
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
            padding-top: 15px;
            padding-left: 15px;
        }
        .titulo1{
            padding-left: 25%;
            padding-right: 25%;
        }

    </style>
@endsection

@section('titulo-pagina')
    <div class="container">
        <div class="col-md-12 bg-danger text-white titulo" style="margin-bottom: 2%">
            <div class=" titulo1 text-center">
                <h2> Lista de deseos </h2>
                <hr color="black" size=10>
            </div>
            <h2> Productos () </h2>
            @for ($a = 0; $a < 5; $a++)
                <div class="row " style="padding-top: 30px" style=" margin-bottom: 10px">
                    <div class="col-2 img">
                        <img src="https://png.pngtree.com/element_our/20190530/ourmid/pngtree-cartoon-cargo-box-image_1252309.jpg"
                            width="100" height="100">
                    </div>
                    <div class="col-3">
                        <p> Marca:{{ $a }} </p>
                        <p> Tipo: </p>
                    </div>
                    <div class="col-3">
                        <p> Modelo: </p>
                        <p> Medida: </p>
                    </div>
                    <div class="col-3">
                        <p> Precio: </p>
                    </div>
                </div>
                <div class="row border-bottom">
                    <div class="col-2 img">

                    </div>
                    <div class="col-2">
                        <a class="text-white " href=""> Eliminar </a>
                    </div>
                    <div class="col-3">
                        <a class="text-white" href=""> Ver producto</a>
                    </div>
                    <div class="col-6">
                    </div>
                </div>
                <div style="margin-bottom:1%, margin-top:1%" >
                </div>
            @endfor
        </div>
    </div>
@endsection

@section('contenido')

@endsection

@section('js')

@endsection
