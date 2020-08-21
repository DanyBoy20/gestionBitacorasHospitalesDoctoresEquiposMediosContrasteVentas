<?php

class EnlacesModels{
	static public function enlacesModel($enlaces){
		if($enlaces == "inicio" || $enlaces == "ingreso" || $enlaces == "hospitales" || $enlaces == "bitacora" || $enlaces == "usuarios" || $enlaces == "salir" || $enlaces == "editarperfil" || $enlaces == "inyectores" || $enlaces == "nuevabitacora" || $enlaces == "registrocontactos" || $enlaces == "registrohospitales" || $enlaces == "seguimiento" || $enlaces == "seguimientobitacora" || $enlaces == "detallehospital" || $enlaces == "registroinyectores" || $enlaces == "filtrobitacora"){
			$module = "vista/modulos/".$enlaces.".php";
		}else if($enlaces == "ok"){ 
			$module =  "vista/modulos/hospitales.php";
		}else if($enlaces == "creada"){ 
			$module =  "vista/modulos/bitacora.php";
		}else if($enlaces == "actualizada"){ 
			$module =  "vista/modulos/bitacora.php";
		}else if($enlaces == "bien"){ 
			$module =  "vista/modulos/inyectores.php";
		}else if($enlaces == "index"){
			$module = "vista/modulos/ingreso.php";
		}else{
			$module = "vista/modulos/ingreso.php";
		}
		return $module;
	}
}
