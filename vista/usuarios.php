<?php
$email=$_POST['email'];
$contraseña=$_POST['pass'];

session_star();
$_SESSION['email']=$email;

$conexion=mysqli_connect("localhost", "root", "", "wiamweb");
$sqlconsulta="SELECT * FROM cliente where usuario_cliente ='$email' and contraseña_cliente = '$contraseña'";
$resultado = mysqli_query($conexion,$sqlconsulta);
$filas=mysqli_num_rows($resultados);
if ($filas){
    echo "<script>alert('Sesión correctamente inicada');</script>";
    header("location:../pagina/index.php");
} else {
    ?>
    <?php
     echo "<script>alert('Error al iniciar sesión');</script>";
     header("location:login.php");
}
mysqli_free_result($resultado);
mysqli_class($conexion);

?> 


<?php
require_once "../controlador/controlador.usuarios.php";

//Proceso para llenar la tabla con datos de los usuario de la BDD

$usuario = ControladorUsuarios::contrConsultaUsuarios();
if (empty($usuario)) {
    echo "No hay registro de usuario</td>";
}
?>
<html>

<head>
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/64999b8509.js" crossorigin="anonymous"></script>

</head>

<body>
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

                                <a href="editar.php<?php echo $columna["idusuarios"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                

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