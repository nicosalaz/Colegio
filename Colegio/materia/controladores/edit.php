<?php 


	require_once '../modelos/Materia.php';

	$obj = new Materia();
	$id = $_POST['id_mat'];
	$nom = $_POST['nom_mat'];
	$cod = $_POST['cod_mat'];

	if ($_POST) {
		$obj->edit_materia($id,$nom,$cod);
		header("Location: ../pages/index.php");
	}else{
		header("Location: ../pages/edit.php");
	}

 ?>