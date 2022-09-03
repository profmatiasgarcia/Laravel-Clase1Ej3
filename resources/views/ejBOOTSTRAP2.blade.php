{{-- Copyright (C) 2022 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3.
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/- --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ejemplo usando Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
      <!-- Custom styles for this template -->
      <link rel="stylesheet" href="{!! asset('css/carousel.css') !!}">

  </head>

  <body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Viajes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="تبديل التنقل">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">LogIn</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">LogOut</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Vuelo|Hotel|Excursión" aria-label="بحث">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
            </div>
          </div>
        </nav>
      </header>

      <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
             <img class="mb-4" src="{{ asset ('images/pic01.jpg') }}">
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>Paris. </h1>
                  <p>Además de ser un museo al aire libre, ofrece innumerables lugares para visitar y rincones para perderse.</p>
                  <p><a class="btn btn-lg btn-primary" href="#">Consultar</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
                <img class="mb-4" src="{{ asset ('images/pic02.jpg') }}">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Roma. </h1>
                  <p>Encontrar una buena "trattoria" y sentarse en la terraza para degustar la deliciosa cocina italiana con vistas a ruinas romanas.</p>
                  <p><a class="btn btn-lg btn-primary" href="#">Consultar</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
                <img class="mb-4" src="{{ asset ('images/pic03.jpg') }}">
              <div class="container">
                <div class="carousel-caption text-end">
                  <h1>Londres. </h1>
                  <p>Conocer el Palacio del Parlamento, la Abadía de Westminster y el famoso reloj Big Ben, es comenzar a entender la historia y las tradiciones de la capital inglesa.</p>
                  <p><a class="btn btn-lg btn-primary" href="#">Consultar</a></p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">السابق</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">التالي</span>
          </button>
        </div>


        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

          <!-- Three columns of text below the carousel -->
          <div class="row">
            <div class="col-lg-4">
              <img class="mb-4" src="{{ asset ('images/plane.png') }}" alt="" width="140" height="140">

              <h2>Vuelos</h2>
              <p>Acá vas a descubrir la mayor variedad de vuelos de las aerolíneas más importantes del mercado, comprar vuelos no solo de las distintas aerolíneas, sino también por fecha, viendo en qué momento podés adquirir los pasajes de avión más económicos.</p>
              <p><a class="btn btn-secondary" href="#">Cotizar</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="mb-4" src="{{ asset ('images/hotel.png') }}" alt="" width="140" height="140">

              <h2>Alojamiento</h2>
              <p>Podés encontrar hoteles baratos en en nuestros tres destinos con ofertas increibles. Comenzá a pensar en tu viaje soñado, disfrutá de hoteles sin costos de reserva, con pago en destino o a través de nuestra web con beneficios.</p>
              <p><a class="btn btn-secondary" href="#">Reservar</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="mb-4" src="{{ asset ('images/excursiones.png') }}" alt="" width="140" height="140">

              <h2>Excursiones</h2>
              <p>Podés descubrir todas las atracciones de tu próximo destino y reservar los tours, paseos y excursiones que más te gusten. Esto significa que ya podés comenzar a planificar tu viaje, consultando ahora y reservando tu actividad preferida en nuestros destinos.</p>
              <p><a class="btn btn-secondary" href="#">Consultar</a></p>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->


          <!-- START THE FEATURETTES -->

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">Londres. <span class="text-muted"> Inglaterra. </span></h2>
              <p class="lead">Londres, la capital de Inglaterra y del Reino Unido, es una ciudad del siglo XXI con una historia que se remonta a la época romana. En su centro se alzan el imponente Palacio del Parlamento, la torre del icónico reloj "Big Ben" y la Abadía de Westminster, lugar de las coronaciones monárquicas británicas. Al otro lado del río Támesis, la rueda de observación London Eye ofrece vistas panorámicas del complejo cultural South Bank y de toda la ciudad.</p>
            </div>
            <div class="col-md-5">
                <img class="mb-4" src="{{ asset ('images/pic03.jpg') }}" alt="" width="500" height="500">
            </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7 order-md-2 px-5">
              <h2 class="featurette-heading">Roma. <span class="text-muted"> Italia. </span></h2>
              <p class="lead">Roma, la capital de Italia, es una extensa ciudad cosmopolita que tiene a la vista casi 3,000 años de arte, arquitectura y cultura de influencia mundial. Las ruinas antiguas como las del Foro y el Coliseo evocan el poder del antiguo Imperio Romano. La ciudad del Vaticano, sede central de la Iglesia católica romana, cuenta con la Basílica de San Pedro y los Museos del Vaticano, que albergan obras maestras como los frescos de la Capilla Sixtina de Miguel Ángel.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="mb-4" src="{{ asset ('images/pic02.jpg') }}" alt="" width="500" height="500">
            </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">París. <span class="text-muted"> Francia. </span></h2>
              <p class="lead">París, la capital de Francia, es una importante ciudad europea y un centro mundial del arte, la moda, la gastronomía y la cultura. Su paisaje urbano del siglo XIX está entrecruzado por amplios bulevares y el río Sena. Aparte de estos hitos, como la Torre Eiffel y la catedral gótica de Notre Dame del siglo XII, la ciudad es famosa por su cultura del café y las tiendas de moda de diseñador a lo largo de la calle Rue du Faubourg Saint-Honoré</p>
            </div>
            <div class="col-md-5">
              <img class="mb-4" src="{{ asset ('images/pic01.jpg') }}" alt="" width="500" height="500">
            </div>
          </div>

          <hr class="featurette-divider">

          <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
          <p class="float-end"><a href="#">Volver arriba</a></p>
          <p>&copy; 2010–2022 Company, Inc. &middot; <a href="#">Prof Matias Garcia</a> &middot; </p>
        </footer>
      </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
