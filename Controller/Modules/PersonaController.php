<?php
require_once("Model/Modules/PersonaModel.php");

class UsuariosController {

	private $personaModel;
	
	public function __construct() {
		$this->personaModel = new UsuariosModel();
	}

	public function registrarUsuario() {
		if (isset($_POST['nombres_r']) && isset($_POST['apellidos_r']) && isset($_POST['fecha_nacimiento_r'])
		&& isset($_POST['correo_r']) && isset($_POST['telefono_r']) && isset($_POST['pasatiempo_r']) && isset($_POST['direccion_r'])
		
		) {
			
			$lista = array(
				'nombres' => $_POST['nombres_r'], 
				'apellidos' => $_POST['apellidos_r'], 
				'fecha_nacimiento' => $_POST['fecha_nacimiento_r'],
				'correo' => $_POST['correo_r'], 
				'telefono' => $_POST['telefono_r'], 
				'pasatiempo' => $_POST['pasatiempo_r'], 
				'direccion' => $_POST['direccion_r'])
			
			;

			$request = $this->personaModel->registrarUsuarioDB($lista, "TblPersona");
			
			if($request) { return $request; } else { ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error, no se Registró el Persona</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php }
		}
	}

	public function buscarUsuario() {
		return $this->personaModel->buscarUsuarioDB("TblPersona");
	}

	public function eliminarUsuario() {
		if(isset($_POST['idpersona_e'])) {
			$lista = array('idpersona' => $_POST['idpersona_e']);

			$request = $this->personaModel->eliminarUsuarioDB($lista, "TblPersona");
			if($request) { return $request; } else { ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error, no se Registró el Persona</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php }
		}
	}

	public function modificarUsuario() {
		if(isset($_POST['idpersona_m']) && isset($_POST['nombres_m']) && isset($_POST['apellidos_m']) && isset($_POST['fecha_nacimiento_m'])) {
			$lista = array('idpersona' => $_POST['idpersona_m'], 'nombres' => $_POST['nombres_m'], 'apellidos' => $_POST['apellidos_m'], 'fecha_nacimiento' => $_POST['fecha_nacimiento_m']);

			$request = $this->personaModel->modificarUsuarioDB($lista, "TblPersona");
			if($request) { return $request; } else { ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error, no se Registró el Persona</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php }
		}
	}

}