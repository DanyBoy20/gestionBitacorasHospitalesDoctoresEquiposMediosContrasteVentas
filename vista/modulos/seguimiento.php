<?php
session_start();
if(!$_SESSION["validar"]){
	/* DESCOMENTAR EN SERVIDORES CON PHP 5.6
	session_unset();
    session_destroy();
    echo "<script>window.location.replace('https://localhost/medikrom')</script>";
	exit();
	*/
	# PHP 7+
	header("Location:ingreso");
	exit();	
}
include "vista/modulos/cabecera.php";
include "vista/modulos/navegacion.php";
$detallebitacora = new GestorBitacoras();
$detallebitacora -> mostrarBitacoraController();
$actualizarbitacora = new GestorBitacoras();
$actualizarbitacora -> actualizarBitacoraController();
if(isset($_GET["action"])){
	if($_GET["action"] == "actualizada"){
		echo "Actualizaion exitosa";
	}
}
include "vista/modulos/pie.php";
?>