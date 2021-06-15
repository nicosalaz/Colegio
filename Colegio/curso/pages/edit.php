<?php 

	require_once '../modelos/Curso.php';
	$obj = new Curso();
	$id = $_GET['id_curso'];
	$datos = $obj->get_byId($id);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 	<title>Editar Curso</title>
 </head>
 <body>
 	<h2 class="bg-dark text-uppercase text-white text-center">editar curso</h2>
 	<div class="container">
 		<?php 
 			foreach ($datos as $dato) {
 		 ?>
 		<form class="form-control" action="../controladores/edit.php" method="POST">
		  <input type="hidden" class="form-control" name="id_cur" value="<?php echo $dato['ID_CURSO'] ?>"></input>
 			<label for="nom_cur" class="form-label">Nombre Curso </label>
		  <input type="text"class="form-control" name="nom_cur" value="<?php echo $dato['NOMBRE_CURSO'] ?>"></input>
		  <input type="submit" class="btn btn-primary">
		  <input type="reset" value="Borrar" class="btn btn-danger">
 		</form>
 		<?php 
 			}
 		 ?>
 		 <button class="btn btn-outline-info"><a href="index.php" style="text-decoration: none;color: sky;">Volver</a></button>
 	</div>
 </body>
 </html>