<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<title></title>
</head>
<body>
	<h2 class="bg-dark text-uppercase text-white text-center">Agregar materia</h2>
	<div class="container">
		<form class="form-control" action="../controladores/add.php" method="POST">
			<label for="nom_mat" class="form-label">Nombre materia </label>
		  <input class="form-control" name="nom_mat" placeholder="Física" required></input>
		  <label for="cod_mat" class="form-label">Código Materia</label>
		  <input class="form-control" name="cod_mat" placeholder="F321" required></input>
		  <input type="submit" class="btn btn-primary">
		  <input type="reset" value="Borrar" class="btn btn-danger">
		</form>
		<button class="btn btn-outline-info"><a href="index.php" style="text-decoration: none;color: sky;">Volver</a></button>
	</div>


</body>
</html>