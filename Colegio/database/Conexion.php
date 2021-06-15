<?php 

class Conexion
{
	protected $db;
	protected $dsn = "mysql:host=localhost;dbname=colegio";
	protected $user = "root";
	protected $pass = "";
	function __construct()
	{
		try {
			$this->db = new PDO($this->dsn,$this->user,$this->pass);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $this->db;
		} catch (PDOException $e) {
			echo "algo salio mal ".$e->getMessage();
		}
	}
}

 ?>