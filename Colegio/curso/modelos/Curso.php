<?php 
	require_once '../../database/Conexion.php';

	class Curso extends Conexion
	{
		
		function __construct()
		{
			$this->db = parent::__construct();
		}
		public function add($nombre_curso){
			$sql = "INSERT INTO curso(NOMBRE_CURSO) VALUES (:nombre_curso)";
			$query = $this->db->prepare($sql);
			$query->execute(array(':nombre_curso'=>$nombre_curso));
		}
		public function get_curso(){
			$sql="SELECT ID_CURSO,NOMBRE_CURSO FROM curso";
			$query = $this->db->prepare($sql);
			$query->execute();
			$datos = $query->fetchAll();
			return $datos;
		}
		public function get_byId($id_curso){
			$sql = "SELECT ID_CURSO, NOMBRE_CURSO FROM curso WHERE ID_CURSO = :id_curso";
			$query = $this->db->prepare($sql);
			$query->execute(array(':id_curso'=>$id_curso));
			$datos = $query->fetchAll();
			return $datos;
		}
		public function update_curso($id_curso,$nombre_curso)
		{
			$sql = "UPDATE curso SET NOMBRE_CURSO=:nombre_curso WHERE ID_CURSO =:id_curso";
			$query = $this->db->prepare($sql);
			$query->execute(array(":id_curso"=>$id_curso,
								  ":nombre_curso"=>$nombre_curso));
		}
		public function delete_curso($id_curso)
		{
			$sql ="DELETE FROM curso WHERE ID_CURSO = :id_curso"; 
			$query = $this->db->prepare($sql);
			$query->execute(array(':id_curso'=>$id_curso));
		}
	}


 ?>