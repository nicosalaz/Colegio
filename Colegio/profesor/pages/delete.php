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
 	<title>Eliminar Profesor</title>
 </head>
 <body>
 	<h1 class="bg-dark text-uppercase text-white">¿seguro que quiere eliminar este registro?</h1>
 	<div class="container">
 		<?php 
 			foreach ($datos as $dato) {
 		 ?>
		<form class="form-control" action="../controladores/delete.php" method="POST">
			<input type="hidden" name="id_pro" value="<?php echo $id ?>">
		  <label for="nom_mat" class="form-label">Nombre</label>
		  <input class="form-control" name="nom" value="<?php echo $dato['NOMBRE'] ?>" readonly></input>
		  <label for="cod_mat" class="form-label">Apellido</label>
		  <input class="form-control" name="ape" value="<?php echo $dato['APELLIDOS']?>" readonly></input>
		  <input type="submit" class="btn btn-danger" value="Si, deseo eliminarlo">
		  <button class="btn btn-info"><a href="index.php" style="text-decoration: none;color: sky;">No</a></button>
		</form>
		<?php 
			}
		 ?>
	</div>
 </body>
 </html>