<?php

require_once "../modelo/modelo.usuarios.php";

class ControladorUsuarios
	{
		
		static public function contrConsultaUsuarios()
		{
			$respuesta = ModeloUsuarios::ConsultaUsuarios();

			return $respuesta;
		}
		static public function contrConsultaUsuario($datos)
		{
			$respuesta = ModeloUsuarios::ConsultaUsuario($datos);

			return $respuesta;
		}

		static public function contrInsertarUsuarios($datos)
		{
			// 0 = idusuarios, 1 = nombre, 2 = apellido, 3 = email, 4 = password
			if(!empty($datos[0])&&!empty($datos[1])&&!empty($datos[2])&&!empty($datos[3])){

				

				$datos1=array($datos[0],$datos[1],$datos[2],$datos[3]);

				$respuesta = ModeloUsuarios::InsertarUsuarios($datos1);
				
			}else
				$respuesta ="vacio";

			return $respuesta;
		}	

		public function contrIngresarUsuarios($datos)
		{
			
			if(isset($datos[0]))
			{
				$respuesta = ModeloUsuarios::loginUsuarios($datos);
				if ($respuesta == FALSE)
				/*	echo "El usuario o contraseña ingresados no han sido encontrados";
				else
					echo "inicio de sesión correcto";*/
					{
						echo '<script>
		
							if ( window.history.replaceState ) {
		
								window.history.replaceState( null, null, window.location.href );
		
							}
		
						</script>';
						echo '<div class="alert alert-danger">Error al ingresar al sistema, el email o la contraseña no coinciden</div>';
					} else
					{
						
						$_SESSION["validarIngreso"] = "ok";

						echo '<script>
		
							if ( window.history.replaceState ) {
		
								window.history.replaceState( null, null, window.location.href );
		
							}
		
							window.location = "index.php?pagina=usuarios";
		
						</script>';
		
					}

			}
			

				
		}	

		//Eliminar Usuarios
		public function crtEliminarUsuarios()
		{	
			if(isset($_POST["eliminarUsuario"]))
			{

				
				$datos = $_POST["eliminarUsuario"];
	
				
				$respuesta = ModeloUsuarios::EliminarUsuarios($datos);
	
				if($respuesta == "ok")
				{
	
					echo '<script>
	
						if ( window.history.replaceState )
						{
	
							window.history.replaceState( null, null, window.location.href );
	
						}
	
						window.location = "../vista/usuarios.php";
	
					</script>';
				}
			}
		}

public function ctrActualizarUsuario(){

		if(isset($_POST["nombre"])){

			if($_POST["pass"] != ""){			

				$pass = $_POST["pass"];

			}else{

				$pass = $_POST["passactual"];
			}

			$datos = array( "id" => $_POST["id"],
						   "nombre" => $_POST["nombre"],
						   "apellido" => $_POST["apellido"],
						   "email" => $_POST["email"],
						   "pass" => $pass);

			$respuesta = ModeloUsuarios::ActualizarUsuario($datos);

			if($respuesta == "ok"){

				echo '<script>
	
				if ( window.history.replaceState ) {
	
					window.history.replaceState( null, null, window.location.href );
	
				}
	
				</script>';
	
				echo '<div class="alert alert-success">El usuario ha sido actualizado</div>';
	
			}

		}


	}

	}	
?>




