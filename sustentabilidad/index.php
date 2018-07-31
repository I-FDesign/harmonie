<?php session_start();

	require '../admin/functions.php'; 
 	require 'sust.php';
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sustentabilidad - Harmonie</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<script src="https://use.fontawesome.com/2d83eb3d68.js"></script>
	<link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body style='background: url("../img/footerm.png");'>
	<?php require '../back.php' ?>
	<section class="main" style='padding-top:40px; background:none'>
		<div class="sustentabilidad" style='border-bottom: none;'>
			<h2 style='width:90%; margin:0 auto; padding-bottom:9px;border-bottom: 1px solid rgba(0,0,0,.3)'>Sustentabilidad</h2>
			<?php if(isset($_SESSION['hm_user']) && $_SESSION['hm_user'] == 'admin'): ?>
					<a href="harmonieadmin/new.php">Añadir contenido</a>
			<?php endif; ?>
				<div class="sep">
					<h3>Separación de residuos</h3>
					<div class="articulos">
						<?php foreach($resultados as $articulo): ?>
							<div class="articulo">
								<h4><?php echo $articulo['titulo'] ?></h4>
								<p><?php echo $articulo['cont'] ?></p>
								<p>Con el objetivo de reducir la cantidad de basura producida por el hotel se realiza un programa de divulgación sobre la generación de residuos a través de placas informativas, con el fin de conseguir cambios en las prácticas de adquisición y consumo.</p>
								<div class="img">
									<img src="img/<?php echo $articulo['img'] ?>">
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			<?php if(!empty($compostaje)) :?>
				<div class="comp">
					<h3>Compostaje</h3>
					<div class="articulos">
						<?php foreach($compostaje as $articulo): ?>
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
			<?php if(!empty($huerta)): ?>
				<div class="huerta">
					<h3>Huerta</h3>
					<div class="articulos">
						<?php foreach($huerta as $articulo): ?>
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
			<?php if(!empty($eficiencia)): ?>
				<div class="efi">
					<h3>Eficiencia energética</h3>
					<div class="articulos">
						<?php foreach($huerta as $articulo): ?>
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
	</section>
	<script type="text/javascript" src='../js/jquery-3.1.1.min.js'></script>
	<script type="text/javascript">
		$('.click').on('click', function(){
			location.href = '../';
		});
	</script>
</body>
</html>