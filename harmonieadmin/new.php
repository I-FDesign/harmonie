<?php session_start();
	if(!isset($_SESSION['hm_user']) && $_SESSION['hm_user'] !== 'admin' ){
		header('Location: ../');
	}
	require '../admin/functions.php';
	$errores = '';
	$enviado = false;
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(!empty($_POST['titulo']) && !empty($_POST['titulo']) && !empty($_POST['clase']) && !empty($_FILES['img']['name'])){

			$thumb = $_FILES['img'];
			$extension = pathinfo($thumb['name'],PATHINFO_EXTENSION);
			if($extension == 'png' or $extension == 'jpg' or $extension == 'gif'){
				
			}else{
				$errores .= 'Ingresa una imagen valida' . '<br />';
			}
			$descripcion = $_POST['descripcion'];
			if(empty($errores)){
				$conexion = conect();
				$statement = $conexion->prepare('INSERT INTO sust(titulo, cont, img, clase) VALUES(:titulo, :cont, :img, :clase)');
				$statement->execute(array(
					':titulo' => $_POST['titulo'],
					':cont' => $descripcion,
					':img' => $_FILES['img']['name'],
					':clase' => $_POST['clase']
				));

				$directorio = '../img/' . $thumb['name'];
				move_uploaded_file($thumb['tmp_name'], $directorio);
				$enviado = true;
			}
		}else{
			$errores .= 'Completa los campos requeridos';
		}
	}
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Añadir un articulo</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="content">
		<h2>Añadir un articulo</h2>
		<div class="form">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post' enctype="multipart/form-data">
				<input type="text" name='titulo' placeholder="Ingresa un Titulo">
				<textarea name='descripcion' placeholder="Ingresa una descripcion"></textarea>
				<div class="select">
					<label for="cl">Selecciona una Clase</label>
					<select id='cl' name='clase'>
						<option value='sep'>Separación de residuos</option>
						<option value='comp'>Compostaje</option>
						<option value='huerta'>Huerta</option>
						<option value='efi'>Eficiencia energética</option>
					</select>
				</div>
				<input type="file" name="img">
				<?php if(!empty($errores)): ?>
					<p style='color:red; text-align: center; margin-top: 20px'><?php echo $errores; ?></p>
				<?php endif; ?>
				<?php if($enviado === true): ?>
					<p style='color:#1A9E0C; text-align: center; margin-top: 20px'>Articulo añadido correctamente</p>
				<?php endif; ?>
				<input type="submit" name="env" value='Añadir articulo'>
			</form>
		</div>
	</div>
</body>
</html>