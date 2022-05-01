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
<?php
require_once "../controlador/controlador.usuarios.php";

//Proceso para llenar la tabla con datos de los usuario de la BDD

$usuario = ControladorUsuarios::contrConsultaUsuarios();
if (empty($usuario)) {
    echo "No hay registro de usuario</td>";
}
?>

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


                      
                        </li>
                    </ul>
                    <form class="d-flex">
                        
                    </form>
                </div>
            </div>
        </nav>

<html>

<head>
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/64999b8509.js" crossorigin="anonymous"></script>

</head>

<body>
    <body style="background: url('../mario.jpg') no-repeat; background-size: cover;"> 
        
    </body>
    <h1 class="text-center">Lista de Usuarios</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Contraseña</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuario as $fila => $columna) : ?>
                <tr>

                    <td><?php echo $columna["idusuarios"] ?></td>
                    <td><?php echo $columna["nombre"] ?></td>
                    <td><?php echo $columna["apellido"] ?></td>
                    <td><?php echo $columna["email"] ?></td>
                    <td><?php echo $columna["pass"] ?></td>
                    <td>
                        <div class="btn-group">
                            <div class="px-1">

                                <a href="editar.php?id=<?php echo $columna["idusuarios"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                

                            </div>

                            <form method="post">

                                <input type="hidden" value="<?php echo $columna["idusuarios"]; ?>" name="eliminarUsuario">

                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

                                <?php

                                $eliminar = new ControladorUsuarios();
                                $eliminar -> crtEliminarUsuarios();

                                ?>

                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>