@extends('layout.layout')

@section('titulo')
    <title>Carrito</title>
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

        .empyte {
            padding-bottom: 15%;
            padding-top: 15.5%;
            min-width: 500px;
            ;
        }
        .contenido{
            min-height: 380px;
            padding-bottom: 15px;
        }
        .boton{
            margin-top: 1%;
        }

    </style>
@endsection

@section('titulo-pagina')
    <div class="container">
        <div class="col-md-12 bg-danger text-white titulo contenido">
            <h2> Productos () </h2>

            @if ($carrito)
            @foreach ($calzado as $item)
                @foreach ($carrito as $c)
                @if ($item->id_calzado == $c->id_producto)
                <div class="row" style="padding-top: 30px" style=" margin-bottom: 10px">
                    <div class="col-2 img">
                        <img src="https://png.pngtree.com/element_our/20190530/ourmid/pngtree-cartoon-cargo-box-image_1252309.jpg"
                            width="100" height="100">
                    </div>
                    <div class="col-3">
                        <p> Marca:{{$item->marca}}</p>
                        <p> Tipo:{{$item->tipo}} </p>
                    </div>
                    <div class="col-3">
                        <p> Modelo:{{$item->modelo}} </p>
                        <p> Medida:{{$item->medida}} </p>
                    </div>
                    <div class="col-3">
                        <p> Precio:{{$c->precio}} </p>
                        <p> Cantidad:{{$c->cantidad }}</p>
                    </div>
                </div>
                <div class="row border-bottom">
                    <div class="col-2 img">

                    </div>
                    <div class="col-2">
                        <a class="text-white " href="{{route('carritoDelete',["id" => $c->id])}}"> Eliminar </a>
                    </div>
                    <div class="col-3">
                        <a class="text-white" href="{{route('listaAdd',['id' => $c->id_producto, 'id2' => $c->id])}}"> Agregar a lista de deseos</a>
                    </div>
                    <div class="col-6">
                    </div>
                </div>
                <div style="margin-bottom:1%, margin-top:1%">
                </div>
                @endif
                @endforeach
            @endforeach
            </div>
            <div class="">
                <div class="col-md-12 justify-content-end" style="margin-bottom: 20px">
                    <div class="row">
                        <div class="col-2 boton">
                            <button class="btn-danger btn-lg">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div class="col-12">
                    <div class=" justify-content-center empyte">
                        <h1> Por el momento no tienes productos en tu carrito </h1>
                    </div>
                </div>
            </div>
            @endif
       

        

    </div>
@endsection

@section('contenido')

@endsection

@section('js')

@endsection
