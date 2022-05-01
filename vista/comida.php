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

<body>           
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="https://samanthacmpn06.wixsite.com/misitio">"SDK"</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 mb-lg-0 ms-lg-4 bg-warning" >
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Inicio</a></li>
                       
                            <li class="nav-item"><a class="nav-link active" id="navbarDropdown" href="">Comida</a>
                          <ul>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="Categorias/bebidas.php">Bebidas</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="Categorias/hamburguesas.php">Hamburguesas</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="Categorias/postres.php">Postres</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="Categorias/alitas.php">Alitas</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="Categorias/promociones.php">Promociones</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="Categorias/picaditas.php">Picaditas</a></li>


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

        
        <header class="header">
            <div class="container px-2 px-lg-3">
                <div class="text-center text-black">
                <br>
                <br>
                <br>
                <br>
                    <h1 class=" fw-bolder">NUESTRAS ESPECIALIDADES</h1>
                </div>
            </div>
        </header>
        
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
        left:260px;
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
                src="../../img/pc6.jpg" width="350" height="350"
                class="card-img-top"
                alt="Waterfall"
              />
              <div class="card-body">
              <center><h5 class="card-title">BEBIDAS</h5></center>
                <p class="card-text">
                Deliciosa limonada azul.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="../../img/pc2.jpg" width="350" height="350"
                class="card-img-top"
                alt="Sunset Over the Sea"
              />
              <div class="card-body">
              <center><h5 class="card-title">HAMBURGUESAS</h5></center>
                <p class="card-text">
                Sabemos que los lunes son para sacarse esas ganas de una rica hamburguesa.
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="../../img/descarga.jpg" width="350" height="350"
                class="card-img-top"
                alt="Sunset over the Sea"
              />
              <div class="card-body">
              <center><h5 class="card-title">POSTRES</h5></center>
                <p class="card-text">
                Ya probaste nuevo lomo Estilo Argentino 🥗🍟🥩 200 gr de puro sabor 
                </p>
              </div>
            </div>
          </div>


          <div class="col-lg-4 d-none d-lg-block">
            <div class="card">
              <img
                src="../../img/cocteles.jpg" width="350" height="350"
                class="card-img-top"
                alt="Sunset over the Sea"
              />


              <div class="card-body">
              <center><h5 class="card-title">ALITAS</h5></center>
                <p class="card-text">
                Ya probaste las nuevos alitas BBQ con papas 🍟🥩 200 gr de puro sabor 
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
              <center><h5 class="card-title">PROMOCIONES</h5></center>
                <p class="card-text">
                Ya probaste nuevo lomo Estilo Argentino 🥗🍟🥩 200 gr de puro sabor 
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
              <center><h5 class="card-title">PICADITAS</h5></center>
                <p class="card-text">
                Ya probaste nuevo lomo Estilo Argentino 🥗🍟🥩 200 gr de puro sabor 
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  <!-- Inner -->
</div>
<!-- Carousel wrapper -->
<style>
.header{
  background-image:url("../../img/lugar2.jpg");
  width: auto;
  height: 300px;
}
</style>
