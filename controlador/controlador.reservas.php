<?php
require_once "../modelo/modelo.reservas.php";

class ControladorReservas
	{
		
		static public function contrConsultaUReservas()
		{
			$respuesta = ModeloReservas::ConsultaReservas();

			return $respuesta;
		}

		static public function contrInsertarReservass($datos)
		{
			// 0 = nombre_reservante, 1 = fecha_reserva, 2 = hora_reserva, 3 = N°_mesa_reserva, 4 = N°_ninos, 5 = N°_adultos
			if(!empty($datos[0])&&!empty($datos[1])&&!empty($datos[2])&&!empty($datos[3])&&!empty($datos[4])&&!empty($datos[5])){

				

				$datos1=array($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5]);

				$respuesta = ModeloReservas::InsertarReservas($datos1);
			}else
				$respuesta ="vacio";

			return $respuesta;
		}	

		public function contrIngresarReservas($datos)
		{
			
			if(isset($datos[0]))
			{
				$respuesta = ModeloReservas::loginUsuarios($datos);
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



    }
        
?>