<?php

class Conexion {

	//Conexion, con patron de Singleton
	private $host = "sql9.freemysqlhosting.net";
	private $db_name = "sql9654853";
	private $user = "sql9654853";
	private $pass = "1nDuzPKZ1F";

	private static $conexion = null;
	private $conn;

	private function __construct() {
		try {
			$this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->user, $this->pass);
		} catch (PDOException $e) {
			echo "Error: " . $e;
		}
	}

	public static function getInstance() {
		if(!self::$conexion) {
			self::$conexion = new Conexion();
		}
		return self::$conexion;
	}

	public function getPrepareStatement($sql) {
		return $this->conn->prepare($sql);
	}
	
}