<?php

    require_once '../modelos/Profesor.php';

    $obj = new Profesor();
    $id = $_POST["id_pro"];

    if ($_POST) {
        $obj->delete($id);
        header("Location: ../Pages/index.php");
    }else{
        header("Location: ../Pages/delete.php");
    }

?>