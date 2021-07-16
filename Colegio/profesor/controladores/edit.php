<?php

    require_once '../modelos/Profesor.php';
    
    $obj = new Profesor();
    if ($_POST) {
        $nom = $_POST["nom"];
        $ape = $_POST["ape"];
        $identi = $_POST["identi"];
        $id_profesor = $_POST["id_pro"];
        $obj->edit($nom,$ape,$identi,$id_profesor);
        header('Location: ../Pages/index.php');
    }else{
        header('Location: ../Pages/edit.php');
    }


?>