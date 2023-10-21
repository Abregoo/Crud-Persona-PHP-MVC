<?php
require_once("Model/Conexion.php");

class UsuariosModel {

	private $conexion;
	
	public function __construct() {
		$this->conexion = Conexion::getInstance();
	}

	public function registrarUsuarioDB($lista, $tabla) {
		$sql = "INSERT INTO $tabla (nombres,apellidos,fecha_nacimiento,correo,telefono,pasatiempo,direccion)
		 VALUES (?,?,?,?,?,?,?)";
		try {
			$PreparedStatement = $this->conexion->getPrepareStatement($sql);
			$PreparedStatement->bindValue(1, $lista['nombres'], PDO::PARAM_STR);
			$PreparedStatement->bindValue(2, $lista['apellidos'], PDO::PARAM_STR);
			$PreparedStatement->bindValue(3, $lista['fecha_nacimiento'], PDO::PARAM_STR);
			$PreparedStatement->bindValue(4, $lista['correo'], PDO::PARAM_STR);
			$PreparedStatement->bindValue(5, $lista['telefono'], PDO::PARAM_STR);
			$PreparedStatement->bindValue(6, $lista['pasatiempo'], PDO::PARAM_STR);
			$PreparedStatement->bindValue(7, $lista['direccion'], PDO::PARAM_STR);
			return $PreparedStatement->execute();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}



	public function buscarUsuarioDB($tabla) {
		$sql = "SELECT * FROM $tabla";
		try {
			$PreparedStatement = $this->conexion->getPrepareStatement($sql);
			$PreparedStatement->execute();
			return $PreparedStatement->fetchAll();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}

	public function eliminarUsuarioDB($lista, $tabla) {
		$sql = "DELETE FROM $tabla WHERE idpersona=?";
		try {
			$PreparedStatement = $this->conexion->getPrepareStatement($sql);
			$PreparedStatement->bindValue(1, $lista['idpersona'], PDO::PARAM_INT);
			return $PreparedStatement->execute();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}

	public function modificarUsuarioDB($lista, $tabla) {
		$sql = "UPDATE $tabla SET nombres=?, apellidos=?, fecha_nacimiento=? WHERE idpersona=?";
		try {
			$PreparedStatement = $this->conexion->getPrepareStatement($sql);
			$PreparedStatement->bindValue(1, $lista['nombres'], PDO::PARAM_STR);
			$PreparedStatement->bindValue(2, $lista['apellidos'], PDO::PARAM_STR);
			$PreparedStatement->bindValue(3, $lista['fecha_nacimiento'], PDO::PARAM_STR);
			$PreparedStatement->bindValue(4, $lista['idpersona'], PDO::PARAM_INT);
			return $PreparedStatement->execute();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}
	
}