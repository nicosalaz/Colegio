<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<title>Agregar Curso</title>
</head>
<body>
	<h2 class="bg-dark text-uppercase text-white text-center">Agregar curso</h2>
	<div class="container">
		<form class="form-control" action="../controladores/add.php" method="POST">
			<label for="nom_cur" class="form-label">Nombre Curso </label>
		  <input class="form-control" name="nom_cur" placeholder="11-A" required></input>
		  <input type="submit" class="btn btn-primary">
		  <input type="reset" value="Borrar" class="btn btn-danger">
		</form>
		<button class="btn btn-outline-info"><a href="index.php" style="text-decoration: none;color: sky;">Volver</a></button>
	</div>
</body>
</html>