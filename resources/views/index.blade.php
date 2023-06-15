<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <title>G6</title>
    </head>
    <body>
        <!--header-->
        <header>
            <div class="container text-center">
                <div class="row align-items-center">
                    <!--logo g6-->
                    <div class="col-1">
                        <a href="#"><img src="{{asset('img/G6.png')}}" alt="Logo G6"></a>
                    </div>
                    <div class="col">
                        <div class="container justify-content-end">
                            <div class="row justify-content-end">
                                <!--boton de ingresar-->
                                <div class="col-1 col-sm-1">
                                    <a class="btn btn-light" href="/login">Ingresar</a>
                                </div>
                                <!--boton de registro-->
                                <div class="col-1 col-sm-1">
                                    <a class="btn btn-secondary btn-reg" href="#">Registrarse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--menu de header-->
            <div class="navbar">
                <div class="container align-content-center">
                    <div class="row mx-auto">
                        <div class="col">
                            <a href="#" class="nav-a">G6</a>
                        </div>
                        <div class="col">
                            <a href="#blog" class="nav-a">Blog</a>
                        </div>
                        <div class="col">
                            <a href="#contacto" class="nav-a">Contacto</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--main (G6)-->
        <section id="main">
            <div class="container align-content-center">
                <div class="row mx-auto">
                    <div class="col text-center">
                        <!--titulo-->
                        <div>
                            <h1>
                                Obtén tu diagnóstico digital!
                            </h1>
                        </div>

                         <!--boton de diagnostico-->
                         <div>
                            <button type="button" class="btn btn-diag btn-success" data-bs-toggle="modal" data-bs-target="#modal-inicio">Comenzar diagnóstico!</button>
                        </div>

                        
                         <!--modal inicio de sesion-->
                        <form action="/log" method="">
                             <div class="modal fade" id="modal-inicio" aria-labelledby="modalTitle">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header modal-registro">
                                            <h2 class="modal-title fs-5 mx-auto">¿Ya estás registrado? <br> incia sesión ahora mismo!</h2>
                                            <!--button type="button" class="btn-close" data-bs-dismiss="modal " aria-label="Close"></button-->
                                        </div>
                                        <div class="modal-body">
                                            <form action="/log" method="POST">
                                                @csrf
                                                <div>
                                                    <label for="coelec" class="col-form-label">Correo:</label>
                                                    <input type="email" class="form-control" id="coelec" name="coelec" placeholder="example@example.com">
                                                    <label for="pass" class="col-form-label">Contraseña:</label>
                                                    <input type="password" class="form-control" id="pass" name="pass">
                                                </div>
                                                <div class="flex-col">
                                                    <input type="checkbox" class="" id="remember" name="remenber">
                                                    <label for="remember" class="form-label">Recordar contraseña</label>
                                                    <a href="#" class="">¿Olvidó su contraseña?</a>
                                                </div>
                                                <button class="btn btn-primary btn-diag" type="submit">Iniciar sesión</button>
                                                <hr>
                                                <label for="log" class="form-label">¿Aún no tienes una cuenta?, <a href="#" data-bs-target="#modal-registro" data-bs-toggle="modal">Regístrate!</a></label>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>


                        <!--modal registro-->
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="modal fade" id="modal-registro" aria-labelledby="modalTitle">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header modal-registro">
                                            <h2 class="modal-title fs-5 mx-auto">¿Aún no tienes una cuenta? <br> Regístrate ahora mismo!</h2>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/reg" method="POST">
                                                {{ csrf_field() }}
                                                <div class="col">
                                                    <div class="row mx-auto">
                                                        <div class="col">
                                                            <label for="nombre" class="col-form-label">Nombre:</label>
                                                            <input type="text" class="form-control" id="nombre" name="nombre">
                                                            @error('nombre')
                                                                <p class="form-text text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="col">
                                                            <label for="appat" class="col-form-label">Apellido paterno:</label>
                                                            <input type="text" class="form-control" id="appat" name="appat">
                                                            @error('appat')
                                                                <p class="form-text text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="col">
                                                            <label for="apmat" class="col-form-label">Apellido materno:</label>
                                                            <input type="text" class="form-control" id="apmat" name="apmat">
                                                        </div>
                                                    </div>
                                                    <div class="row mx-auto">
                                                        <div class="col">
                                                            <label for="coelec" class="col-form-label">Correo electrónico:</label>
                                                            <input type="email" class="form-control" placeholder="example@example.com" id="coelec" name="coelec">
                                                            @error('coelec')
                                                                <p class="form-text text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mx-auto">
                                                        <div class="col">
                                                            <label for="pass" class="col-form-label">Contraseña:</label>
                                                            <input type="password" class="form-control" id="pass" name="pass">
                                                            @error('pass')
                                                                <p class="form-text text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="col">
                                                            <label for="passval" class="col-form-label">Verifique la contraseña:</label>
                                                            <input type="password" class="form-control" id="passval" name="passval">
                                                            @error('passval')
                                                                <p class="form-text text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 mx-auto" style="padding-top: 15px">
                                                        <button class="btn btn-primary btn-diag" type="submit">Registrarse</button>
                                                    </div>
                                                    <hr>
                                                    <label for="reg" class="form-label">¿Ya estás registrado?, <a href="#" data-bs-target="#modal-inicio" data-bs-toggle="modal">inicia sesión</a> ahora mismo!</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                       

                    </div>
                    <div class="col">
                        <!--imagen social media-->
                        <div class="rounded float-md-end">
                            <img src="{{asset('img/Social Media_Monochromatic 1.png')}}" alt="Social Media">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</html>