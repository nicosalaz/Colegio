<?php

    require_once "../modelos/Usuario.php";
    if ($_POST) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $obj = new Usuario();
        $result = $obj->inicio_sesion($user,$pass);
        echo "no entro";
        foreach ($result as $r) {
            $numero = $r['conteo'];
        }
        foreach ($obj->get_tipo_user($user,$pass) as $key) {
            $tipo = $key['TIPO_USUARIO'];
        }
        if ( $numero == 1) {
            echo "entro";
            echo $tipo;
            if ($tipo == "Profesor") {
                header('Location : ../../Profesor/pages/index.php');
            }
            elseif ($tipo == "Admin") {
                header('Location : ../../Administrador/pages/index.php');
            }
        }   
    }

?>