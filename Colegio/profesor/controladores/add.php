<?php

    require_once '../modelos/Profesor.php';
    require_once '../../usuario/modelos/Usuario.php';

    $obj = new Profesor();
    $obj_user = new Usuario();
    $nom = $_POST['nom'];
    $ape = $_POST['ape'];
    $identi = $_POST['identi'];
    $genero = $_POST['genero'];
    $cod = $_POST['cod'];
    $curso = $_POST['curso'];
    $mat = $_POST['mat'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($_POST) {
        $obj_user->add($user,$pass);
        $datos = $obj_user->get_byUser($user);
        foreach ($datos as $dato) {
            $id_user = $dato['ID_USER'];
        }
        $obj->add($nom,$ape,$identi,$genero,$cod,$curso,$mat,$id_user);
        header("Location: ../pages/index.php");
    }else{
        header("Location: ../pages/add.php");
    }

?>