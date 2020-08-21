<?php
session_start();
if(!$_SESSION["validar"]){
	header("Location:ingreso");
	exit();
}
include "vista/modulos/cabecera.php";
include "vista/modulos/navegacion.php";
$hospital = new GestorHospital();
$hospital -> mostrarHospitalController();
include "vista/modulos/pie.php";
?>