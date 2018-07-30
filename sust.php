<?php 
	$conexion = conect();
	$statement = $conexion->prepare('SELECT * FROM sust WHERE clase = :clase');
	$statement->execute(array(':clase' => 'sep'));
	$resultados = $statement->fetchAll();

	$statement = $conexion->prepare('SELECT * FROM sust WHERE clase = :clase');
	$statement->execute(array(':clase' => 'comp'));
	$compostaje = $statement->fetchAll();

	$statement = $conexion->prepare('SELECT * FROM sust WHERE clase = :clase');
	$statement->execute(array(':clase' => 'huerta'));
	$huerta = $statement->fetchAll();

	$statement = $conexion->prepare('SELECT * FROM sust WHERE clase = :clase');
	$statement->execute(array(':clase' => 'efi'));
	$eficiencia = $statement->fetchAll();
 ?>