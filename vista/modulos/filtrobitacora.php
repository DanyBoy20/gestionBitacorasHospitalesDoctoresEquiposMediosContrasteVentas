<?php
session_start();
if(!$_SESSION["validar"]){
	header("Location:ingreso");
	exit();
}
include "vista/modulos/cabecera.php";
include "vista/modulos/navegacion.php";
$filtrobitacora = new GestorBitacoras();
$filtrobitacora -> filtroBitacoraController();
$actualizarbitacora = new GestorBitacoras();
$actualizarbitacora -> actualizarBitacoraController();
if(isset($_GET["action"])){
	if($_GET["action"] == "actualizada"){
		echo "Actualizaion exitosa";
	}
}
include "vista/modulos/pie.php";
?>