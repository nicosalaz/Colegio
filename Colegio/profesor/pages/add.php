<?php 
    require_once '../../genero/modelos/Genero.php';

    $obj_genero = new Genero();
    $datos = $obj_genero->get();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Agregar profesor</title>
</head>
<body>
<h2 class="bg-dark text-uppercase text-white text-center">Agregar Profesor</h2>
	<div class="container">
		<form class="form-control" action="../controladores/add.php" method="POST">
			<label for="nom" class="form-label">Nombre</label>
            <input class="form-control" name="nom" required></input>
            <label for="ape" class="form-label">Apellido</label>
            <input class="form-control" name="ape" required></input>
            <label for="identi" class="form-label">Identificación</label>
            <input class="form-control" name="identi" required></input>
            <label for="genero" class="form-label">genero</label>
            <select name="genero" id="genero" class="form-select">
                <option value="" selected></option>
                <?php 
                    foreach ($datos as $dato) {
                ?>
                <option value="<?php echo $dato['ID_GENERO']; ?>"><?php echo $dato['TIPO_GENERO']; ?></option>
                <?php 
                    }
                ?>
            </select>
            <br>
            <input type="submit" class="btn btn-primary">
            <input type="reset" value="Borrar" class="btn btn-danger">
		</form>
        <br>
		<button class="btn btn-outline-info"><a href="index.php" style="text-decoration: none;color: sky;">Volver</a></button>
	</div>
</body>
</html>