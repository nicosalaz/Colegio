<?php

require_once'../../database/Conexion.php';

class Genero extends Conexion
{
    public function __construct() {
        $this->db = parent::__construct();
    }
    public function get()
    {
        $sql = "SELECT ID_GENERO,TIPO_GENERO FROM genero";
        $query = $this->db->prepare($sql);
        $query->execute();
        $datos = $query->fetchAll();
        return $datos;
    }
}


?>