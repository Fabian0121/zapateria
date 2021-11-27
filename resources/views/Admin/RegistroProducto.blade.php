
@extends('layout.layout')

@section('titulo')
    <title>Registro de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection

@section('css')

@endsection

@section('titulo-pagina')
   <h1>Registro de producto</h1>
@endsection

@section('contenido')
    <div class="container">
        @if(isset($estatus))
            @if($estatus == "success")
                <label class="text-success">{{$mensaje}}</label>
            @elseif($estatus == "error")
                <label class="text-warning">{{$mensaje}}</label>
            @endif
        @endif
        <form class="row g-3" method="post" action={{route('agregar.form')}} >
            {{csrf_field()}}

            <?php
            use App\Models\categoriamodel;
            use App\Models\marcamodel;

            $categorias = categoriamodel::get();
            $marcas = marcamodel::get();
            ?>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Marca</label>
                <select class="form-select" name="marca">

                    <option selected>seleccionar...</option>
                    @foreach($marcas as $marca)
                        <option>{{$marca -> nombre}}</option>
                    @endforeach

                </select>

            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="inputEmail4" name="modelo" placeholder="Ejemplo: Marti">

            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Tipo</label>
                <select class="form-select" name="tipo">

                    <option selected>seleccionar...</option>
                    @foreach($categorias as $categoria)
                        <option>{{$categoria -> nombre}}</option>
                    @endforeach

                </select>

            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Precio</label>
                <input type="number" class="form-control" id="inputAddress" name="precio" placeholder="Ejemplo: $250">
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Stock</label>
                <input type="number" class="form-control" id="inputAddress" name="stock" placeholder="Ejemplo: 25">
            </div>

            <div class="col-6">
                <label for="inputState" class="form-label">Talla</label>
                <select id="inputState" name="talla" class="form-select">
                    <option selected>seleccionar...</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                </select>
            </div>

            <center><div class="col-12">
                    <button type="submit" class="btn btn-success ">Registrar</button>
                </div></center>

        </form>
    </div>
    </div>

@endsection

@section('js')

@endsection
