<?php session_start();
	require 'admin/functions.php';
 	require 'sust.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Harmonie - hotel de montaña</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans+Condensed:300" rel="stylesheet"> 
	<script src="https://use.fontawesome.com/2d83eb3d68.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
	<header>
		<img src="img/thumb.jpg">
		<div class="menu" id='menu'>
			<div class="content">
				<div class="logo">
					<img src="img/logo.jpg">
				</div>
				<nav>
					<a href="#" >HOTEL</a>
					<a href="#" class='habitaciones_btn'>HABITACIONES</a>
					<a href="#" class='sust-btn'>SUSTENTABILIDAD</a>
					<a href="#" class='if-btn'>INFO ÚTIL</a>
					<a href="#" class='contact_btn'>CONTACTO</a>
				</nav>
			</div>
		</div>
		<div class="menu-mobile" id='menu_mobile'>
			<div class="content">
				<div class="logo">
					<img src="img/logo.jpg">
				</div>
				<div class="menu-btn" id='menu-btn'>
					<p>MENU</p>
					<i class="fa fa-bars" aria-hidden="true" id='show-menu'></i>
				</div>
			</div>
		</div>
		<div class="nav" id='nav'>
			<nav>
				<a href="#" >HOTEL</a>
				<a href="#" class='habitaciones_btn'>HABITACIONES</a>
				<a href="#" class='sust-btn'>SUSTENTABILIDAD</a>
				<a href="#" class='if-btn'>INFO ÚTIL</a>
				<a href="#" class='contact_btn'>CONTACTO</a>
			</nav>
		</div>
	</header>
	<section class="main">
		<div class="content">
			<div class="info">
				<article>
					<h1>Harmonie hotel de montaña</h1>
					<p>Intimidad, calidez  y momentos de relajación para nuestros huéspedes. 
					Harmonie hotel de montaña, se ubica en el ingreso principal de Villa General Belgrano, al pie del Cerro de la Virgen con una inmejorable vista a las sierras cordobesas dentro de un entorno único y cautivador que permite disfrutar de momentos únicos.
					</p>
					<div class="imgs">	
						<div class="img"><img src="img/info1.JPG" alt=""></div>
						<div class="img"><img src="img/info2.JPG" alt=""></div>
						<div class="img"><img src="img/info3.JPG" alt=""></div>
						<div class="img"><img src="img/info4.jpg" alt=""></div>
						<div class="img"><img src="img/info5.jpg" alt=""></div>
						<div class="img"><img src="img/info6.jpg" alt=""></div>
					</div>
				<div class="our-services">
					<article>
						<h2>Nuestros Servicios</h2>
						<ul>
							<li>Aire acondicionado.</li>
							<li>Habitaciones de 35 m2.</li>
							<li>Wi Fi de excelente conexión en todo el complejo.</li>
							<li>Televisores LCD en habitaciones.</li>
							<li>Frigobar.</li>
							<li>Cofre de seguridad y alarma.</li>
							<li>Quincho y asadores.</li>
							<li>Cocheras cubiertas.</li>
							<li>Living y espacios comunes de diseño sofisticado.</li>
							<li>Recepción hasta las 22 hs (atención telefónica 24 hs)</li>
							<li>Check in desde las 14 hs hasta las 21:30 hs</li>
							<li>Check out hasta las 10 hs.</li>
							<li>Practicuna y bañera portatil sin cargo extra.</li>
							<li>Desayuna buffet.</li>
							<li>Piscina exterior climatizada (en temporada de verano).</li>
							<li>Solarium y deck con reposeras.</li>
							<li>Servicio de masajes en la habitación.</li>
							<li>
							Habitación con baño adaptado para personas con movilidad reducida.
							<i class="fa fa-wheelchair" aria-hidden="true"></i>
							</li>
						</ul>
					</article>
				</div>
				</article>
			</div>
			<div class="habitaciones">
				<article>
					<h2>Habitaciones</h2>
					<p>Las habitaciones de nuestro hotel han sido diseñadas por profesionales de la decoración para transmitirle a nuestros clientes una sensación de armonía y calidez brindando un descanso único y un disfrute acorde a nuestra hermosa Villa.
					</p>
					<p class='second'>
					Diseñado para recibir a huéspedes exigentes que buscan un ambiente cálido, agradable y sereno para descansar
					de las actividades diarias de la ciudad brindándoles un contacto íntimo con la naturaleza.
					</p>
				</article>
				<div class="hab-options">
					<div class="hab">
						<div class="img">
							<img src="img/doble.jpg">
						</div>
						<div class="under">
							<p class="room">ROOM</p>
							<div class="arrow">
								<i class="fa fa-angle-right" aria-hidden="true"></i>

							</div>
						</div>
						<div class="title">
							<h2>Habitacion Doble</h2>
						</div>
						<div class="hab-info">
							<div class="mts">
								<i class="fa fa-home" aria-hidden="true"></i>
								<p>35 mt2</p>
							</div>
							<div class="bed">
								<i class="fa fa-bed" aria-hidden="true"></i>
								<p>Cama queen</p>
							</div>
							<div class="bathroom">
								<i class="fa fa-bath" aria-hidden="true"></i>
								<p>1 Baño</p>
							</div>
							<div class="view">
								<i class="fa fa-eye" aria-hidden="true"></i>
								<p>Vista al jardín</p>
							</div>
							<div class="tv">
								<i class="fa fa-television" aria-hidden="true"></i>
								<p>TV LCD</p>
							</div>
						</div>
					</div>
					<div class="hab">
						<div class="img">
							<img src="img/triple.jpg">
						</div>
						<div class="under">
							<p class="room">ROOM</p>
							<div class="arrow">
								<i class="fa fa-angle-right" aria-hidden="true"></i>

							</div>
						</div>
						<div class="title">
							<h2>Habitacion Triple</h2>
						</div>
						<div class="hab-info">
							<div class="mts">
								<i class="fa fa-home" aria-hidden="true"></i>
								<p>35 mt2</p>
							</div>
							<div class="bed">
								<i class="fa fa-bed" aria-hidden="true"></i>
								<p>1 Cama queen & 1 Cama Individual</p>
							</div>
							<div class="bathroom">
								<i class="fa fa-bath" aria-hidden="true"></i>
								<p>1 Baño</p>
							</div>
							<div class="view">
								<i class="fa fa-eye" aria-hidden="true"></i>
								<p>Vista al jardín</p>
							</div>
							<div class="tv">
								<i class="fa fa-television" aria-hidden="true"></i>
								<p>TV LCD</p>
							</div>
						</div>
					</div>
					<div class="hab last">
						<div class="img">
							<img src="img/cuadruple.jpeg">
						</div>
						<div class="under">
							<p class="room">ROOM</p>
							<div class="arrow">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
							</div>
						</div>
						<div class="title">
							<h2>Apartamento Cuadrúple</h2>
						</div>
						<div class="hab-info">
							<div class="mts">
								<i class="fa fa-home" aria-hidden="true"></i>
								<p>50 mt2</p>
							</div>
							<div class="bed">
								<i class="fa fa-bed" aria-hidden="true"></i>
								<p>1 Cama queen & 2 Cama Individual</p>
							</div>
							<div class="bathroom">
								<i class="fa fa-bath" aria-hidden="true"></i>
								<p>1 Baño</p>
							</div>
							<div class="view">
								<i class="fa fa-eye" aria-hidden="true"></i>
								<p>Vista al jardín</p>
							</div>
							<div class="tv">
								<i class="fa fa-television" aria-hidden="true"></i>
								<p>TV LCD</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sustentabilidad">
				<article>
					<h2>Sustentabilidad</h2>
					<p>Harmonie hotel de montaña es una emprendimiento comprometido desde sus orígenes en el cuidado del medioambiente y del entorno donde desarrolla sus actividades.</p>
					<p>En nuestro hotel proponemos al turista que haga un uso responsable de los recursos, concientizando sobre el impacto de cada actividad. Lo invitamos a sumarse a la separación de residuos y posterior compostaje de residuos orgánicos, poniendo nuestra huerta a su disposición.</p>
				</article>
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
			<?php require 'contacto.php' ?>

			<div class="contacto">
				<h2>Consultas y Contacto</h2>
				<div class="form">
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='post'>
						<div class="name">
							<label for="name">Nombre (requerido)</label>
							<input type="text" id='name' name="name">
						</div>
						<div class="email">
							<label for="email">Tu correo electrónico (requerido)</label>
							<input type="text" id='email' name="email">
						</div>
						<div class="asunto">
							<label for="asunto">Asunto</label>
							<input id='asunto' type="text" name="asunto">
						</div>
						<div class="mensaje">
							<label for="mensaje">Mensaje</label>
							<textarea name='message' id='mensaje'></textarea>
						</div>

						<?php if(!empty($errores)): ?>
							<p class='error'><?php echo $errores; ?></p>
						<?php endif; ?>

						<?php if($enviado === true): ?>
							<p class='env'>Mensaje enviado correctamente.</p>
						<?php endif; ?>
						<input type="submit" name="ct" value='Enviar'>
					</form>
					<p class='if'>Manuel Paguaga 85 – 5194 Villa General Belgrano – Sierras Córdoba</p>
					<p class='if'>info@hotelharmonie.com.ar – www.hotelharmonie.com.ar</p>
				</div>
			</div>
			<div class="location">
				<h2>Ubi<span>ca</span>ción</h2>
				<p class="ub-info">Manuel Paguaga 85 - 5194 Villa General Belgrano - Sierras de Córdoba - Argentina </p>
				<p class='ub-1'>Harmonie hotel de montaña, se encuentra emplazado a 500 metros del centro comercial de Villa General Belgrano, en la puerta del principal acceso al pueblo rodeado de un entorno único y cautivador.
				</p>
				<p>
					Ubicado en la base de las sierras chicas del valle de Calamuchita, debajo de nuestra virgen que es visitada por miles de turistas todos los años que buscan llegar al punto panorámico apreciando el cerro Champaquí en el poniente.
				</p>
				<div class="map">
					<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8213.70382585048!2d-64.55536770392442!3d-31.98294625168274!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e4beaba838edd20!2sHarmonie+Hotel+Boutique!5e1!3m2!1ses-419!2sar!4v1502972405397" width="800" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="img-footer">
			<img src="img/footerm.png" alt="">
		</div>
		<div class="footer-if">
			<h2>Harmonie ho<span>tel</span> de montaña</h2>
			<p class="hotel-if">Villa General Belgrano - Córdoba</p>
			<div class="icons">
				<div class="ubicacion">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<p>Manuel Paguaga 85 - 5194 Villa General</p>
					<p class='sites'>Belgrano - Córdoba - Argentina</p>
				</div>
				<div class="tel">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<p>(+54) 03546 - 463805 / 06</p>
				</div>
				<div class="ft-mail">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<p>info@hotelharmonie.com.ar</p>
				</div>
			</div>
			<div class="des-by">
				<p>2018 Harmonie hotel de montaña. all right reserve.</p>
				<p>Harmonie hotel: <span>www.hotelharmonie.com.ar</span>. Designed by <span>I&F Design</span></p>
			</div>
		</div>
	</footer>
	<div class="fixed">
		<div class="call">
			<a href="tel:03546463805"><i class="fa fa-phone" aria-hidden="true"></i></a>
		</div>
		<div class="calendar">
			<a href="http://www.alojasoft.com/reservas/disponibilidadcristal.php?quehotel=1010"><i class="fa fa-calendar" aria-hidden="true"></i></a>
		</div>
	</div>
	<script type="text/javascript" src='js/jquery-3.1.1.min.js'></script>
	<script type="text/javascript" src='js/application.js'></script>
</body>
</html>

