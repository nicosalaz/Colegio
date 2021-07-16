<?php 

	require_once '../modelos/Profesor.php';
	$obj = new Profesor();
	$id = $_GET['id_profesor'];
	$datos = $obj->getByID($id);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 	<title>Editar Profesor</title>
 </head>
 <body>
 	<h2 class="bg-dark text-uppercase text-white text-center">editar profesor</h2>
 	<div class="container">
 		<?php 
 			foreach ($datos as $dato) {
 		 ?>
 		<form class="form-control" action="../controladores/edit.php" method="POST">
		    <input type="hidden" class="form-control" name="id_pro" value="<?php echo $dato['ID_PROFESOR'] ?>"></input>
 		  <label for="nom" class="form-label">Nombre </label>
		    <input type="text"class="form-control" name="nom" value="<?php echo $dato['NOMBRE']; ?>"></input>
            <label for="ape" class="form-label">Apellido </label>
		    <input type="text"class="form-control" name="ape" value="<?php echo $dato['APELLIDOS'] ?>"></input>
          <label for="identi" class="form-label">Identificación </label>
		    <input type="text"class="form-control" name="identi" value="<?php echo $dato['IDENTIFICACION'] ?>"></input>
		  
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