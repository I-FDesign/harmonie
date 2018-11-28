<?php session_start();
	require 'admin/functions.php';
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
					<a href="#" class='hotel-btn'>HOTEL</a>
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
				<a href="#"  class='hotel-btn'>HOTEL</a>
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
						<div class="img"><img src="img/info1.jpg" alt="" id='info1'></div>
						<div class="img"><img src="img/info2.jpg" alt=""></div>
						<div class="img"><img src="img/info3.jpg" alt=""></div>
						<div class="img"><img src="img/info4.jpg" alt=""></div>
						<div class="img"><img src="img/info5.jpg" alt=""></div>
						<div class="img"><img src="img/info6.jpg" alt=""></div>
					</div>
					<div class="cover"></div>
					<div class="show-img">
						<div>
							<i class="fa fa-times" aria-hidden="true"></i>
							<img src="#" id='imgshow' alt="">
						</div>
					</div>
				<div class="our-services">
					<article>
						<h2>Nuestros Servicios</h2>
						<ul>
							<div>
								<li>Aire acondicionado frio/calor.</li>
								<li>Habitaciones de 35 m2.</li>
								<li>Wi Fi de excelente conexión en todo el complejo.</li>
								<li>Televisores LCD en habitaciones.</li>
								<li>Frigobar.</li>
								<li>Cofre de seguridad y alarma.</li>
								<li>Cocheras cubiertas.</li>
								<li>Living y espacios comunes de diseño.</li>
								<li>Recepción hasta las 22 hs (atención telefónica 24 hs)</li>
							</div>
							<div>
								<li>Check in desde las 14 hs hasta las 21:30 hs</li>
								<li>Check out hasta las 10 hs.</li>
								<li>Desayuno buffet.</li>
								<li>Piscina exterior climatizada (en temporada de verano).</li>
								<li>Solarium y deck.</li>
								<li>Servicio de masajes.</li>
								<li>
								Habitación con baño adaptado para personas con movilidad reducida.
								<i class="fa fa-wheelchair" aria-hidden="true"></i>
								</li>
							</div>
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
							<h2>Habitación Doble</h2>
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
								<p>Balcon con vista al jardín</p>
							</div>
							<div class="tv">
								<i class="fa fa-television" aria-hidden="true"></i>
								<p>TV LCD</p>
							</div>
							<div class="frigobar">
								<i class="fa fa-snowflake-o" aria-hidden="true"></i>
								<p>Frigobar</p>
							</div>
							<div class="split">
								<i class="fa fa-thermometer-half" aria-hidden="true"></i>
								<p>Split Frio/Calor</p>
							</div>
						</div>
						<div class="moreimgs">
							<div class="img">
								<div class="lupa">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
								<img src="img/doble2.jpeg" alt="">
							</div>
							<div class="img">
								<div class="lupa">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
								<img src="img/doble3.jpeg" alt="">
							</div>
							<div class="img">
								<div class="lupa">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
								<img src="img/doble4.jpeg" alt="">
							</div>
						</div>
					</div>
					<div class="hab">
						<div class="img">
							<img src="img/triple.jpeg">
						</div>
						<div class="under">
							<p class="room">ROOM</p>
							<div class="arrow">
								<i class="fa fa-angle-right" aria-hidden="true"></i>

							</div>
						</div>
						<div class="title">
							<h2>Habitación Triple</h2>
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
								<p>Balcon con vista al jardín</p>
							</div>
							<div class="tv">
								<i class="fa fa-television" aria-hidden="true"></i>
								<p>TV LCD</p>
							</div>
							<div class="frigobar">
								<i class="fa fa-snowflake-o" aria-hidden="true"></i>
								<p>Frigobar</p>
							</div>
							<div class="split">
								<i class="fa fa-thermometer-half" aria-hidden="true"></i>
								<p>Split Frio/Calor</p>
							</div>
						</div>
						<div class="moreimgs">
							<div class="img">
								<div class="lupa">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
								<img src="img/triple.jpeg" alt="">
							</div>
							<div class="img">
								<div class="lupa">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
								<img src="img/triple2.jpg" alt="">
							</div>
							<div class="img">
								<div class="lupa">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
								<img src="img/triple3.JPG" alt="">
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
							<h2>Apartamento Cuádruple</h2>
						</div>
						<div class="hab-info">
							<div class="mts">
								<i class="fa fa-home" aria-hidden="true"></i>
								<p>50 mt2</p>
							</div>
							<div class="bed">
								<i class="fa fa-bed" aria-hidden="true"></i>
								<p>1 Cama queen & 2 Camas Individuales</p>
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
							<div class="heladera">
								<i class="fa fa-snowflake-o" aria-hidden="true"></i>
								<p>Heladera</p>
							</div>
							<div class="split">
								<i class="fa fa-thermometer-half" aria-hidden="true"></i>
								<p>2 Split Frio/Calor</p>
							</div>
							<div class="kitchen">
								<i class="fa fa-fire" aria-hidden="true"></i>
								<p>Kitchenette</p>
							</div>
						</div>
						<div class="moreimgs">
							<div class="img">
								<div class="lupa">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
								<img src="img/cuadruple2.jpeg" alt="">
							</div>
							<div class="img">
								<div class="lupa">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
								<img src="img/cuadruple3.jpeg" alt="">
							</div>
							<div class="img">
								<div class="lupa">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
								<img src="img/cuadruple4.jpeg" alt="">
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
					<a href="sustentabilidad">Leer Más</a>
				</article>
				<article class='ifutil'>
					<h2>Info útil</h2>
					<p>Encontrá aqui toda la información sobre qué hacer en Villa General Belgrano, paseos, excursiones, lugares para visitar, eventos y fiestas.</p>
					<a href="infoutil">Leer Más</a>
				</article>
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
				<div class="redes">
					<a href="https://www.facebook.com/harmoniehoteldemontana/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/hotelharmonie/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
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
					<p>(+54) 03546 - 463805</p>
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
	<?php require 'bottom.php' ?>
	<script type="text/javascript" src='js/jquery-3.1.1.min.js'></script>
	<script type="text/javascript" src='js/application.js'></script>
</body>
</html>


