<?php session_start();

	$enviado = false;
	$errores = '';

	require '../../admin/functions.php';

	if(!isset($_SESSION['hm_user'])){
		header('Location: ../../');
	}

	$id = (isset($_GET['id']) && is_numeric($_GET['id'])) ? $_GET['id'] : 1;

	$conexion = conect();

	$statement = $conexion->prepare('SELECT * FROM ifutil WHERE id= :id');;
	$statement->execute(array(':id' => $id));
	$resultados = $statement->fetch();

	if(!$resultados){
		$statement = $conexion->prepare('SELECT * FROM sust WHERE id= :id');;
		$statement->execute(array(':id' => $id));
		$resultados = $statement->fetch();
	}


	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(!empty($_POST['titulo']) && !empty($_POST['titulo']) && !empty($_POST['clase']) && !empty($_FILES['img']['name'])){

			$thumb = $_FILES['img'];
			$extension = pathinfo($thumb['name'],PATHINFO_EXTENSION);
			if($extension == 'png' or $extension == 'jpg' or $extension == 'gif' or $extension == 'jpeg'){
				
			}else{
				$errores .= 'Ingresa una imagen valida' . '<br />';
			}
			$descripcion = $_POST['descripcion'];
			$id= $_POST['id'];
			if(empty($errores && !isset($_GET['t']))){
				$conexion = conect();
				$statement = $conexion->prepare('UPDATE sust SET titulo = :titulo, cont= :cont, img= :img, clase= :clase WHERE id = :id');
				$statement->execute(array(
					':titulo' => $_POST['titulo'],
					':cont' => $descripcion,
					':img' => $_FILES['img']['name'],
					':clase' => $_POST['clase'],
					':id' => $id
				));

				$directorio = '../../sustentabilidad/img/' . $thumb['name'];
				move_uploaded_file($thumb['tmp_name'], $directorio);
				$enviado = true;
			}

			if(empty($errores && isset($_GET['t']))){
				$conexion = conect();
				$statement = $conexion->prepare('UPDATE ifutil SET titulo = :titulo, cont= :cont, img= :img, clase= :clase WHERE id = :id');
				$statement->execute(array(
					':titulo' => $_POST['titulo'],
					':cont' => $descripcion,
					':img' => $_FILES['img']['name'],
					':clase' => $_POST['clase'],
					':id' => $id
				));

				$directorio = '../../infoutil/img/' . $thumb['name'];
				move_uploaded_file($thumb['tmp_name'], $directorio);
				header('Location: ../../');
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
	<title>Edita un articulo</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
	<div class="content">
		<h2>Añadir un articulo</h2>
		<div class="form">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post' enctype="multipart/form-data">
				<input type="hidden" name="id" value='<?php echo $resultados['id']; ?>'>
				<input type="text" name='titulo' placeholder="Ingresa un Titulo" value='<?php echo $resultados['titulo']; ?>'>
				<textarea name='descripcion' placeholder="Ingresa una descripcion"><?php echo $resultados['cont'] ?></textarea>
				<div class="select">
					<label for="cl">Selecciona una Clase</label>
					<select id='cl' name='clase'>
						<option value='sep'>Separación de residuos</option>
						<option value='comp'>Compostaje</option>
						<option value='huerta'>Huerta</option>
						<option value='efi'>Eficiencia energética</option>
						<option value='llegar'>Cómo llegar</option>
						<option value='paseos'>Paseos</option>
						<option value='fest'>Fiestas y eventos</option>
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