<!--Xinia Aguilar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiquete-Detalle</title>
    <!-- Bootstrap link/version -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;900&family=Roboto:wght@300;400;900&display=swap"
        rel="stylesheet">
    <!-- Main stylesheet -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styleDetalle.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>
    <div class="container-fluid">
        <div class="">
            <nav class="navbar  navbar-expand-sm nav1 ">
                <div class="" href="#"><img src="./img/logo.png" class="d-inline-block align-top" alt="">
                </div>

                <div class="col-sm titubarra">
                    <ul class="navbar-nav  navbar-nav2">
                        <li class="nav-item"><a href="#" class="nav-link titubarra ">HOME</a></li>
                        <li class="nav-item"><a href="#" class="nav-link  titubarra">ABOUT</a></li>

                    </ul>

                </div>

                <select class="form-select form-select-sm  event ">
                    <option selected>EVENTOS</option>
                    <option value="1">CONCIERTO</option>
                    <option value="2">COMEDIA</option>
                    <option value="3">DEPORTE</option>
                </select>

                <div class="navbar-brand" href="#"><img class="carro" src="./img/carro.png"
                        class="d-inline-block align-top" alt="">
                    </div>
                


                <!--Boton Buscar-->
                <div class="flexsearch">
                    <div class="flexsearch--wrapper">
                        <form class="flexsearch--form form" action="#" method="post">
                            <div class="flexsearch--input-wrapper">
                                <input class="flexsearch--input" type="search" placeholder="Buscar">
                            </div>
                            <input class="flexsearch--submit" type="submit" value="" />
                            <img class="imagebusca" src="./img/buscar.png" alt="#">
                        </form>
                    </div>
                </div>

            </nav>

            
                <div class=" row ti-event">
                   
                        <div class="col-4 "><li class=" ti-event"><a href="#" class=" titubarra ">CONCIERTO </a></li></div>
                        <div class="col-4"><li class="ti-event "><a href="#" class=" titubarra ">CONCIERTO </a></li></div>
                        <div class="col-4"><li class="ti-event "><a href="#" class=" titubarra ">CONCIERTO </a></li></div>
                       
                   
                </div>
            
        </div>
        <!--Fin nav-->

        <div class="container3">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="./img/CONCIERTO.png" alt="#" >
                    </div>

                    <div class="item">
                        <img src="./img/COMEDIA.png" alt="#" >
                    </div>

                    <div class="item">
                        <img src="./img/DEPORTES.png" alt="#" >
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="row ">
            
            <!-- titulo evento -->
            <div>
                <h2 class="ti-event">Lorem ipsum </h2>

            </div>

        </div> <!-- titulo evento -->
        <!-- Galery -->

        <div class="carousel-inner ">
            <!-- Single item -->
            <div class="carousel-item active">
                <div class="container-fluid">
                    <div class="row">
                        <!--Primer fila -->
                        <!-- evento1 -->
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="./img/11.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">Nombre Evento</h5>
                                    <p class="card-text lugar-evento">Provincia
                                    </p>
                                    <a href="#!" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>

                        <!-- evento2-->
                        <div class="col-sm-3  d-lg-block">
                            <div class="card">
                                <img src="./img/11.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">Nombre Evento</h5>
                                    <p class="card-text lugar-evento"> Provincia
                                    </p>
                                    <a href="#!" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                        <!-- evento3-->
                        <div class="col-sm-3 d-lg-block">
                            <div class="card">
                                <img src="./img/11.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">Nombre Eventos</h5>
                                    <p class="card-text lugar-evento"> Provincia </p>
                                    <a href="#!" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 d-lg-block">
                            <div class="card">
                                <img src="./img/11.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">Nombre Eventos</h5>
                                    <p class="card-text lugar-evento"> Provincia </p>
                                    <a href="#!" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--Segunda fila-->

                <div class="container-fluid">
                    <div class="row">
                        <!--Primer fila -->
                        <!-- evento1 -->
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="./img/11.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">Nombre Evento</h5>
                                    <p class="card-text lugar-evento">Provincia
                                    </p>
                                    <a href="#!" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                        <!-- evento2-->
                        <div class="col-sm-3  d-lg-block">
                            <div class="card">
                                <img src="./img/11.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">Nombre Evento</h5>
                                    <p class="card-text lugar-evento"> Provincia
                                    </p>
                                    <a href="#!" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                        <!-- evento3-->
                        <div class="col-sm-3 d-lg-block">
                            <div class="card">
                                <img src="./img/11.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">Nombre Eventos</h5>
                                    <p class="card-text lugar-evento"> Provincia </p>
                                    <a href="#!" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 d-lg-block">
                            <div class="card">
                                <img src="./img/11.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title nombre-evento">Nombre Eventos</h5>
                                    <p class="card-text lugar-evento"> Provincia </p>
                                    <a href="#!" class="btn btn-primary botton-evento">Ver Evento</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>
        <!--Fin Galery-->


        <!-- Footer -->


        <div class="container-fluid">



            <!-- Footer -->
            <footer class="row footer-back">
                <div class=" footer-icon">
                    <li class="list-inline-item">
                        <img class=" face" src="./img/facebook2.png" class="" alt="..." />
                    </li>
                    <li class="list-inline-item ">
                        <img class="tele" src="./img/telegram3.png" class="" alt="..." />
                    </li>

                </div>

                <!-- Copyright -->
                <div class="footer-copy">© 2021 Copyright:
                    <a class="footer-copy" href=""> Virtual Event</a>
                    <a class="footer-copy"> Todos los Derechos Reservados</a>
                </div>
                <!-- Copyright -->
            </footer>
        </div>



    </div>



</body>

</html>