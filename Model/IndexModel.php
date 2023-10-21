<?php

class IndexModel {
	
	public function __construct() {
		
	}

	public function actionPerformed($enlace) {
		if(!empty($enlace)) {
			switch ($enlace) {
				case $enlace:
				$module = "View/Modules/" . $enlace . ".php";
				break;
				
				default:
				$module = "View/Modules/Persona.php";
				break;
			}
		} else {
			$module = "View/Modules/Persona.php";
		}
		return $module;
	}
	
}