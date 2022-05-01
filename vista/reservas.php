<?php
require_once "../controlador/controlador.reservas.php";

// VALIDAR EL INICIO
session_start();
error_reporting(0);
$varsesion=$_SESSION['email'];
if ($varsesion==null||$varsesion=='') {
    echo "<script>alert('No tiene acceso');</script>";
    header('location:login.php');
    die();
}

//Método para insertar un usuario en la base de datos
if (isset($_POST["ingresar"])) {   //Se activa cuando el usuario da clic en el boton

    $datos = array(
      $_POST["nombre_reservante"],
      $_POST["fecha_reserva"],
      $_POST["hora_reserva"],
      $_POST["N_mesa_reserva"],
      $_POST["N_niños"],
      $_POST["N_adultos"],
      $_POST["telefono"]
    );
  
    $insertar = ControladorReservas::contrInsertarReservas($datos);
  
  
    if ($insertar == "ok") {
      echo "<script>
          alert('Reservas insertada correctamente...');
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"> 
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="https://samanthacmpn06.wixsite.com/misitio">"SDK"</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="vista/usuarios.php">Usuarios</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="../vista/comida.php" aria-expanded="false">Comida</a>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="../vista/reservas.php">Reservas</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="../vista/registro.php">Registro</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="../vista/salir.php">Salir</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="../vista/productos/contenido.php">Añadir</a></li>


                            
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

<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Reservaciones PLAY COOK</h1>
                    </div>
                    <form id="frmAgregar" role="form" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <input class="form-control" type="text" 
                            name="nombre_reservante" placeholder="Nombre del Reservante" required autofocus> <span class="form-label">Nombre del usuario</span> 
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="date" 
                                    name="fecha_reserva" required autofocus> <span class="form-label">Día Reserva</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="time"
                                    name="hora_reserva" required autofocus> <span class="form-label">Hora</span>
                            </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group"> 
                                    <select class="form-control" name="N_mesa_reserva" required>
                                        <option value="" selected hidden>N° mesas</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                       

                                    </select> <span class="select-arrow"></span> <span class="form-label">Sitios</span> </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" name="N_niños" required>
                                        <option value="" selected hidden>N° Niños</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>


                                    </select> <span class="select-arrow"></span> <span class="form-label">Niños</span> </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"> 
                                    <select class="form-control" name="N_adultos" required>
                                        <option value="" selected hidden>N° Adultos </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>

                                    </select> <span class="select-arrow"></span> <span class="form-label">Adultos</span> </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> 
                                    <input class="form-control" type="tel" 
                                    name="telefono" placeholder="Número de Teléfono"> <span class="form-label">Phone</span> 
                                </div>
                            </div>
                        </div>

                        <div class="form-btn"> 
                            <button class="submit-btn" type="submit" name="ingresar">Reservar Ahora</button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
   body {
    background-image: linear-gradient(to right, #1f33a2, #1ee939)
}

.section {
    position: relative;
    height: 100vh
}

.section .section-center {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%)
}

#booking {
    font-family: 'Raleway', sans-serif
}

.booking-form {
    position: relative;
    max-width: 642px;
    width: 100%;
    margin: auto;
    padding: 40px;
    overflow: hidden;
    background-image: url('https://i.pinimg.com/originals/b1/63/58/b16358b5e704a3a4c994ffb08673ba5a.jpg');
    background-size: cover;
    border-radius: 5px;
    z-index: 20
}

.booking-form::before {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    background: rgba(0, 0, 0, 0.7);
    z-index: -1
}

.booking-form .form-header {
    text-align: center;
    position: relative;
    margin-bottom: 30px
}

.booking-form .form-header h1 {
    font-weight: 700;
    text-transform: capitalize;
    font-size: 42px;
    margin: 0px;
    color: #fff
}

.booking-form .form-group {
    position: relative;
    margin-bottom: 30px
}

.booking-form .form-control {
    background-color: rgba(255, 255, 255, 0.2);
    height: 60px;
    padding: 0px 25px;
    border: none;
    border-radius: 40px;
    color: #fff;
    -webkit-box-shadow: 0px 0px 0px 2px transparent;
    box-shadow: 0px 0px 0px 2px transparent;
    -webkit-transition: 0.2s;
    transition: 0.2s
}

.booking-form .form-control::-webkit-input-placeholder {
    color: rgba(255, 255, 255, 0.5)
}

.booking-form .form-control:-ms-input-placeholder {
    color: rgba(255, 255, 255, 0.5)
}

.booking-form .form-control::placeholder {
    color: rgba(255, 255, 255, 0.5)
}

.booking-form .form-control:focus {
    -webkit-box-shadow: 0px 0px 0px 2px #ff8846;
    box-shadow: 0px 0px 0px 2px #ff8846
}

.booking-form input[type="date"].form-control {
    padding-top: 16px
}

.booking-form input[type="date"].form-control:invalid {
    color: rgba(255, 255, 255, 0.5)
}

.booking-form input[type="date"].form-control+.form-label {
    opacity: 1;
    top: 10px
}

.booking-form select.form-control {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.booking-form select.form-control:invalid {
    color: rgba(255, 255, 255, 0.5)
}

.booking-form select.form-control+.select-arrow {
    position: absolute;
    right: 15px;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 32px;
    line-height: 32px;
    height: 32px;
    text-align: center;
    pointer-events: none;
    color: rgba(255, 255, 255, 0.5);
    font-size: 14px
}

.booking-form select.form-control+.select-arrow:after {
    content: '\279C';
    display: block;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg)
}

.booking-form select.form-control option {
    color: #000
}

.booking-form .form-label {
    position: absolute;
    top: -10px;
    left: 25px;
    opacity: 0;
    color: #ff8846;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.3px;
    height: 15px;
    line-height: 15px;
    -webkit-transition: 0.2s all;
    transition: 0.2s all
}

.booking-form .form-group.input-not-empty .form-control {
    padding-top: 16px
}

.booking-form .form-group.input-not-empty .form-label {
    opacity: 1;
    top: 10px
}

.booking-form .submit-btn {
    color: #fff;
    background-color: #e35e0a;
    font-weight: 700;
    height: 60px;
    padding: 10px 30px;
    width: 100%;
    border-radius: 40px;
    border: none;
    text-transform: uppercase;
    font-size: 16px;
    letter-spacing: 1.3px;
    -webkit-transition: 0.2s all;
    transition: 0.2s all
}

.booking-form .submit-btn:hover,
.booking-form .submit-btn:focus {
    opacity: 0.9
}
scr ="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"

</style>