<?php 

	require_once '../modelos/Materia.php';

	$obj = new Materia();
	$id = $_POST['id_mat'];
	if ($_POST) {
		$obj->delete_materia($id);
		header("Location: ../pages/index.php");
	}else{
		header("Location: ../pages/delete.php");
	}
 ?>