<?php session_start();
	
	if(isset($_SESSION['hm_user'])){
		header('Location: ../');
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if($_POST['user'] == 'admin' && $_POST['pass'] == 'Harmonie85'){
			$_SESSION['hm_user'] = $_POST['user'];
			header('Location: ../');
		}else{
			$errores = 'Usuario incorrecto';
		}
	}
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Administrador</h2>
	<form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method='post'>
		<input class='inp' type="text" placeholder="Usuario" name='user'>
		<input class='inp' type="password" placeholder="Contraseña" name='pass'>
		<input type="submit" value='Ingresá'>
		<?php if(!empty($errores)): ?>
			<p style='color:red; text-align: center; margin-top: 20px'><?php echo $errores ?></p>
		<?php endif; ?>
	</form>
</body>
</html>