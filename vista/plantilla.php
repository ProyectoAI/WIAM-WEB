<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Play Cook</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="https://samanthacmpn06.wixsite.com/misitio">"SDK"</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="vista/login.php">Iniciar Sesión</a></li>
                        <li class="nav-item"><a class="nav-link" href="vista/usuarios.php">Usuarios</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="vista/comida.php" aria-expanded="false">Comida</a>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="vista/reservas.php">Reservas</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="vista/registro.php">Registro</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="vista/salir.php/plantilla.php">Salir</a></li>

                            
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">PLAY COOK</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Una experiencia inolvidable</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <div
        id="carouselMultiItemExample"
        class="carousel slide carousel-dark text-center"
        data-mdb-ride="carousel"
      >
        <!-- Controls -->
        <div class="d-flex justify-content-center mb-4">
          <button
            class="carousel-control-prev position-relative"
            type="button"
            data-mdb-target="#carouselMultiItemExample"
            data-mdb-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next position-relative"
            type="button"
            data-mdb-target="#carouselMultiItemExample"
            data-mdb-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!-- Inner -->
        <div class="carousel-inner py-4">
          <!-- Single item -->
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card">
                    <img
                      src="https://lh5.googleusercontent.com/p/AF1QipNaZIPgIz693ZQhlVwbQcr2040feQ99EroiMcLI=w401-h500-k-no" width="350" height="350" />
                    
                    
                    <div class="card-body">
                      <h5 class="card-title">CREPES</h5>
                      <p class="card-text">
                        200 ML de puro chocolate
                      </p>

                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card">
                    <img
                      src="https://fastly.4sqi.net/img/general/200x200/28896685_RJJPuve-hzW6YkjYgZPviM1wr4vP65AWFO_mwUyZJxc.jpg" width="350" height="350"
                      class="card-img-top"
                      alt="Sunset Over the Sea"
                    />
                    <div class="card-body">
                      <h5 class="card-title">LIMONADA AZUL</h5>
                      <p class="card-text">
                        Diseño incríble, especial para los niños
                      </p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card">
                    <img
                      src="https://media-cdn.tripadvisor.com/media/photo-s/20/6b/15/93/caption.jpg" width="350" height="350"
                      class="card-img-top"
                      alt="Sunset over the Sea"
                    />
                    <div class="card-body">
                      <h5 class="card-title">HAMBURGUESA PIKACHU</h5>
                      <p class="card-text">
                        Diseño de tu juego favorito
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Single item -->
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-12">
                  <div class="card">
                    <img
                      src="https://media-cdn.tripadvisor.com/media/photo-s/20/6b/15/93/caption.jpg"
                      class="card-img-top"
                      alt="Fissure in Sandstone"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk
                        of the card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">Button</a>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card">
                    <img
                      src="https://mdbcdn.b-cdn.net/img/new/standard/nature/185.webp"
                      class="card-img-top"
                      alt="Storm Clouds"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk
                        of the card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">Button</a>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card">
                    <img
                      src="https://mdbcdn.b-cdn.net/img/new/standard/nature/186.webp"
                      class="card-img-top"
                      alt="Hot Air Balloons"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk
                        of the card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">Button</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Single item -->
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                  <div class="card">
                    <img
                      src="https://mdbcdn.b-cdn.net/img/new/standard/nature/187.webp"
                      class="card-img-top"
                      alt="Peaks Against the Starry Sky"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk
                        of the card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">Button</a>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                  <div class="card">
                    <img
                      src="https://mdbcdn.b-cdn.net/img/new/standard/nature/188.webp"
                      class="card-img-top"
                      alt="Bridge Over Water"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk
                        of the card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">Button</a>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
                  <div class="card">
                    <img
                      src="https://mdbcdn.b-cdn.net/img/new/standard/nature/189.webp"
                      class="card-img-top"
                      alt="Purbeck Heritage Coast"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk
                        of the card's content.
                      </p>
                      <a href="#!" class="btn btn-primary">Button</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Inner -->
      </div>
      <!-- Carousel wrapper -->
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">GRACIAS   POR TU VISITA</p>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <?php 

#ISSET: isset() Determina si una variable está definida y no es NULL

if(isset($_GET["pagina"])){

  if($_GET["pagina"] == "registro" ||
     $_GET["pagina"] == "login" ||
     $_GET["pagina"] == "usuarios" ||
     $_GET["pagina"] == "editar" ||
     $_GET["pagina"] == "salir")
  {

    include "vista/".$_GET["pagina"].".php";

  } else
            {
                include "vista/error404.php";
            }


}else{

  include "vista/login.php";

}



?>
    </body>
</html>

