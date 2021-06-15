<?php 

	require_once '../modelos/Materia.php';

	$id_materia = $_GET['id_materia'];
	$obj = new Materia();

	$datos = $obj->get_materia_byId($id_materia);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 	<title>Editar Materia</title>
 </head>
 <body>
 	<h2 class="bg-dark text-uppercase text-white text-center">editar materia</h2>
 	<div class="container">
 		<?php 
 			foreach ($datos as $dato) {
 		 ?>
		<form class="form-control" action="../controladores/edit.php" method="POST">
			<input type="hidden" name="id_mat" value="<?php echo $id_materia ?>">
		  <label for="nom_mat" class="form-label">Nombre materia </label>
		  <input class="form-control" name="nom_mat" value="<?php echo $dato['NOMBRE_MATERIA'] ?>" required></input>
		  <label for="cod_mat" class="form-label">Código Materia</label>
		  <input class="form-control" name="cod_mat" value="<?php echo $dato['COD_MATERIA']?>" required></input>
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