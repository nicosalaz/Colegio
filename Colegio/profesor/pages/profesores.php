<?php
  require_once '../modelos/Profesor.php';

  $obj_profesor = new Profesor();
  $datos = $obj_profesor->getProfesor();
  $conta = 1;
?>

<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 	<title>Materias</title>
 </head>
 <body>

 	<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-eyeglasses" viewBox="0 0 16 16">
  				<path d="M4 6a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A1.993 1.993 0 0 0 8 6c-.532 0-1.016.208-1.375.547zM14 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
			</svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-white">Materias</a></li>
          <li><a href="../../curso/pages/index.php" class="nav-link px-2 text-white">Cursos</a></li>
          <li><a href="../../profesor/pages/index.php" class="nav-link px-2 text-white">Profesores</a></li>
          <li><a href="../../estudiante/pages/index.php" class="nav-link px-2 text-white">Estudiantes</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>

  <table class="table table-hover ">
 		<thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">NOMBRE</th>
		      <th scope="col">IDENTIFICACION</th>
          <th scope="col">CÓDIGO DE DOCENTE</th>
          <th scope="col">TITULAR DE CURSO</th>
          <th scope="col">MATERIA TITULAR</th>
          <th scope="col">USUARIO</th>
          <th scope="col"></th>
		    </tr>
	  </thead>
	  <tbody>
	  <?php 
	  	foreach ($datos as $dato) {
	  ?>
	    <tr>
	      <th scope="row"><?php echo $conta; ?></th>
	      <td><?php echo $dato['NOMBRE']." ".$dato['APELLIDOS']; ?></td>
        <td><?php echo $dato['IDENTIFICACION'] ?></td>
        <td><?php echo $dato['COD_DOCENTE'] ?></td>
        <td><?php echo $dato['nom_curso']?></td>
        <td><?php echo $dato['nom_mat']?></td>
        <td><?php echo $dato['us'] ?></td>
	      <td><button class="btn btn-warning"><a href="edit.php?id_profesor=<?php echo $dato['ID_PROFESOR'] ?>" style="text-decoration: none;color: black;">Editar</a></button>
        <button class="btn btn-danger"><a href="delete.php?id_profesor=<?php echo $dato['ID_PROFESOR'] ?>" style="text-decoration: none;color: black;">Eliminar</a></button>
	      </td>
	    </tr>
		<?php $conta++; } ?>
	  </tbody>
 	</table>
 		
 	<button class="btn btn-outline-secondary"><a href="add.php" style="text-decoration: none;color: black;">Agregar Profesor</a></button>


 </body>
 </html>