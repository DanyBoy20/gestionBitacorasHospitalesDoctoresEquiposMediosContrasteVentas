<?php
session_start();
class Ingreso{
	static public function ingresoController(){
		if(isset($_POST["usuarioIngreso"])){
			$datosController = array("usuario"=>$_POST["usuarioIngreso"], "password"=>$_POST["passwordIngreso"]);
			$respuesta = IngresoModels::ingresoModel($datosController);
			if($respuesta["emailpersonal"] == $_POST["usuarioIngreso"] && $respuesta["passwordpersonal"] == $_POST["passwordIngreso"]){
				$_SESSION["validar"] = true;
				$_SESSION["usuario"] = $respuesta["idpersonal"];
				$_SESSION["nombre"] = $respuesta["nombrepersonal"];
				//echo '<script> alert("bienvenido");</script>';
				echo '<script> windows.location="inicio"</script>';
				# header("Location:inicio");
			}else{
				echo "<p id='popuperror'>DATOS INCORRECTOS</p>";
			}
		}	
	}
}
