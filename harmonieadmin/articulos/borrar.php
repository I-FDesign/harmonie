<?php session_start();
	require '../../admin/functions.php';

	if(!isset($_SESSION['hm_user'])){
		header('Location: ../../');
	}

	$id = (isset($_GET['id']) && is_numeric($_GET['id'])) ? $_GET['id'] : 1;
	$conexion = conect();
	$statement= $conexion->prepare('DELETE FROM sust WHERE id = :id');
	$statement->execute(array(':id' => $id));
	header('Location: ../../');
?>