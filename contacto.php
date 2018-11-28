<?php 

	$enviado = false;
	$errores = '';

	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ct'])){

		if(!empty($_POST['name'])){
			$nombre = $_POST['name'];
			$nombre = cleanDates($nombre);
		}else{
			$errores = 'Debes introducir un Nombre' . '<br />';
		}

		if(!empty($_POST['email'])){
			$correo = $_POST['email'];
			if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
				$correo = cleanDates($correo);
			}else{
				$errores .= 'Introduce un email valido' . '<br />';
			}
		}else{
			$errores .= 'Debes introducir un Email' . '<br />';
		}

		if(!empty($_POST['asunto'])){
			$asunto = $_POST['asunto'];
			$asunto = cleanDates($asunto);
		}else{
			$asunto = 'No se ha especificado un asunto';
		}

		if(!empty($_POST['message'])){
			$mensaje = $_POST['message'];
			$mensaje = cleanDates($mensaje);
		}else{
			$mensaje = 'El usuario no ha dejado un mensaje';
		}

		if(empty($errores)){
		    $from = "no-reply@hotelharmonie.com.ar";
		    $to = "santiagoiamarino@gmail.com";
		    $subject = "$asunto \n";
		    $mensaje_preparado = "De: $nombre \n";
			$mensaje_preparado .= "Correo: $correo \n";
			$mensaje_preparado .= "Mensaje: " . $mensaje;
		    $headers = "From:" . $from;

		    mail($to,$subject,$mensaje_preparado, $headers);

		    $enviado = true;
		}
	}


 ?>