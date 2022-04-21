<?php
require_once "../controlador/controlador.usuarios.php";

//Método para insertar un usuario en la base de datos
if (isset($_POST["ingresar"])) {   //Se activa cuando el usuario da clic en el boton

  $datos = array(
    $_POST["nombre"],
    $_POST["apellido"],
    $_POST["email"],
    $_POST["pass"],


  );

  $insertar = ControladorUsuarios::contrInsertarUsuarios($datos);


  if ($insertar == "ok") {
    echo "<script>
        alert('Usuario insertado correctamente...');
       </script>";
  }

  if ($insertar == "error") {
    echo "<script>
        alert('ERROR');
       </script>";
  }
}

?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
            <div class="card-img-left d-none d-md-flex">
            <form id="frmAgregar" role="form" method="POST" enctype="multipart/form-data">
              <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">Registrate</h5>
              <form>
  
              <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInputnombre" name="nombre" placeholder="nombre" required autofocus>
                  <label for="floatingInputUsername">Nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputapellido" name="apellido" placeholder="apellido" required autofocus>
                    <label for="floatingInputUsername">Apellido</label>
                  </div>
  
                 <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInputEmail" name="email" placeholder="name@example.com">
                  <label for="floatingInputEmail">Email</label>
                </div>
  
                <hr>
  
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Contraseña">
                  <label for="floatingPassword">Contraseña</label>
                </div>
  
                <div class="d-grid mb-2">
                  <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit" name="ingresar" >Registrar</button>
                </div>
  
  
                <a class="d-block text-center mt-2 small" href="http://localhost/wiam/vista/login.php">Tienes una cuenta? Inicia sesión</a>
  
                <hr class="my-4">
  
                <div class="d-grid mb-2">
                  <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
                    <i class="fab fa-google me-2"></i> Iniciar Sesión con Google
                  </button>
                </div>
  
                <div class="d-grid">
                  <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
                    <i class="fab fa-facebook-f me-2"></i> Iniciar Sesión con Facebook
                  </button>
                </div>
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <style>
      body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-img-left {
  width: 45%;
  /* Link to your background image using in the property below! */
  background: scroll center url('https://as01.epimg.net/meristation/imagenes/2021/02/11/noticias/1613031667_732856_1613031773_noticia_normal.jpg');
  background-size: cover;
  height: 604px;
  width: 512px;
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}

.btn-google {
  color: white !important;
  background-color: #ea4335;
}

.btn-facebook {
  color: white !important;
  background-color: #3b5998;
}
  </style>