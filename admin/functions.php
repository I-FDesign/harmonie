<?php 
	function conect(){
		$conexion = new pdo('mysql:host=localhost;dbname=harmonie', 'root', '');
		return $conexion;
	}
	
	function cleanDates($variable){
		$variable = trim($variable);
		$variable = filter_var($variable, FILTER_SANITIZE_STRING);
		return $variable;
	}


 ?>