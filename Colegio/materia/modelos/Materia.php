<?php 

	require_once '../../database/Conexion.php';

	class Materia extends Conexion
	{
		
		function __construct()
		{
			$this->db = parent::__construct();
		}
		public function add ($NOMBRE_MATERIA,$COD_MATERIA){
			$sql =  "INSERT INTO materia(NOMBRE_MATERIA, COD_MATERIA)
						VALUES (:NOMBRE_MATERIA,:COD_MATERIA)";
			$query = $this->db->prepare($sql);
			if ($query->execute(array(':NOMBRE_MATERIA'=> $NOMBRE_MATERIA,
								  ':COD_MATERIA' => $COD_MATERIA))) {
				header('Location: ../pages/index.php');
			}
		}
		public function get_materias()
		{
			$rows = null;
			$sql = "SELECT ID_MATERIA, NOMBRE_MATERIA, COD_MATERIA FROM materia";
			$query = $this->db->prepare($sql);
			$query->execute();
			$rows = $query->fetchAll();
			return $rows;
		}
		public function get_materia_byId($id_materia)
		{
			$sql = "SELECT NOMBRE_MATERIA, COD_MATERIA FROM materia WHERE ID_MATERIA = :id_materia";
			$query = $this->db->prepare($sql);
			$query->execute(array(':id_materia'=>$id_materia));
			$datos = $query->fetchAll();
			return $datos;
		}
		public function edit_materia($id_materia,$nombre_materia,$cod_materia)
		{
			$sql = "UPDATE materia SET NOMBRE_MATERIA=:nombre_materia,COD_MATERIA=:cod_materia WHERE ID_MATERIA = :id_materia";
			$query = $this->db->prepare($sql);
			$query->execute(array(':id_materia'=>$id_materia,
								  ':nombre_materia'=>$nombre_materia,
								  ':cod_materia'=>$cod_materia));
		}
		public function delete_materia($id_materia)
		{
			$sql="DELETE FROM materia WHERE ID_MATERIA = :id_materia";
			$query = $this->db->prepare($sql);
			$query->execute(array(':id_materia'=>$id_materia));
		}
	} 



 ?>