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
    @if(isset($estatus))
        @if($estatus == "success")
            <label class="text-success">{{$mensaje}}</label>
        @elseif($estatus == "error")
            <label class="text-warning">{{$mensaje}}</label>
        @endif
    @endif
    <div class="container">
        <div class="col-md-12 bg-danger text-white titulo" style="margin-bottom: 2%">
            <div class=" titulo1 text-center">
                <h2> Lista de deseos </h2>
                <hr color="black" size=10>
            </div>
            <h2> Productos () </h2>



            @foreach($productos as $producto)


                <div class="row " style="padding-top: 30px" style=" margin-bottom: 10px">
                    <div class="col-2 img">
                        <img src="https://png.pngtree.com/element_our/20190530/ourmid/pngtree-cartoon-cargo-box-image_1252309.jpg"
                            width="100" height="100">
                    </div>
                    <div class="col-3">
                        <p> Marca:{{ $producto ->  marca}} </p>
                        <p> Tipo: {{$producto -> tipo}}</p>
                    </div>
                    <div class="col-3">
                        <p> Modelo: {{$producto -> modelo}}</p>
                        <p> Medida: {{$producto -> medida}}</p>
                    </div>
                    <div class="col-3">
                        <p> Precio: {{$producto->precio}}</p>
                    </div>
                </div>
                <div class="row border-bottom">
                    <div class="col-2 img">

                    </div>
                    <div class="col-2">
                        <form action="{{route('eliminar.form')}}" method="post">
                            {{csrf_field()}}
<input type="hidden" name="ID" value="{{$producto -> id_calzado}}">
                            <button type="submit" class="btn btn-warning">Eliminar</button>
                        </form>

                    </div>
                    <div class="col-3">
                        <button type="button" class="btn btn-success">Ver producto</button>
                    </div>
                    <div class="col-6">
                    </div>
                </div>


@endforeach




        </div>
    </div>
@endsection

@section('contenido')

@endsection

@section('js')

@endsection
