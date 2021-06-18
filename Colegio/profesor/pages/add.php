<?php 
    require_once '../../genero/modelos/Genero.php';
    require_once '../../curso/modelos/Curso.php';
    require_once '../../materia/modelos/Materia.php';


    $obj_genero = new Genero();
    $obj_curso = new Curso();
    $obj_mat = new Materia();
    $datos_genero = $obj_genero->get();
    $datos_curso = $obj_curso->get_cursos_disponibles();
    $datos_mat = $obj_mat->get_materias();
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
			<label for="nom" class="form-label"><strong>Nombre</strong></label>
            <input class="form-control" name="nom" required></input>
            <label for="ape" class="form-label"><strong>Apellido</strong></label>
            <input class="form-control" name="ape" required></input>
            <label for="identi" class="form-label"><strong>Identificación</strong></label>
            <input class="form-control" name="identi" required></input>
            <label for="genero" class="form-label"><strong>Género</strong></label>
            <select name="genero" id="genero" class="form-select">
                <option value="" selected></option>
                <?php 
                    foreach ($datos_genero as $dato_genero) {
                ?>
                <option value="<?php echo $dato_genero['ID_GENERO']; ?>"><?php echo $dato_genero['TIPO_GENERO']; ?></option>
                <?php 
                    }
                ?>
            </select>
            <label for="cod" class="form-label"><strong>Código de profesor</strong></label>
            <input class="form-control" name="cod" required></input>
            <label for="curso" class="form-label"><strong>Curso</strong></label>
            <select name="curso" id="curso" class="form-select">
                <option value="" selected></option>
                <?php 
                    foreach ($datos_curso as $dato_curso) {
                ?>
                <option value="<?php echo $dato_curso['ID_CURSO']; ?>"><?php echo $dato_curso['NOMBRE_CURSO']; ?></option>
                <?php 
                    }
                ?>
            </select>
            <button class="btn btn-outline-warning"><a href="../../curso/pages/add.php" style="text-decoration: none;color: black;">Agregar curso</a></button>
            <br>
            <label for="mat" class="form-label"><strong>Materia</strong></label>
            <select name="mat" id="mat" class="form-select">
                <option value="" selected></option>
                <?php 
                    foreach ($datos_mat as $dato_mat) {
                ?>
                <option value="<?php echo $dato_mat['ID_MATERIA']; ?>"><?php echo $dato_mat['NOMBRE_MATERIA']; ?></option>
                <?php 
                    }
                ?>
            </select>
            <button class="btn btn-outline-warning"><a href="../../materia/pages/add.php" style="text-decoration: none;color: black;">Agregar materia</a></button>
            <br>
            <label for="user" class="form-label"><strong>Usuario</strong></label>
            <input type="text" class="form-control" name="user" required></input>
            <label for="pass" class="form-label"><strong>Contraseña</strong></label>
            <input type="password" class="form-control" name="pass" required></input>
            <br>
            <input type="submit" class="btn btn-primary">
            <input type="reset" value="Borrar" class="btn btn-danger">
		</form>
        <br>
		<button class="btn btn-outline-info"><a href="index.php" style="text-decoration: none;color: sky;">Volver</a></button>
	</div>
</body>
</html>