<?php

    require_once '../../database/Conexion.php';
    
    class Profesor extends Conexion
    {
        public function __construct() {
            $this->db = parent::__construct();
        }
        public function add($nombre,$apellido,$identificacion,$genero,$cod_profesor,$curso_id,$materia_id,$user_id)
        {
            $sql = "INSERT INTO profesor(NOMBRE, APELLIDOS, IDENTIFICACION, GENERO_ID, COD_DOCENTE,
                     CURSO_ID, MATERIA_ID, USER_ID) 
                    VALUES (:nombre,:apellido,:identificacion,:genero,:cod_profesor,:curso_id,:materia_id,:user_id)";
            $query = $this->db->prepare($sql);
            $query->execute(array(':nombre'=>$nombre,
                                  ':apellido'=>$apellido,
                                  ':identificacion'=>$identificacion,
                                  ':genero'=>$genero,
                                  ':cod_profesor'=>$cod_profesor,
                                  ':curso_id'=>$curso_id,
                                  ':materia_id'=>$materia_id,
                                  ':user_id'=>$user_id));
        }
        public function update_profesor($id_profesor,$nombre,$apellido,$identificacion,$genero,$cod_profesor,$curso_id,$materia_id,$user_id)
        {
            $sql = "UPDATE profesor SET NOMBRE=:nombre,APELLIDOS=:apellido,IDENTIFICACION=:identificacion,
                    GENERO_ID=:genero,COD_DOCENTE=:cod_profesor,CURSO_ID=:curso_id,MATERIA_ID=:materia_id,
                    USER_ID=:user_id WHERE ID_PROFESOR=:id_profesor";
            $query = $this->db->prepare($sql);
            $query->execute(array(':id_profesor'=>$id_profesor,
                                  ':nombre'=>$nombre,
                                  ':apellido'=>$apellido,
                                  ':identificacion'=>$identificacion,
                                  ':genero'=>$genero,
                                  ':cod_profesor'=>$cod_profesor,
                                  ':curso_id'=>$curso_id,
                                  ':materia_id'=>$materia_id,
                                  ':user_id'=>$user_id));
        }
    }

?>