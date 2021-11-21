<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Registro admin</title>
</head>
<style>
    .titulo {
        padding-top: 35px;
        padding-bottom: 35px;
    }
    .form_class{
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
            <div class="col-6 col-lg-6 col-md-12 col-sm-12 m-auto bg-danger">
                <form>
                    {{ csrf_field() }}
                    <div class="container">
                            <div class=" form_class text-white">
                                <div class=" text-white titulo">
                                    <h2 class="text-white"> Registro de administrador</h2>
                                </div>
                                <div>
                                    <h5 class=" text-white"> Ingresa la informacion que se te pide </h5>
                                    <div class=" form-group text-white">
                                        <label> Nombre </label>
                                        <input typw="text" class=" form-control" placeholder="Nombre" required>
                                    </div>
                                    <div class="row">
                                        <div class=" col-lg-6 col-md-6 col-sm-12">
                                            <div class=" form-group">
                                                <label> Apellido paterno </label>
                                                <input typw="text" class=" form-control" placeholder="Apellido paterno" required>
                                            </div>
                                        </div>
                                        <div class=" col-lg-6 col-md-6 col-sm-12">
                                            <div class=" form-group">
                                                <label> Apellido materno</label>
                                                <input typw="text" class=" form-control" placeholder="Apellido materno" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" col-lg-6 col-md-6 col-sm-12">
                                            <div class=" form-group">
                                                <label> Correo electronico </label>
                                                <input typw="email" class=" form-control" placeholder="example@gmail.com" required>
                                            </div>
                                        </div>
                                        <div class=" col-lg-6 col-md-6 col-sm-12">
                                            <div class=" form-group">
                                                <label> Contraseña </label>
                                                <input typw="password" class=" form-control" placeholder="********" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" form-group text-white">
                                        <label> Telefono </label>
                                        <input typw="number" class=" form-control" placeholder="7749856231" required>
                                        <br>
                                    </div>
                                </div>
                                <div class=" text-center">
                                    <button class=" btn btn-sm btn_enviar"> Registrarse </button>
                                </div
                            </div>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>