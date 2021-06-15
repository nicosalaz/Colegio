<?php 

	require_once '../modelos/Curso.php';

	$obj_curso = new Curso();
	$id = $_POST['id_cur'];
	if ($_POST) {
		$obj_curso->delete_curso($id);
		header("Location: ../pages/index.php");
	}else{
		header("Location: ../pages/delete.php");
	}


 ?>