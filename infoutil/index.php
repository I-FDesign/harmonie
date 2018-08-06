<?php session_start();

	require '../admin/functions.php'; 
 	require 'if.php';
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Info útil - Harmonie</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<script src="https://use.fontawesome.com/2d83eb3d68.js"></script>
	<link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
	<?php require '../back.php' ?>
	<section class="main" style='padding-top:40px; background:none'>
		<div class="sustentabilidad" style='border-bottom: none;'>
			<h2 style='width:90%; margin:0 auto; padding-bottom:9px;border-bottom: 2px solid rgb(245, 131, 10)'>Info útil</h2>
			<?php if(isset($_SESSION['hm_user']) && $_SESSION['hm_user'] == 'admin'): ?>
					<a href="../harmonieadmin/newif.php">Añadir contenido</a>
					<a href="../harmonieadmin/articulos">Articulos</a>
			<?php endif; ?>
	
			<?php if(!empty($llegar)) :?>
				<div class="comp">
					<h3>Cómo llegar</h3>
					<div class="articulos">
						<?php foreach($llegar as $articulo): ?>
						<div class="articulo">
							<h4><?php echo $articulo['titulo'] ?></h4>
							<p><?php echo $articulo['cont'] ?></p>
							<div class="img">
								<img src="img/<?php echo $articulo['img'] ?>">
							</div>
						</div>
					<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if(!empty($paseos)): ?>
				<div class="huerta">
					<h3>Paseos</h3>
					<div class="articulos">
						<?php foreach($paseos as $articulo): ?>
							<div class="articulo">
								<h4><?php echo $articulo['titulo'] ?></h4>
								<p><?php echo $articulo['cont'] ?></p>
								<div class="img">
									<img src="img/<?php echo $articulo['img'] ?>">
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if(!empty($fest)): ?>
				<div class="efi">
					<h3>Fiestas y Eventos</h3>
					<div class="articulos">
						<?php foreach($fest as $articulo): ?>
							<div class="articulo">
								<h4><?php echo $articulo['titulo'] ?></h4>
								<p><?php echo $articulo['cont'] ?></p>
								<div class="img">
									<img src="img/<?php echo $articulo['img'] ?>">
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<?php require '../bottom.php' ?>
	</section>
	<script type="text/javascript" src='../js/jquery-3.1.1.min.js'></script>
	<script type="text/javascript">
		$('.click').on('click', function(){
			location.href = '../';
		});
	</script>
</body>
</html>