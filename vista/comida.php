<?php
session_start();
error_reporting(0);
$varsesion=$_SESSION['email'];
if ($varsesion==null||$varsesion=='') {
    echo "<script>alert('No tiene acceso');</script>";
    header('location:login.php');
    die();
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="https://samanthacmpn06.wixsite.com/misitio">"SDK"</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 mb-lg-0 ms-lg-4 bg-warning" >
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Inicio</a></li>
                       
                            <li class="nav-item"><a class="nav-link active" id="navbarDropdown" href="comida.php">Comida</a>
                          <ul>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="vista/reservas.php">Bebidas</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="vista/registro.php">Hamburguesas</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="vista/salir.php">Postres</a></li>
                          </ul>
                          
                          </li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="reservas.php">Reservas</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="registro.php">Registro</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="salir.php">Salir</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="productos/contenido.php">Añadir</a></li>
                             
                        </li>
                    </ul>
                    <form class="d-flex">
                        
                    </form>
                </div>
            </div>
        </nav>
        
</body>
<!-- Carousel wrapper -->

    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
			
			#header {
				margin:auto;
				width:500px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			
			.navbar-nav li a {
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.navbar-nav li a:hover {
				background-color:orange;
			}
			
			.navbar-nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.navbar-nav li:hover > ul {
				display:block;
        left:275px;
			}
			
			.navbar-nav li ul li {
				position:relative;
			}
			
			.navbar-nav li ul li ul {
				right:-140px;
				top:0px;
			}

</style>
  </head>
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
                src="https://media-cdn.tripadvisor.com/media/photo-p/21/bb/25/98/play-cook.jpg" width="350" height="350"
                class="card-img-top"
                alt="Waterfall"
              />
              <div class="card-body">
                <h5 class="card-title">Plato 0001</h5>
                <p class="card-text">
                Unos pequeños aperitivos chezze pop con salsa de tamarindo super deli
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="https://media-cdn.tripadvisor.com/media/photo-s/20/ce/5c/3b/play-cook.jpg" width="350" height="350"
                class="card-img-top"
                alt="Sunset Over the Sea"
              />
              <div class="card-body">
                <h5 class="card-title">Lunes promo</h5>
                <p class="card-text">
                Sabemos que los lunes son para sacarse esas ganas de una salchi o papitas con Pollo
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2018/11/como-hacer-lomo-que-no-quede-seco.jpg" width="350" height="350"
                class="card-img-top"
                alt="Sunset over the Sea"
              />
              <div class="card-body">
                <h5 class="card-title">Lomo Argentino</h5>
                <p class="card-text">
                Ya probaste nuevo lomo Estilo Argentino 🥗🍟🥩 200 gr de puro sabor 
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
                src="https://www.cubaneandoconmario.com/wp-content/uploads/2017/01/Cocteles-con-tequila-Margarita-Bulldog.jpg" width="350" height="350"
                class="card-img-top"
                alt="Fissure in Sandstone"
              />
              <div class="card-body">
                <h5 class="card-title">COCTELES PLAY COOK</h5>
                <p class="card-text">
                A todo con los cocteles temáticos solo los encuentras en Play cook 
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
