<?php session_start();

	require '../../admin/functions.php';

	if(!isset($_SESSION['hm_user'])){
		header('Location: ../../');
	}

	$conexion= conect();

	$statement = $conexion->prepare('SELECT * FROM sust');;
	$statement->execute();
	$resultados_s = $statement->fetchAll();

	$statement = $conexion->prepare('SELECT * FROM ifutil');;
	$statement->execute();
	$resultados_i = $statement->fetchAll();


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Articulos</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h2>Articulos</h2>
	<div class="articulos">
		<?php foreach($resultados_s as $articulo): ?>
			<div class="articulo">
				<h3><?php echo $articulo['titulo']; ?></h3>
				<div class="content">
					<div class="img">
						<img src="../../sustentabilidad/img/<?php echo $articulo['img'] ?>" alt="">
					</div>
					<div class="info">
						<p><?php echo $articulo['cont'] ?></p>
					</div>
				</div>
				<div class="btns">
					<a href="edit.php?id=<?php echo $articulo['id'] ?>">Editar</a>
					<a href="borrar.php?id=<?php echo $articulo['id'] ?>">Borrar</a>
				</div>
			</div>
		<?php endforeach; ?>

		<?php foreach($resultados_i as $articulo): ?>
			<div class="articulo">
				<h3><?php echo $articulo['titulo']; ?></h3>
				<div class="content">
					<div class="img">
						<img src="../../infoutil/img/<?php echo $articulo['img'] ?>" alt="">
					</div>
					<div class="info">
						<p><?php echo $articulo['cont'] ?></p>
					</div>
				</div>
				<div class="btns">
					<a href="edit.php?t=if&id=<?php echo $articulo['id'] ?>">Editar</a>
					<a href="borrar.php?t=if&id=<?php echo $articulo['id'] ?>">Borrar</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</body>
</html>