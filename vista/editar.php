<?php
 

require_once "../controlador/controlador.usuarios.php";

if(isset($_GET["id"])){

	
	$datos = $_GET["id"];

	$usuarios = ControladorUsuarios::contrConsultaUsuario($datos);
    

}


?>

<html>

<head>
  <title>Registro de Usuarios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/64999b8509.js" crossorigin="anonymous"></script>
</head>

<body>


  
  
  <div class="d-flex justify-content-center text-center">
  
  <form id="frmAgregar" role="form" method="POST" enctype="multipart/form-data">

  <h1 class="bg-info text-center">Edición</h1>
    
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default">NOMBRE</span>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nombre" placeholder="Nombre" required value="<?php echo $usuarios["nombre"]; ?>">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default">APELLIDO</span>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="apellido" placeholder="Apellido" required value="<?php echo $usuarios["apellido"]; ?>">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default">EMAIL</span>
      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" placeholder="Email" required value="<?php echo $usuarios["email"]; ?>">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="inputGroup-sizing-default">CONTRASEÑA</span>
      <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="pass" placeholder="Pass">
      <input type="hidden" name="passactual" value="<?php echo $usuarios["pass"]; ?>">
      <input type="hidden" value="<?php echo $usuarios["idusuarios"]; ?>" name="id">
    </div>
    
    <?php
    
    $actualizar = new ControladorUsuarios();
		$actualizar -> ctrActualizarUsuario();

		

		?>

    <button type="submit" name="ingresar" class="btn btn-info"><i class="fa-solid fa-pen-to-square"> Actualizar</i></button>

  </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>