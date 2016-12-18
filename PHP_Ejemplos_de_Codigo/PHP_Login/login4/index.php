<?php
	include_once ("login.php");
	include_once ("menu.php");
	include_once ("seguridad.php");
	
	
	if (!isset($_REQUEST["do"]))
		$accion = "mostrarformulariologin";
	else
		$accion = $_REQUEST["do"];

    $s = new Seguridad();			// Capa de seguridad
		
	switch($accion) {
		case "mostrarformulariologin":
			$login = new Login();
			$login->showForm();
			break;
		case "checklogin":
			$login = new Login();
			$login->checkLogin();
			break;
		case "cerrarsesion":
			$s->cerrarSesion();
			echo "La sesión se ha cerrado correctamente<br/>";
			echo "<a href='index.php'>Volver al inicio</a>";
			break;

		case "showmenuadmin":
			if ($s->getTipoUsuario() == "admin") {
				$menu = new Menu();
				$menu->showMenuAdmin();
			}
			else
				echo "Operación no permitida<br/><a href='index.php'>Volver</a>";
			break;
			
		case "formanadirpelicula":
			if ($s->getTipoUsuario() == "admin")
				echo "Estoy en formulario añadir pelicula";
			else
				echo "Operación no permitida<br/><a href='index.php'>Volver</a>";
			break;
		case "anadirpelicula":
			if ($s->getTipoUsuario() == "admin")
				echo "Estoy en añadir pelicula";
			else
				echo "Operación no permitida<br/><a href='index.php'>Volver</a>";
			break;

		case "formborrarpelicula":
			if ($s->getTipoUsuario() == "admin")
				echo "Estoy en FORMULARIO BORRAR pelicula";
			else
				echo "Operación no permitida<br/><a href='index.php'>Volver</a>";
			break;
		case "borrarpelicula":
			if ($s->getTipoUsuario() == "admin")
				echo "Estoy en BORRAR pelicula";
			else
				echo "Operación no permitida<br/><a href='index.php'>Volver</a>";
			break;
			
	}
	
?>	