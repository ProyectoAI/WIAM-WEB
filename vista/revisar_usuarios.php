<?php
$email=$_POST['email'];
$contraseña=$_POST['pass'];

session_start();
$_SESSION['email']=$email;

$conexion=mysqli_connect("localhost", "root", "", "wiamweb");
$sqlconsulta="SELECT * FROM usuarios where email ='$email' and pass = '$contraseña'";
$resultado = mysqli_query($conexion,$sqlconsulta);
$filas=mysqli_num_rows($resultado);
if ($filas){
    echo "<script>alert('Sesión correctamente inicada');</script>";
    header("location:../index.php");
} else {
    ?>
    <?php
     echo "<script>alert('Error al iniciar sesión');</script>";
     header("location:login.php");
}
mysqli_free_result($resultado);
mysqli_class($conexion);

?> 