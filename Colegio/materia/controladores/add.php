<?php 

	require_once '../modelos/Materia.php';

	$obj = new Materia();

	if ($_POST) {
		$nombre_materia = $_POST['nom_mat'];
		$cod_materia = $_POST['cod_mat'];
		$obj->add($nombre_materia,$cod_materia);
	}else{
		echo "algo salio mal";
	}

 ?>