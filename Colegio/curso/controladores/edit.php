<?php 
	require_once '../modelos/Curso.php';
	$obj = new Curso();
	$id = $_POST['id_cur'];
	$nom = $_POST['nom_cur'];

	if ($_POST) {
		$obj->update_curso($id,$nom);
		header("Location: ../pages/index.php");
	}else{
		header("Location: ../pages/edit.php");
	}

 ?>