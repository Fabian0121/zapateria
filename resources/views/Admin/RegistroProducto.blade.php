<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>


<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid bg-danger">
            <a class="navbar-brand" href="/">Zapateria 5 Hermanos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a class="nav-link" href="#">Inicio</a>
                    <a class="nav-link" href="#">Registrar</a>
                    <a class="nav-link" href="#">clientes</a>
                    <a class="nav-link" href="#">clientes</a>
                </div>
            </div>
        </div>
    </nav>
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
</body>
</html>
