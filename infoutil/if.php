<?php 
	$conexion = conect();
	$statement = $conexion->prepare('SELECT * FROM ifutil WHERE clase = :clase');
	$statement->execute(array(':clase' => 'llegar'));
	$llegar = $statement->fetchAll();

	$statement = $conexion->prepare('SELECT * FROM ifutil WHERE clase = :clase');
	$statement->execute(array(':clase' => 'paseos'));
	$paseos = $statement->fetchAll();

	$statement = $conexion->prepare('SELECT * FROM ifutil WHERE clase = :clase');
	$statement->execute(array(':clase' => 'fest'));
	$fest = $statement->fetchAll();

 ?>