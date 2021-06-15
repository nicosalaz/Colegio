<?php 

	require_once '../modelos/Curso.php';

	$obj = new Curso();
	$nom_curso = $_POST['nom_cur']; 
	if ($_POST) {
		$obj->add($nom_curso);
		header("Location: ../pages/index.php");
	}else{
		header("Location: ../pages/add.php");
	}


 ?>