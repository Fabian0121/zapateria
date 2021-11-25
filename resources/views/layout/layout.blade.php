<!DOCTYPE html>
<html lang="en">
<style>
    .margin {
        padding-right: 15px;
    }

    .header1 {

        min-height: 125px;
        max-height: 225px;
    }
	.main-footer{
		background-color: rgb(2, 2, 2);
		  border-top: 1px solid #dee2e6;
		  color: #869099;
		  padding: 1rem;
	  }

</style>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('titulo')
    <!-- Custom fonts for this template-->
    <!-- Bootstrap core CSS -->
    <link href="/css/vistas/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/vistas/css/simple-sidebar.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')

</head>

<body>

    <header class="p-4 mb-4 border-bottom bg-danger header1  ">
        <div class="container  ">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none margin">
                    <h3 class="text-center"> Zapateria 5 <br> hermanos</h3>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white">Inicio</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Productos</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Categorias</a></li>
                </ul>
                <div class="text-end margin">
                    <a href="#" class="d-block text-white text-decoration-none ">
                        <i class="fas fa-clipboard-list"> Favoritos</i>
                    </a>
                </div>
                <div class="text-end margin">
                    <a href="#" class="d-block text-white text-decoration-none ">
                        <i class="fas fa-shopping-cart"> Carrito </i>
                    </a>
                </div>
                <div class="text-end">
                    <p>
                </div>
                <div class="dropdown text-end">
                    <a href="#" class="d-block text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-user"> Perfil </i>
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    @yield('titulo-pagina')

    @yield('contenido')
    </div>
    <!-- /#page-content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; Zapateria 5 hermanos </strong>
    </footer>
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="/css/vistas/vendor/jquery/jquery.min.js"></script>
    <script src="/css/vistas/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>

</html>
