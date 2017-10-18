<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">

    <title>MascotasLP</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="#">Inicio<span class="sr-only">(current)</span></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li class=""><a href="{{ url('/buscarmascota') }}">BUSCAR MASCOTAS </a></li>
                <li><a href=" {{ url('/listaveterinaria') }}">VETERINARIAS</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li><a href="{{ url('/login') }}">INGRESAR</a></li>
                    <li><a href="{{ url('/register') }}">REGISTRAR</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->nombre . ' '.  Auth::user()->apellido}} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ url('/panel') }}">
                                    <span class="hidden-xs">Panel de Administracion</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}">
                                    <span class="hidden-xs">Salir</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="container arriba">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ asset('/images/banner3.jpg') }}" alt="Casa de la Mascota">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('/images/banner2.jpg') }}" alt="...">
                <div class="carousel-caption">

                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>
<div class="container arriba">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title ">Servicios</h2>
        </div>
        <div class="panel-body text-justify">
            <p>
                La Casa de la Mascota ofrece el servicio de peluquería que cuesta desde 20 bolivianos para perros pequeños hasta 100 bolivianos para los más grandes.
                Los precios de los cortes varían según la raza y el tamaño de la mascota.
                El costo del servicio de peluquería para un perro pequeño, que mide unos 30 o 40 centímetros, cuesta entre 20 y 40 bolivianos. En esta clasificación entran las razas pequinés, yorkshire terrier y dachshund más conocidos como salchicha, entre otros. Mientras que el costo para los perros medianos, que miden desde 40 hasta 60 centímetros, cuesta entre 50 y 70 bolivianos. En este grupo están, por ejemplo los chapis, schnauzer y cocker spaniel. El precio del servicio de peluquería para perros grandes, que miden más de 60 centímetros, es de 70 a 100 bolivianos, entre ellos está el mastín napolitano, pastor alemán o gran danés.
            </p>
            <p>
                El servicio de peluquería incluye un lavado con dos tipos de shampoo, uno neutro para no dañar la piel del animal y otro medicado para matar pulgas, garrapatas o piojos. El servicio incluye también la limpieza de las almohadillas ubicadas en las patas, el limado de uñas, la limpieza de oídos y una revisión general. Los dientes también tienen una limpieza especial, pues se les aplica pasta dental especial para perros y un spray bucal para prevenir el sarro.
                Finalmente se le pone un talco anti pulgas y una colonia especial para perros.
                El espacio municipal ofrece también baños en seco a base de shampoo en polvo y espuma para aquellos perros que han recibido algún tipo de vacuna y no pueden estar al contacto con el agua en al menos 15 días.
            </p>

        </div>
    </div>
    <div class="col-md-6" style="padding-left: 0;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Descripcion</h2>
            </div>
            <div class="panel-body text-justify">
                <p>
                    La Casa de la Mascota cuenta con un vacunatorio, una sala de consultas; enfermería, que se encarga del registro de los animales. Esta unidad tendrá un registro de todas las mascotas que lleguen al centro. Tiene también dos  salas pre y postoperatoria donde se realizará la sedación de la mascota y  corte del pelo.
                </p>
                <img src="{{ asset('/images/foto1.jpg') }}" class="img-responsive" alt="Responsive image">

            </div>
        </div>
    </div>
    <div class="col-md-6" style="padding-right: 0;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Contacto</h2>
            </div>
            <div class="panel-body text-justify">
                <p>
                    La Casa de la Mascota está ubicado en la avenida Regimiento Castrillo Nº 100, en la zona Bajo San Antonio y la atención es de lunes a viernes de 8.00 a 12.00 y de 14.30 a 18.30. Tuvo una inversión de más de 2,5 millones de bolivianos para su primera fase.

                </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15302.000442090552!2d-68.1156131!3d-16.5008309!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x299dd3860cd88824!2sCasa+de+la+Mascota!5e0!3m2!1ses!2s!4v1507445191480" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
