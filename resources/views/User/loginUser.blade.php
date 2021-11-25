<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Inicio de sesion</title>
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

</style>

<body>
    <div class="container">
        <div class=" row min-vh-100 justify-content-center align-items-center">
            <div class="col-10 bg-danger">
                <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="container">
                        <div class="row align-items-sm-center">
                            <div class="col-5 col-auto form_class">
                                <div class=" text-white titulo">
                                    <h2 class="text-white"> Inicio de sesion</h2>
                                </div>
                                <div class="">
                                    <h5 class=" text-white"> Ingresa tu correo electronico y contraseña </h5>
                                    <div class=" form-group text-white">
                                        <label> Correo electronico </label>
                                        <input typw="email" class=" form-control" placeholder="example@gmail.com"
                                            autofocus name="email">
                                        @error('email')
                                            <p class=" text-white">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class=" form-group">
                                        <label class="text-white"> Contraseña</label>
                                        <input type="password" class="form-control" placeholder="Contraseña"
                                            name="password">
                                        @error('password')
                                            <p class="text-white">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" text-center">
                                    <button class=" btn btn-sm btn_enviar"> Ingresar </button>
                                </div>
                            </div>
                            <div class="col-2">
                            </div>
                            <div class="col-5 justify-content-center d-none d-sm-block">
                                <h2 class="text-white"> Zapateria 5 hermanos</h2>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>
