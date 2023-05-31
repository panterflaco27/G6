<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <title>G6</title>
    </head>
    <body>
        <!--header-->
        <header>
            <div class="container text-center">
                <div class="row align-items-center">
                    <!--logo g6-->
                    <div class="col-1">
                        <a href="#/"><img src="{{asset('img/G6.png')}}" alt="Logo G6"></a>
                    </div>
                    <div class="col">
                        <div class="container justify-content-end">
                            <div class="row justify-content-end">
                                <!--agregar el icon de user y el nombre del usuario-->
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
                            <button type="button" class="btn btn-diag btn-success" data-bs-target="#modal-diagnostico-1" data-bs-toggle="modal">Comenzar diagnóstico!</button>
                        </div>

                        <!--secion de modals para el diagnostico digital
                            falta ver como guardar los datos en un solo formulario, se puede hacer con un script, recopilando datos
                            y guardando todo con una query-->

                            
                        <!--modal p1-->
                        <div class="modal fade" id="modal-diagnostico-1" aria-labelledby="modalTitle">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header modal-registro">
                                        <h2 class="mdal-titlte fs-5 mx-auto">Diagnóstico digital</h2>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <!--div class="titulo">Temas tic</div-->
                                            <div class="row">
                                                <div class="row mx-auto">
                                                    <h3 class="fs-6 mx-auto">¿Cuenta con un correo electrónico?</h3>
                                                    <div class="form-check">
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-correo" id="radio-si">
                                                            <label for="radio-si" class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-correo" id="radio-no">
                                                            <label for="radio-no" class="form-check-label">no</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <button class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                                <button class="btn btn-diag btn-success" data-bs-target="#modal-diagnostico-2" data-bs-toggle="modal">siguiente</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--modal p2-->
                        <div class="modal fade" id="modal-diagnostico-2" aria-labelledby="modalTitle">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header modal-registro">
                                        <h2 class="mdal-titlte fs-5 mx-auto">Diagnóstico digital</h2>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <!--div class="titulo">paqueteria</div-->
                                            <div class="row">
                                            
                                                <div class="row mx-auto">
                                                    <h3 class="fs-6 mx-auto">¿Sabe utilizar la paquetería de Office (Word, Excel, PowerPoint, etc…)?</h3>
                                                    <div class="form-check">
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-paq" id="radio-si">
                                                            <label for="radio-si" class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-paq" id="radio-no">
                                                            <label for="radio-no" class="form-check-label">no</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div>
                                                <button class="btn btn-reg btn-dark"data-bs-target="#modal-diagnostico-1" data-bs-toggle="modal">atras</button>
                                                <button class="btn btn-diag btn-success" data-bs-target="#modal-diagnostico-3" data-bs-toggle="modal">siguiente</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--modal p3-->
                        <div class="modal fade" id="modal-diagnostico-3" aria-labelledby="modalTitle">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header modal-registro">
                                        <h2 class="mdal-titlte fs-5 mx-auto">Diagnóstico digital</h2>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <!--div class="titulo">Comunicacion</div-->
                                            <div class="row">
                                            
                                                <div class="row mx-auto">
                                                    <h3 class="fs-6 mx-auto">Cual(es) de las siguientes aplicaciones utiliza para comunicarse:</h3>
                                                
                                                    <div class="form-check col">
                                                        <div class="mx-auto">
                                                            <input type="checkbox" class="form-check-input" name="check-app" id="facebook">
                                                            <label for="facebook" class="form-check-label">Facebook</label>
                                                        </div>
                                                        <div class="mx-auto">
                                                            <input type="checkbox" class="form-check-input" name="check-app" id="whatsapp">
                                                            <label for="whatsapp" class="form-check-label">Whatsapp</label>
                                                        </div>
                                                        <div class="mx-auto">
                                                            <input type="checkbox" class="form-check-input" name="check-app" id="instagram">
                                                            <label for="instagram" class="form-check-label">Instagram</label>
                                                        </div>
                                                        <div class="mx-auto">
                                                            <input type="checkbox" class="form-check-input" name="check-app" id="tiktok">
                                                            <label for="tiktok" class="form-check-label">Tiktok</label>
                                                        </div>
                                                        <div class="mx-auto">
                                                            <input type="checkbox" class="form-check-input" name="check-app" id="telegram">
                                                            <label for="telegram" class="form-check-label">Telegram</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="row mx-auto">
                                                    <h3 class="fs-6 mx-auto">¿Utiliza esas aplicaciones para comunicarse con sus clientes y/o familiares?</h3>
                                                
                                                    <div class="form-check">
                                                        <div class="mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-com" id="radio-si">
                                                            <label for="radio-si" class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-com" id="radio-no">
                                                            <label for="radio-no" class="form-check-label">no</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div>
                                                <button class="btn btn-reg btn-dark"data-bs-target="#modal-diagnostico-2" data-bs-toggle="modal">atras</button>
                                                <button class="btn btn-diag btn-success" data-bs-target="#modal-diagnostico-4" data-bs-toggle="modal">siguiente</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--modal p4-->
                        <div class="modal fade" id="modal-diagnostico-4" aria-labelledby="modalTitle">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header modal-registro">
                                        <h2 class="mdal-titlte fs-5 mx-auto">Diagnóstico digital</h2>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <!--div class="titulo">Publicidad</div-->
                                            <div class="row">
                                                <div class="row mx-auto">
                                                    <h3 class="fs-6 mx-auto">¿Cuenta con una página web para ofrecer sus servicios?</h3>
                                                </div>
                                                <div class="form-check">
                                                    <div class="col-2 mx-auto">
                                                        <input type="radio" class="form-check-input" name="radio-pw" id="radio-si">
                                                        <label for="radio-si" class="form-check-label">Si</label>
                                                    </div>
                                                    <div class="col-2 mx-auto">
                                                        <input type="radio" class="form-check-input" name="radio-pw" id="radio-no">
                                                        <label for="radio-no" class="form-check-label">no</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mx-auto">
                                                <h3 class="fs-6 mx-auto">¿Cuenta con un canal de YouTube?</h3>
                                                <div class="form-check">
                                                    <div class="col-2 mx-auto">
                                                        <input type="radio" class="form-check-input" name="radio-yt" id="radio-si">
                                                        <label for="radio-si" class="form-check-label">Si</label>
                                                    </div>
                                                    <div class="col-2 mx-auto">
                                                        <input type="radio" class="form-check-input" name="radio-yt" id="radio-no">
                                                        <label for="radio-no" class="form-check-label">no</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mx-auto">
                                                <h3 class="fs-6 mx-auto">¿Cuenta con alguna Fanpage o algún blog para promocionar su empresa?</h3>

                                                <div class="form-check">
                                                    <div class="col-2 mx-auto">
                                                        <input type="radio" class="form-check-input" name="radio-fp" id="radio-si">
                                                        <label for="radio-si" class="form-check-label">Si</label>
                                                    </div>
                                                    <div class="col-2 mx-auto">
                                                        <input type="radio" class="form-check-input" name="radio-fp" id="radio-no">
                                                        <label for="radio-no" class="form-check-label">no</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <button class="btn btn-reg btn-dark"data-bs-target="#modal-diagnostico-3" data-bs-toggle="modal">atras</button>
                                                <button class="btn btn-diag btn-success" data-bs-target="#modal-diagnostico-5" data-bs-toggle="modal">siguiente</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--modal p5-->
                        <div class="modal fade" id="modal-diagnostico-5" aria-labelledby="modalTitle">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header modal-registro">
                                        <h2 class="mdal-titlte fs-5 mx-auto">Diagnóstico digital</h2>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <!--div class="titulo">Dispositivos</div-->
                                            <div class="row">
                                            
                                                <div class="row mx-auto">
                                                    <h3 class="fs-6 mx-auto">¿Sabe utilizar laptop o pc?</h3>
                                                
                                                    <div class="form-check">
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-pc" id="radio-si">
                                                            <label for="radio-si" class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-pc" id="radio-no">
                                                            <label for="radio-no" class="form-check-label">no</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="row mx-auto">
                                                    <h3 class="fs-6 mx-auto">¿Sabe utilizar tabletas o smartphone?</h3>
                                                
                                                    <div class="form-check">
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-tb" id="radio-si">
                                                            <label for="radio-si" class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-tb" id="radio-no">
                                                            <label for="radio-no" class="form-check-label">no</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div>
                                                <button class="btn btn-reg btn-dark"data-bs-target="#modal-diagnostico-4" data-bs-toggle="modal">atras</button>
                                                <button class="btn btn-diag btn-success" data-bs-target="#modal-diagnostico-6" data-bs-toggle="modal">siguiente</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--modal p6-->
                        <div class="modal fade" id="modal-diagnostico-6" aria-labelledby="modalTitle">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header modal-registro">
                                        <h2 class="mdal-titlte fs-5 mx-auto">Diagnóstico digital</h2>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <!--div class="titulo">Marketing digital</div-->
                                            <div class="row">
                                            
                                                <div class="row mx-auto">
                                                    <h3 class="fs-6 mx-auto">¿Tiene experiencia sobre el marketing digital?</h3>
                                                
                                                    <div class="form-check">
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-md" id="radio-si">
                                                            <label for="radio-si" class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-md" id="radio-no">
                                                            <label for="radio-no" class="form-check-label">no</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="row mx-auto">
                                                    <h3 class="fs-6 mx-auto">¿Cree usted que es una herramienta útil para aumentar la popularidad de su empresa?</h3>
                                                
                                                    <div class="form-check">
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-hm" id="radio-si">
                                                            <label for="radio-si" class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-hm" id="radio-no">
                                                            <label for="radio-no" class="form-check-label">no</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div>
                                                <button class="btn btn-reg btn-dark"data-bs-target="#modal-diagnostico-5" data-bs-toggle="modal">atras</button>
                                                <button class="btn btn-diag btn-success" data-bs-target="#modal-diagnostico-7" data-bs-toggle="modal">siguiente</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--modal p7-->
                        <div class="modal fade" id="modal-diagnostico-7" aria-labelledby="modalTitle">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header modal-registro">
                                        <h2 class="mdal-titlte fs-5 mx-auto">Diagnóstico digital</h2>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <!--div class="titulo">Comunicacion clientes</div-->
                                            <div class="row">
                                            
                                                <div class="row mx-auto">
                                                    <h3 class="fs-6 mx-auto">¿Cuentas con información de los clientes?</h3>
                                                
                                                    <div class="form-check">
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-ic" id="radio-si">
                                                            <label for="radio-si" class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-ic" id="radio-no">
                                                            <label for="radio-no" class="form-check-label">no</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="row mx-auto">
                                                    <h3 class="fs-6 mx-auto">¿Cuenta con los Email de los clientes?</h3>
                                                
                                                    <div class="form-check">
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-ec" id="radio-si">
                                                            <label for="radio-si" class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-ec" id="radio-no">
                                                            <label for="radio-no" class="form-check-label">no</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="row mx-auto">
                                                    <h3 class="fs-6 mx-auto">¿Cuenta con los números telefónicos de los clientes?</h3>
                                                
                                                    <div class="form-check">
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-nc" id="radio-si">
                                                            <label for="radio-si" class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="col-2 mx-auto">
                                                            <input type="radio" class="form-check-input" name="radio-nc" id="radio-no">
                                                            <label for="radio-no" class="form-check-label">no</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div>
                                                <button class="btn btn-reg btn-dark"data-bs-target="#modal-diagnostico-6" data-bs-toggle="modal">atras</button>
                                                <button type="button" class="btn btn-diag btn-success" onclick="enviar();">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--terminan los modals del diagnostico digital-->

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

    <script type="text/javascript">
        function enviar(){
            alert('formulario enviado!');
        }
    </script>
</html>