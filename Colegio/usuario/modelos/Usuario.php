<?php

    require_once '../../database/Conexion.php';

    class Usuario extends Conexion
    {
        public function __construct() {
            $this->db = parent::__construct();
        }
        public function add($user,$pass)
        {
            $sql = "INSERT INTO usuario(USER, PASSWORD) VALUES (:user,:pass)";
            $query = $this->db->prepare($sql);
            $query->execute(array(':user'=>$user,
                                  ':pass'=>$pass));
        }
        public function get_byUser($user)
        {
            $sql = "SELECT ID_USER FROM usuario where USER = :user";
            $query = $this->db->prepare($sql);
            $query->execute(array(':user'=>$user));
            $datos = $query->fetchAll();
            return $datos;
        }
    }
    
?>