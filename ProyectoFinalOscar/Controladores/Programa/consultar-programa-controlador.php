<?php
		require_once '../../Modelos/programa-modelo.php';
		$objUsuario = new Programa();
		$r1=$objUsuario->consultarNombreUsuario();
		$mensaje = '';
		if ($r1['estatus']) { //verificamos si se ejecuto correctamente el metodo del modelo
			require_once '../../Vistas/Programa/cargar-vista.php';
		}else{//si hay un error al consultar
			$mensaje = 'Error al consultar el Usuario, contacte con el soporte';
			require_once '../../Vistas/mensaje-vista.php';
		}
?>